<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LikeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id'       => User::factory(),
            'likeable_type' => Post::class,
            // likeable_id harus diisi via ->for($post, 'likeable')
            'likeable_id'   => null,
        ];
    }
}
