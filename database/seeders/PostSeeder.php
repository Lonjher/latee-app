<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::all();
        $admins     = User::role(['admin', 'editor'])->get();
        $pengasuhs  = User::role('pengasuh')->get();

        if ($categories->isEmpty() || $admins->isEmpty()) {
            $this->command->warn('⚠️  PostSeeder: pastikan CategorySeeder & AdminUserSeeder sudah jalan.');
            return;
        }

        // Distribusi 25 posts ke kategori
        foreach ($categories as $category) {
            $count = match ($category->type) {
                'news'        => 5,
                'article'     => 4,
                'opini'       => 3,
                'pengumuman'  => 2,
                default       => 3,
            };

            Post::factory()
                ->count($count)
                ->create([
                    'category_id' => $category->id,
                    'user_id'     => $admins->random()->id,
                ]);
        }

        // Featured post (headline)
        Post::factory()
            ->featured()
            ->create([
                'category_id' => $categories->firstWhere('type', 'news')->id,
                'user_id'     => $admins->first()->id,
                'title'       => 'Selamat Datang di Portal Resmi Annuqayah Latee',
                'published_at' => now(),
            ]);

        // Draft post (belum publish)
        Post::factory()
            ->draft()
            ->count(2)
            ->create([
                'category_id' => $categories->random()->id,
                'user_id'     => $admins->random()->id,
            ]);

        // Post dari pengasuh (jika ada)
        if ($pengasuhs->isNotEmpty()) {
            Post::factory()
                ->count(2)
                ->create([
                    'category_id' => $categories->firstWhere('type', 'article')->id,
                    'user_id'     => $pengasuhs->random()->id,
                ]);
        }

        $this->command->info('📝 ' . Post::count() . ' posts siap.');
    }
}
