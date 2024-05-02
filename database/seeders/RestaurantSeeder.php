<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Ramsey\Uuid\v1;

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
                'address' => 'Via Roma 15, Lamezia Terme, CZ 88046',
                'vat_number' => 'IT07643520565',
                'image' => 'https://media.istockphoto.com/id/1320922361/it/foto/donna-che-prende-gustoso-rotolo-di-sushi-con-salmone-da-set-a-tavola-primo-piano.jpg?s=612x612&w=0&k=20&c=2NnTwv9m4492eo_ZkNo97xmK0DsXL5-gvzHDui6k1EM=',
                'user_id' => 1
            ],
            [
                'name' => 'Ristorante da Pippo',
                'address' => 'Via Gobbi 116, Lamezia Terme, CZ 88046',
                'vat_number' => 'IT07643520855',
                'image' => 'https://www.greenparkristorante.com/wp-content/uploads/2017/04/Grigliata-600x478.jpg',
                'user_id' => 2
            ],
            [
                'name' => 'Pizzeria Albachiara',
                'address' => 'Viale Africa 40, Lamezia Terme, CZ 88046',
                'vat_number' => 'IT07643520544',
                'image' => 'https://www.centrocormano.it/wp-content/uploads/2021/08/tipi-di-pizze-2.jpg',
                'user_id' => 3
            ],
            [
                'name' => 'La grande Muraglia',
                'address' => 'Via Bobbio 3, Lamezia Terme, CZ 88046',
                'vat_number' => 'IT07643520533',
                'image' => 'https://cinaintavola.com/wp-content/uploads/2020/11/dscf4308-800x530.jpg',
                'user_id' => 4
            ],
            [
                'name' => 'Gigi Bistrot',
                'address' => 'Via Tommaso Grossi 47, Lamezia Terme, CZ 88046',
                'vat_number' => 'IT07643520511',
                'image' => 'https://www.informacibo.it/wp-content/uploads/2018/04/carbonara.jpg',
                'user_id' => 5
            ],
            [
                'name' => 'Ali babà',
                'address' => 'Viale Veneto 33, Lamezia Terme, CZ 88046',
                'vat_number' => 'IT07643520588',
                'image' => 'https://www.bellacarne.it/wp-content/uploads/2021/03/kebab-ricetta-originale.jpg',
                'user_id' => 6
            ],
            [
                'name' => 'Indian Curry Restaurant',
                'address' => 'Via del Toscano 5, Lamezia Terme, CZ 88046',
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
                'address' => 'Viale dei Martiri 86, Lamezia Terme, CZ 88046',
                'vat_number' => 'IT07643520525',
                'image' => 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,f_auto,q_auto,w_1200,h_630,d_it:cuisines:poke-7.jpg/v1/it/restaurants/249337.jpg',
                'user_id' => 9
            ],
            [
                'name' => 'Burger King',
                'address' => 'Piazza Cronato 5, Lamezia Terme, CZ 88046',
                'vat_number' => 'IT07643520536',
                'image' => 'https://static.alfonsino.cloud/uploads/products/298/PveF3OKOJi1pLVRMRk0pybgOkw8fupSlDtzXVARX.jpeg',
                'user_id' => 10
            ],
            [
                'name' => 'Al Terzo',
                'address' => 'Riviera Mallozzi 36, Lamezia Terme, CZ 88046',
                'vat_number' => 'IT07643520599',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWjbt5Ia_AePRjxGaJK0bs29sX1id1txgOTMP0gPhWew&s',
                'user_id' => 11
            ],
            [
                'name' => 'Antiche Ricette Napoletane',
                'address' => 'Via Teseo 15, Lamezia Terme, CZ 88046',
                'vat_number' => 'IT07643520514',
                'image' => 'https://pizzeriamagnifica.com/wp-content/uploads/2020/03/header.png',
                'user_id' => 12
            ],
            [
                'name' => 'Poketto',
                'address' => 'Viale Manzoni 59, Lamezia Terme, CZ 88046',
                'vat_number' => 'IT07643520523',
                'image' => 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,f_auto,q_auto,w_1600,h_500,d_it:cuisines:poke-7.jpg/v1/it/restaurants/272077.jpg',
                'user_id' => 13
            ],
            [
                'name' => 'Royal Burger',
                'address' => 'Via Marco Decumio 14, Lamezia Terme, CZ 88046',
                'vat_number' => 'IT07643520588',
                'image' => 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,f_auto,q_auto,w_1600,h_500,d_it:cuisines:hamburger-4.jpg/v1/it/restaurants/233954.jpg',
                'user_id' => 14
            ],
            [
                'name' => 'Il Molisano Ristopizza',
                'address' => 'Via Col di Lana 144, Lamezia Terme, CZ 88046',
                'vat_number' => 'IT07643520577',
                'image' => 'https://c.ndtvimg.com/2021-04/umk8i7ko_pasta_625x300_01_April_21.jpg?im=FaceCrop,algorithm=dnn,width=1200,height=886',
                'user_id' => 15
            ],
            
        ];

        $types = Type::all();
        foreach($restaurants as $res)
        {
            $new_res = new Restaurant();
            $new_res->fill($res);
            $new_res->save();

            // $type = $types[rand(1, 9)];
            // // echo 'Index: ' . $index . ', Type ID: ' . $types[$index]->id . '<br>';
            // $new_res->types()->attach($type);
        } 

        $all_restaurants = Restaurant::all();
        //Sushi Shibuya
        $all_restaurants->get(0)->types()->attach($types[0]);
        // da Pippo
        $all_restaurants->get(1)->types()->attach($types[1]);
        $all_restaurants->get(1)->types()->attach($types[4]);
        //pizzeria Albachiara
        $all_restaurants->get(2)->types()->attach($types[2]);
        // La grande Muraglia
        $all_restaurants->get(3)->types()->attach($types[3]);
        // Gigi Bistrot
        $all_restaurants->get(4)->types()->attach($types[4]);
        // Ali babà
        $all_restaurants->get(5)->types()->attach($types[5]);
        // Indian Curry Restaurant
        $all_restaurants->get(6)->types()->attach($types[6]);
        // McDonald\'s
        $all_restaurants->get(7)->types()->attach($types[7]);
        $all_restaurants->get(7)->types()->attach($types[9]);
        // Honolulu Poke
        $all_restaurants->get(8)->types()->attach($types[8]);
        // Burger King
        $all_restaurants->get(9)->types()->attach($types[7]);
        $all_restaurants->get(9)->types()->attach($types[9]);
        // Al Terzo
        $all_restaurants->get(10)->types()->attach($types[1]);
        $all_restaurants->get(10)->types()->attach($types[4]);
        // Antiche Ricette Napoletane
        $all_restaurants->get(11)->types()->attach($types[2]);
        // Poketto
        $all_restaurants->get(12)->types()->attach($types[8]);
        // Royal Burger
        $all_restaurants->get(13)->types()->attach($types[9]);
        $all_restaurants->get(13)->types()->attach($types[7]);
        // Il Molisano Ristopizza
        $all_restaurants->get(14)->types()->attach($types[2]);
        $all_restaurants->get(14)->types()->attach($types[4]);
    }
};
