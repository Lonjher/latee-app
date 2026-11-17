<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    public function definition(): array
    {
        $name = fake()->unique()->words(3, true);

        return [
            'name'        => Str::title($name),
            'slug'        => Str::slug($name),
            'type'        => fake()->randomElement([
                Category::TYPE_NEWS,
                Category::TYPE_ARTICLE,
                Category::TYPE_OPINION,
                Category::TYPE_ANNOUNCEMENT,
            ]),
            'color'       => fake()->randomElement([
                'brand', 'emerald', 'amber', 'teal', 'rose', 'violet', 'sky',
            ]),
            'description' => fake()->sentence(),
            'order'       => fake()->numberBetween(0, 20),
        ];
    }

    public function ofType(string $type): static
    {
        return $this->state(fn () => ['type' => $type]);
    }
}
