<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use App\Models\Type;
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
            [
                'name' => 'Indian Curry Restaurant',
                'address' => 'via del Toscano 5, Lamezia Terme, CZ 88046',
                'vat_number' => 'IT07643520515',
                'image' => 'https://www.archetravel.com/wp-content/uploads/2023/08/00.india-cosa-mangiare_fb.jpg',
                'user_id' => 7
            ],
            [
                'name' => 'McDonald\'s',
                'address' => 'Piazza Stesicoro 57, Lamezia Terme, CZ 88046',
                'vat_number' => 'IT07643520510',
                'image' => 'https://img.grouponcdn.com/deal/22sh6xDHFowtfZ3XwHPu4YK3NBx1/22-1500x900/v1/t600x362.jpg',
                'user_id' => 8
            ],
            [
                'name' => 'Honolulu Poke',
                'address' => 'viale dei Martiri 86, Lamezia Terme, CZ 88046',
                'vat_number' => 'IT07643520525',
                'image' => 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,f_auto,q_auto,w_1200,h_630,d_it:cuisines:poke-7.jpg/v1/it/restaurants/249337.jpg',
                'user_id' => 9
            ],
            [
                'name' => 'Burger King',
                'address' => 'piazza Cronato 5, Lamezia Terme, CZ 88046',
                'vat_number' => 'IT07643520536',
                'image' => 'https://static.alfonsino.cloud/uploads/products/298/PveF3OKOJi1pLVRMRk0pybgOkw8fupSlDtzXVARX.jpeg',
                'user_id' => 10
            ],
            
        ];

        $types = Type::all();
        $index = 0;
        foreach($restaurants as $res)
        {
            $new_res = new Restaurant();
            $new_res->fill($res);
            $new_res->save();

            $type = $types[$index];
            // echo 'Index: ' . $index . ', Type ID: ' . $types[$index]->id . '<br>';
            $new_res->types()->attach($type);
            $index++;
        } 

        

        
    }
};
