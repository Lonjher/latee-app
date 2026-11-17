<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RolePermissionSeeder::class,
            AdminUserSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            PostSeeder::class,
            QuoteSeeder::class,
            GallerySeeder::class,
            InteractionSeeder::class,
        ]);
    }
}
