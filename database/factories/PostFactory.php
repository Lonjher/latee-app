<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    public function definition(): array
    {
        $title   = fake()->sentence(6);
        $content = '<p>' . implode('</p><p>', fake()->paragraphs(8)) . '</p>';

        return [
            'user_id'        => User::factory(),
            'category_id'    => Category::factory(),
            'type'           => fake()->randomElement(['news', 'article']),
            'title'          => rtrim($title, '.'),
            'excerpt'        => Str::limit(strip_tags($content), 150),
            'content'        => $content,
            'featured_image' => null,
            'is_published'   => true,
            'is_featured'    => false,
            'published_at'   => now()->subDays(fake()->numberBetween(1, 90)),
            'views_count'    => fake()->numberBetween(10, 1500),
            'likes_count'    => 0,
            'comments_count' => 0,
        ];
    }

    public function draft(): static
    {
        return $this->state(fn () => [
            'is_published' => false,
            'published_at' => null,
        ]);
    }

    public function featured(): static
    {
        return $this->state(fn () => ['is_featured' => true]);
    }

    public function news(): static
    {
        return $this->state(fn () => [
            'type' => 'news',
            'category_id' => Category::factory()->ofType('news'),
        ]);
    }

    public function article(): static
    {
        return $this->state(fn () => [
            'type' => 'article',
            'category_id' => Category::factory()->ofType('article'),
        ]);
    }
}
