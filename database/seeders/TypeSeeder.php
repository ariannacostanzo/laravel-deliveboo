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
                'icon' => 'https://img.freepik.com/premium-vector/sushi-with-chopstick-cartoon-icon-illustration-japanese-food-icon-concept-isolated-flat-cartoon-style_138676-1723.jpg',
            ],
            [
                'label' => 'Griglieria',
                'icon' => 'https://macelleriabelli.it/wp-content/uploads/2020/07/Belli_shop1926.jpg',
            ],
            [
                'label' => 'Pizza',
                'icon' => 'https://static.vecteezy.com/ti/vettori-gratis/p3/26783111-carino-pizza-logo-portafortuna-vettore-icona-illustrazione-cibo-cartone-animato-piatto-stile-adatto-per-ristorante-vettoriale.jpg',
            ],
            [
                'label' => 'Cinese',
                'icon' => 'https://st3.depositphotos.com/8950810/31734/v/950/depositphotos_317342607-stock-illustration-cute-ramen-bowl-isolated-on.jpg',
            ],
            [
                'label' => 'Italiano',
                'icon' => 'https://img.freepik.com/premium-vector/italian-food-logo-name-icon-symbol-vector-italy_526280-402.jpg',
            ], 
            [
                'label' => 'Kebab',
                'icon' => 'https://static.vecteezy.com/ti/vettori-gratis/p3/21523821-illustrazione-vettore-grafico-di-kebab-duro-falafel-turco-cibo-cibo-avvolgere-icona-gratuito-vettoriale.jpg',
            ],
           
        ];


        foreach($types as $type){
            $new_type = new Type();
            $new_type->fill($type);
            $new_type->save();
          
        }
    }
}
