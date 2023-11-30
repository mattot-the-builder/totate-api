<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(5),
            'description' => fake()->sentence(10),
            'price' => fake()->randomFloat(2, 20000, 1000000),
            'location' => fake()->address(),
            'bedrooms' => fake()->numberBetween(1, 7),
            'bathrooms' => fake()->numberBetween(1, 4),
            'area_sqft' => fake()->numberBetween(100, 10000),
        ];
    }
}
