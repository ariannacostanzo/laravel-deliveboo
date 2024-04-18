<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = [
            [
                'name' => 'Ristorante Sushi Shibuya',
                'address' => 'via Roma 15, Lamezia Terme, CZ 88046',
                'vat_number' => 'IT07643520565',
                'image' => 'https://media.istockphoto.com/id/1320922361/it/foto/donna-che-prende-gustoso-rotolo-di-sushi-con-salmone-da-set-a-tavola-primo-piano.jpg?s=612x612&w=0&k=20&c=2NnTwv9m4492eo_ZkNo97xmK0DsXL5-gvzHDui6k1EM=',
                'user_id' => 1
            ],
            [
                'name' => 'Ristorante da Pippo',
                'address' => 'via Gobbi 116, Lamezia Terme, CZ 88046',
                'vat_number' => 'IT07643520855',
                'image' => 'https://www.greenparkristorante.com/wp-content/uploads/2017/04/Grigliata-600x478.jpg',
                'user_id' => 2
            ],
            [
                'name' => 'Pizzeria Albachiara',
                'address' => 'viale Africa 40, Lamezia Terme, CZ 88046',
                'vat_number' => 'IT07643520544',
                'image' => 'https://www.centrocormano.it/wp-content/uploads/2021/08/tipi-di-pizze-2.jpg',
                'user_id' => 3
            ],
            [
                'name' => 'La grande Muraglia',
                'address' => 'via Bobbio 3, Lamezia Terme, CZ 88046',
                'vat_number' => 'IT07643520533',
                'image' => 'https://cinaintavola.com/wp-content/uploads/2020/11/dscf4308-800x530.jpg',
                'user_id' => 4
            ],
            [
                'name' => 'Gigi Bistrot',
                'address' => 'via Tommaso Grossi 47, Lamezia Terme, CZ 88046',
                'vat_number' => 'IT07643520511',
                'image' => 'https://www.informacibo.it/wp-content/uploads/2018/04/carbonara.jpg',
                'user_id' => 5
            ],
            [
                'name' => 'Ali babà',
                'address' => 'viale Veneto 33, Lamezia Terme, CZ 88046',
                'vat_number' => 'IT07643520588',
                'image' => 'https://www.bellacarne.it/wp-content/uploads/2021/03/kebab-ricetta-originale.jpg',
                'user_id' => 6
            ],
            
        ];

        foreach($restaurants as $res)
        {
            $new_res = new Restaurant();
            $new_res->fill($res);
            $new_res->save();

        }


        
    }
}
