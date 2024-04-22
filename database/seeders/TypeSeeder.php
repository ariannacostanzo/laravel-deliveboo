<?php

namespace Database\Seeders;


use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $types = [
            [
                'label' => 'Sushi',
                'icon' => 'https://static.vecteezy.com/system/resources/previews/024/399/413/original/sushi-japanese-food-clip-art-element-transparent-background-png.png',
            ],
            [
                'label' => 'Griglieria',
                'icon' => 'https://cdn-icons-png.freepik.com/256/12694/12694445.png',
            ],
            [
                'label' => 'Pizza',
                'icon' => 'https://images.freeimages.com/image/previews/78c/cheesy-slice-png-food-icon-5692718.png',
            ],
            [
                'label' => 'Cinese',
                'icon' => 'https://cdn.icon-icons.com/icons2/677/PNG/512/chinese-food_icon-icons.com_60866.png',
            ],
            [
                'label' => 'Italiano',
                'icon' => 'https://icons.iconarchive.com/icons/icons-land/3d-food/256/Dish-Pasta-Spaghetti-icon.png',
            ], 
            [
                'label' => 'Kebab',
                'icon' => 'https://cdn-icons-png.flaticon.com/512/7499/7499501.png',
            ],
            [
                'label' => 'Indiano',
                'icon' => 'https://cdn2.iconfinder.com/data/icons/food-items-4/131/73-512.png',
            ],
            [
                'label' => 'Fast Food',
                'icon' => 'https://cdn.icon-icons.com/icons2/1954/PNG/512/potatoes_122714.png',
            ],
            [
                'label' => 'Poké',
                'icon' => 'https://cdn-icons-png.flaticon.com/512/7688/7688721.png',
            ],
            [
                'label' => 'Hamburger',
                'icon' => 'https://cdn3.iconfinder.com/data/icons/food-flat-21/100/food-08-512.png',
            ],
           
        ];


        foreach($types as $type){
            $new_type = new Type();
            $new_type->fill($type);
            $new_type->save();
          
        }
    }
}
