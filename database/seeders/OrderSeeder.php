<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            [
                'customer_name' => 'John',
                'customer_surname' => 'Doe',
                'customer_address' => '123 Main St',
                'customer_email' => 'john@gmail.com',
                'customer_phone_number' => '+39 1234567890',
                'total' => 25.99,
            ],
            [
                'customer_name' => 'Jane',
                'customer_surname' => 'Smith',
                'customer_address' => '456 Elm St',
                'customer_email' => 'jane@gmail.com',
                'customer_phone_number' => '+39 9876543210',
                'total' => 19.99,
            ],
            [
                'customer_name' => 'Alice',
                'customer_surname' => 'Johnson',
                'customer_address' => '789 Oak St',
                'customer_email' => 'alice@gmail.com',
                'customer_phone_number' => '+39 5551234567',
                'total' => 30.50,
            ],
            [
                'customer_name' => 'Bob',
                'customer_surname' => 'Williams',
                'customer_address' => '321 Pine St',
                'customer_email' => 'bob@gmail.com',
                'customer_phone_number' => '+39 2223334444',
                'total' => 15.75,
            ],
            [
                'customer_name' => 'Maria',
                'customer_surname' => 'Rossi',
                'customer_address' => 'Via Roma, 10',
                'customer_email' => 'maria@libero.com',
                'customer_phone_number' => '+39 3339876543',
                'total' => 42.99,
            ],
            [
                'customer_name' => 'Luca',
                'customer_surname' => 'Bianchi',
                'customer_address' => 'Viale dei Fiori, 5',
                'customer_email' => 'luca@libero.com',
                'customer_phone_number' => '+39 3476543210',
                'total' => 38.75,
            ],
            [
                'customer_name' => 'Giulia',
                'customer_surname' => 'Ferrari',
                'customer_address' => 'Corso Italia, 20',
                'customer_email' => 'giulia@libero.com',
                'customer_phone_number' => '+39 3661234567',
                'total' => 22.50,
            ],
            [
                'customer_name' => 'Marco',
                'customer_surname' => 'Ricci',
                'customer_address' => 'Piazza Dante, 3',
                'customer_email' => 'marco@yahoo.com',
                'customer_phone_number' => '+39 3888888888',
                'total' => 55.00,
            ],
            [
                'customer_name' => 'Alessia',
                'customer_surname' => 'Conti',
                'customer_address' => 'Largo Garibaldi, 15',
                'customer_email' => 'alessia@yahoo.com',
                'customer_phone_number' => '+39 3294445556',
                'total' => 16.25,
            ],
            [
                'customer_name' => 'Paolo',
                'customer_surname' => 'Martini',
                'customer_address' => 'Via Garibaldi, 30',
                'customer_email' => 'paolo@tiscali.com',
                'customer_phone_number' => '+39 3801234567',
                'total' => 29.99,
            ],
            [
                'customer_name' => 'Chiara',
                'customer_surname' => 'Gallo',
                'customer_address' => 'Via Roma, 5',
                'customer_email' => 'chiara@tiscali.com',
                'customer_phone_number' => '+39 3887654321',
                'total' => 18.50,
            ],
            [
                'customer_name' => 'Giovanni',
                'customer_surname' => 'De Luca',
                'customer_address' => 'Via Milano, 12',
                'customer_email' => 'giovanni@aruba.com',
                'customer_phone_number' => '+39 3669876543',
                'total' => 33.75,
            ],
            [
                'customer_name' => 'Francesca',
                'customer_surname' => 'Marchetti',
                'customer_address' => 'Via Veneto, 7',
                'customer_email' => 'francesca@gmail.com',
                'customer_phone_number' => '+39 3456789012',
                'total' => 24.00,
            ],
            [
                'customer_name' => 'Simone',
                'customer_surname' => 'Barbieri',
                'customer_address' => 'Via Garibaldi, 25',
                'customer_email' => 'simone@gmail.com',
                'customer_phone_number' => '+39 3665554443',
                'total' => 19.50,
            ],
        ];

        foreach ($orders as $order) {
            $new_order = new Order();
            $new_order->fill($order);
            $new_order->save();
            
        } 
    }
}
