<?php

namespace Database\Factories;

use App\Models\Dish;
use App\Models\Order;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_name' => fake()->firstName(),
            'customer_surname' => fake()->lastName(),
            'customer_address' => fake()->address(),
            'customer_email' => fake()->email(),
            'customer_phone_number' => fake()->e164PhoneNumber(),
            'total' => fake()->randomFloat(2, 1, 500),
        ];
    }

    public function configure(){

        $random_id = rand(1, Restaurant::count());
        return $this->afterCreating(function(Order $order) use($random_id) {
        $dish_ids = Dish::where('restaurant_id', $random_id)->pluck('id')->toArray();
        $order_dishes = array_filter($dish_ids, fn() => rand(0,1));

        $order->dishes()->attach($order_dishes);

        });
    }
}
