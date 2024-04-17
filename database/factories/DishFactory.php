<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dish>
 */
class DishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(2, true),
            'restaurant_id' => fake()->numberBetween(1, 6),
            'price' => fake()->randomFloat(2, 5, 30),
            'is_visible' => fake()->numberBetween(0, 1),
        ];
    }
}
