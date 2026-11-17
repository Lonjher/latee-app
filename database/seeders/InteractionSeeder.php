<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class InteractionSeeder extends Seeder
{
    public function run(): void
    {
        $posts  = Post::where('is_published', true)->get();
        $users  = User::all();

        if ($posts->isEmpty() || $users->isEmpty()) {
            $this->command->warn('⚠️  InteractionSeeder: butuh posts & users.');
            return;
        }

        // ============================================
        // COMMENTS
        // ============================================

        foreach ($posts->random(min(10, $posts->count())) as $post) {

            // 2-5 komentar top-level
            $rootComments = Comment::factory()
                ->count(fake()->numberBetween(2, 5))
                ->for($post, 'commentable')
                ->create([
                    'user_id' => $users->random()->id,
                ]);

            // Balasan untuk ~50% komentar
            $rootComments->each(function (Comment $root) use ($post, $users) {
                if (fake()->boolean(50)) {
                    Comment::factory()
                        ->for($post, 'commentable')
                        ->replyTo($root->id)
                        ->count(fake()->numberBetween(1, 3))
                        ->create([
                            'user_id' => $users->random()->id,
                        ]);
                }
            });

            // 30% chance guest comment
            if (fake()->boolean(30)) {
                Comment::factory()
                    ->guest()
                    ->for($post, 'commentable')
                    ->create();
            }
        }

        // ============================================
        // LIKES
        // ============================================

        foreach ($posts as $post) {
            // Setiap post dapat 5-15 like dari user berbeda
            $likerIds = $users->random(min(fake()->numberBetween(5, 15), $users->count()))->pluck('id');

            foreach ($likerIds as $userId) {
                Like::firstOrCreate(
                    [
                        'user_id'       => $userId,
                        'likeable_type' => Post::class,
                        'likeable_id'   => $post->id,
                    ]
                );
            }
        }

        // ============================================
        // SYNC COUNTERS (denormalized)
        // ============================================

        Post::withCount(['likes', 'comments'])
            ->each(function (Post $post) {
                $post->update([
                    'likes_count'    => $post->likes_count,
                    'comments_count' => $post->comments_count,
                ]);
            });

        $this->command->info('💬 ' . Comment::count() . ' komentar, ❤️  ' . Like::count() . ' like siap.');
    }
}
