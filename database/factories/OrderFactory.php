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
            'created_at' => fake()->dateTimeBetween('-2year', 'now'),
            //'total' => 0,
            'total' => fake()->randomFloat(3, 0, 999),
        ];
    }

    public function configure(){

        return $this->afterCreating(function (Order $order) {
            $restaurant = Restaurant::inRandomOrder()->first();
            $dish_ids = Dish::where('restaurant_id', $restaurant->id)->pluck('id')->toArray();

            //setto il 30% di possibilità che un piatto vada nell'ordine
            $probabilityThreshold = 0.1;
            $order_dishes = array_filter($dish_ids, function () use ($probabilityThreshold) {
                return mt_rand() / mt_getrandmax() < $probabilityThreshold;
            });

            // $order_dishes = array_filter($dish_ids, fn () => rand(0, 1));

            $total = 0;

            foreach ($order_dishes as $dish_id) {
                //creo una quantità a caso
                $quantity = rand(1, 5);

                //fetch del piatto
                $dish = Dish::findOrFail($dish_id);

                //ottengo il prezzo e lo moltiplico per la quantità
                $price = $dish->price;
                $subtotal = $price * $quantity;
                $total += $subtotal;
                $order->dishes()->attach([$dish_id => ['quantity' => $quantity]]);
            }

            //faccio un update del totale
            $order->update(['total' => $total]);
        });
    }
}
