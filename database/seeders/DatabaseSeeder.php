<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(14)->create();
        

        \App\Models\User::factory()->create([
            'name' => 'Test',
            'surname' => 'User',
            'email' => 'test@example.com',
        ]);

        $this->call(TypeSeeder::class);
        $this->call(RestaurantSeeder::class);
        $this->call(DishSeeder::class);
        // $this->call(OrderSeeder::class);
        \App\Models\Order::factory(100)->create();
        // \App\Models\Dish::factory(30)->create();
    }
}
