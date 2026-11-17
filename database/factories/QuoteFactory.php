<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class QuoteFactory extends Factory
{
    public function definition(): array
    {
        $authors = [
            'Imam Syafi\'i', 'Imam Al-Ghazali', 'KH. Hasyim Asy\'ari',
            'KH. Ahmad Dahlan', 'Sayyidina Ali bin Abi Thalib',
            'Imam Bukhari', 'Imam Muslim', 'Ibnu Athaillah',
        ];

        $sources = [
            'Kitab Al-Hikam', 'Ihya Ulumuddin', 'Ta\'lim Muta\'allim',
            'Ceramah 2024', 'Kajian Rutin Ahad', null,
        ];

        return [
            'content'        => fake()->paragraph(2),
            'author'         => fake()->randomElement($authors),
            'source'         => fake()->randomElement($sources),
            'featured_image' => null,
            'is_published'   => true,
            'published_at'   => now()->subDays(fake()->numberBetween(1, 120)),
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
