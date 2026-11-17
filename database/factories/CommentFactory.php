<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id'          => User::factory(),
            'parent_id'        => null,
            'commentable_type' => Post::class,
            // commentable_id harus diisi via ->for($post, 'commentable')
            'commentable_id'   => null,
            'name'             => null,
            'email'            => null,
            'ip_address'       => fake()->ipv4(),
            'user_agent'       => fake()->userAgent(),
            'body'             => fake()->paragraph(2),
            'is_approved'      => true,
            'is_pinned'        => false,
        ];
    }

    public function guest(): static
    {
        return $this->state(fn () => [
            'user_id' => null,
            'name'    => fake()->name(),
            'email'   => fake()->safeEmail(),
        ]);
    }

    public function replyTo(int $parentId): static
    {
        return $this->state(fn () => ['parent_id' => $parentId]);
    }

    public function pending(): static
    {
        return $this->state(fn () => ['is_approved' => false]);
    }
}
