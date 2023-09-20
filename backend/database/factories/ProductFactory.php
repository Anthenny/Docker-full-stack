<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->firstName(),
            'slug' => 'test-slug',
            'color' => fake()->randomElement(['rood', 'blauw', 'oranje', 'geel', 'paars']),
            'thumbnail' => fake()->imageUrl,
            'category' => fake()->randomElement(['armbanden', 'oorbellen', 'tassen']),
            'price' => fake()->randomFloat(2, 100, 1000),
            'quantity' => fake()->numberBetween(1, 20),
            'reserved' => false,
            'weight' => fake()->randomNumber(),
            'description' => fake()->text
        ];
    }
}
