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
                'icon' => 'https://cdn.icon-icons.com/icons2/549/PNG/512/1455739676_Kitchen_Bold_Line_Color_Mix-39_icon-icons.com_53414.png',
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
                'icon' => 'https://png.pngtree.com/png-clipart/20230106/original/pngtree-pasta-or-spaghetti-icon-png-image_8876666.png',
            ], 
            [
                'label' => 'Kebab',
                'icon' => 'https://cdn-icons-png.flaticon.com/512/7499/7499501.png',
            ],
           
        ];


        foreach($types as $type){
            $new_type = new Type();
            $new_type->fill($type);
            $new_type->save();
          
        }
    }
}
