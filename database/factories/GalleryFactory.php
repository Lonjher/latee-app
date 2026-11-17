<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GalleryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title'        => 'Galeri ' . Str::title(fake()->words(2, true)),
            'description'  => fake()->paragraph(),
            'cover_image'  => 'https://picsum.photos/seed/' . Str::random(10) . '/1600/900',
            'is_published' => true,
            'published_at' => now()->subDays(fake()->numberBetween(1, 60)),
        ];
    }

    public function draft(): static
    {
        return $this->state(fn () => [
            'is_published' => false,
            'published_at' => null,
        ]);
    }
}
