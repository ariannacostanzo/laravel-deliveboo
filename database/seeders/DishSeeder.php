<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dishes = [
            [
                'name' => 'Nigiri Salmone',
                'ingredients' => 'Riso, Salmone',
                'price' => 4.00,
                'restaurant_id' => 1,
                'image' => 'https://matsu-sushi.it/wp-content/uploads/2020/05/nigiri-salmone-1.jpg'
            ],
            [
                'name' => 'Nigiri Tonno',
                'ingredients' => 'Riso, Tonno',
                'price' => 4.50,
                'restaurant_id' => 1,
                'image' => 'https://www.sosushiandsound.it/wp-content/uploads/2023/04/nigiri-tonno-maguro-2.jpg'
            ],
            [
                'name' => 'Maki Avocado',
                'ingredients' => 'Riso, Avocado',
                'price' => 5.00,
                'restaurant_id' => 1,
                'image' => 'https://www.magokoro.fi/wp-content/uploads/2019/03/IMG_6374.jpg'
            ],
            [
                'name' => 'Sashimi Misti',
                'ingredients' => 'Salmone, Tonno, Branzino',
                'price' => 8.00,
                'restaurant_id' => 1,
                'image' => 'https://i0.wp.com/www.fujiyamahot.it/wp-content/uploads/2021/10/SashimiMisto_17pz_Dettaglio.jpeg?fit=2048%2C2048&ssl=1'
            ],
            [
                'name' => 'Uramaki Philadelphia',
                'ingredients' => 'Riso, Salmone, Philadelphia',
                'price' => 7.00,
                'restaurant_id' => 1,
                'image' => 'https://www.deabyday.tv/.imaging/default/article/guides/cucina-e-ricette/primi/Uramaki-philadelphia-e-tonno--senza-pesce-crudo-/imageOriginal.jpg'
            ],
            [
                'name' => 'Tempura Gamberi',
                'ingredients' => 'Gamberi, Farina, Uova',
                'price' => 6.50,
                'restaurant_id' => 1,
                'image' => 'https://www.fattoincasadabenedetta.it/wp-content/uploads/2022/08/AdobeStock_323244964-1200x900.jpg'
            ],
            [
                'name' => 'Sushi California',
                'ingredients' => 'Riso, Avocado, Surimi',
                'price' => 6.00,
                'restaurant_id' => 1,
                'image' => 'https://www.sushiaroma.it/wp-content/uploads/2015/01/630x420-california-rolls.jpg'
            ],
            [
                'name' => 'Tartare Salmone',
                'ingredients' => 'Salmone, Avocado, Cipolla Rossa',
                'price' => 9.00,
                'restaurant_id' => 1,
                'image' => 'https://primochef.it/wp-content/uploads/2018/05/SH_tartare_salmone-1-1200x800.jpg.webp'
            ],
            [
                'name' => 'Gyoza',
                'ingredients' => 'Carne di maiale, Verza',
                'price' => 5.50,
                'restaurant_id' => 1,
                'image' => 'https://www.orientalitalia.com/wp-content/uploads/2022/06/yamachan-tebasaki-sq-2.jpg'
                
            ],
            [
                'name' => 'Yakitori Pollo',
                'ingredients' => 'Pollo, Salsa Teriyaki',
                'price' => 5.00,
                'restaurant_id' => 1,
                'image' => 'https://www.ohayo.it/wp-content/uploads/2018/12/yakitori-spiedini-pollo-giapponesi-ricetta.jpg'
            ],
            [
                'name' => 'Sashimi Salmone',
                'ingredients' => 'Salmone',
                'price' => 3.50,
                'restaurant_id' => 1,
                'image' => 'https://d2j6dbq0eux0bg.cloudfront.net/images/28198052/1497211561.jpg'
            ],
            [
                'name' => 'Sashimi Tonno',
                'ingredients' => 'Tonno',
                'price' => 4.50,
                'restaurant_id' => 1,
                'image' => 'https://matsu-sushi.it/wp-content/uploads/2020/04/720x720_sashimiTonnoRosso.png'
            ],
            [
                'name' => 'Tempura Verdure',
                'ingredients' => 'Verdure Miste, Farina, Uova',
                'price' => 5.00,
                'restaurant_id' => 1,
                'image' => 'https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2022/04/11-tempura-di-verdure-servi__MG_6906.jpg'
            ],
            [
                'name' => 'Uramaki California',
                'ingredients' => 'Riso, Avocado, Surimi, Maionese',
                'price' => 6.50,
                'restaurant_id' => 1,
                'image' => 'https://club.tescomaonline.com/wp-content/uploads/2015/10/TEMPURAVEGETALE.jpg'
            ],
            [
                'name' => 'Tartare Tonno',
                'ingredients' => 'Tonno, Avocado, Cetriolo',
                'price' => 8.00,
                'restaurant_id' => 1,
                'image' => 'https://www.cucchiaio.it/content/dam/cucchiaio/it/ricette/2022/09/tartare-tonno/tartare-tonno-finale.jpg'
            ],
            [
                'name' => 'Nigiri Gamberetti',
                'ingredients' => 'Riso, Gamberetti',
                'price' => 4.00,
                'restaurant_id' => 1,
                'image' => 'https://kingu.it/wp-content/uploads/2022/09/nigiri-di-ebi-gamberi.jpeg'
            ],
            [
                'name' => 'Sashimi Branzino',
                'ingredients' => 'Branzino',
                'price' => 5.00,
                'restaurant_id' => 1,
                'image' => 'https://sushidonggenova.it/wp-content/uploads/2021/09/G86.jpg'
            ],
            [
                'name' => 'Gunkan Ikura',
                'ingredients' => 'Riso, Uova di Salmone',
                'price' => 7.50,
                'restaurant_id' => 1,
                'image' => 'https://catania.gohan-sushi.it/upload/cache/immagini/prodotti/gunkan/136_gunkan_ikura-1920x1280.jpg'
            ],
            [
                'name' => 'Yakitori Manzo',
                'ingredients' => 'Manzo, Salsa Teriyaki',
                'price' => 6.00,
                'restaurant_id' => 1,
                'image' => 'https://www.petitchef.it/imgupl/recipe/yakitori-manzo-e-formaggio--461332p726507.jpg'
            ],
            [
                'name' => 'Acqua Naturale 1 l',
                'ingredients' => null,
                'price' => 1.50,
                'restaurant_id' => 1,
                'image' => 'https://www.acquaacasatua.it/173193-large_default/acqua-sant-anna-naturale-da-1-litri-in-plasticapet-scegli-il-numero-di-casse.jpg'
            ],
            [
                'name' => 'Acqua Lete 1 l',
                'ingredients' => null,
                'price' => 1.50,
                'restaurant_id' => 1,
                'image' => 'https://www.montebellobevande.it/191-large_default/acqua-lete-effervescente-naturale-da-1-l-12-bottiglie-in-vetro-a-rendere.jpg'
            ],
            [
                'name' => 'Saké',
                'ingredients' => null,
                'price' => 8.00,
                'restaurant_id' => 1,
                'image' => 'https://www.ilsake.it/wp-content/uploads/2018/02/benefici-del-sake.jpg'
            ],
            [
                'name' => 'Gelato al Tè Verde',
                'ingredients' => null,
                'price' => 3.50,
                'restaurant_id' => 1,
                'image' => 'https://www.antica-drogheria.it/wp-content/uploads/2020/12/Antica-Drogheria-preparare-in-casa-gelato-al-te-verde-03.jpg'
            ],
            [
                'name' => 'Mochi al Sesamo',
                'ingredients' => null,
                'price' => 3.00,
                'restaurant_id' => 1,
                'image' => 'https://cookingwithdog.com/wp-content/uploads/2017/03/sesame-balls-00.jpg'
            ],
            [
                'name' => 'Torta Giapponese al Tè Verde',
                'ingredients' => null,
                'price' => 4.50,
                'restaurant_id' => 1,
                'image' => 'https://static.vecteezy.com/ti/foto-gratuito/p2/10388123-cheesecake-giapponese-al-te-verde-matcha-gratuito-foto.jpg'
            ],
            [
                'name' => 'Bistecca Fiorentina',
                'ingredients' => 'Carne di Manzo',
                'price' => 20.00,
                'restaurant_id' => 2,
                'image' => 'https://www.my-personaltrainer.it/2022/09/26/fiorentina_900x760.jpeg'
            ],
            [
                'name' => 'Costolette di Agnello alla Griglia',
                'ingredients' => 'Agnello',
                'price' => 18.00,
                'restaurant_id' => 2,
                'image' => 'https://www.alimentaitaly.com/img/cms/costolette%20agnello%20L.jpg'
            ],
            [
                'name' => 'Filetto di Maiale Marinato',
                'ingredients' => 'Maiale, Marinatura',
                'price' => 15.00,
                'restaurant_id' => 2,
                'image' => 'https://www.ricettasprint.it/wp-content/uploads/2021/11/a.jpg'
            ],
            [
                'name' => 'Salsiccia alla Griglia',
                'ingredients' => 'Carne di Maiale, Spezie',
                'price' => 12.00,
                'restaurant_id' => 2,
                'image' => 'https://media.grandchef.net/ricette/salsicce-alla-griglia/galleria/salsiccia-alla-griglia.jpg'
            ],
            [
                'name' => 'Pollo Arrosto',
                'ingredients' => 'Pollo, Erbe Aromatiche',
                'price' => 14.00,
                'restaurant_id' => 2,
                'image' => 'https://eu.tastescdns.net/thumbor/wi7N9WJY2HQhzqkBsoQr3KVNHqQ=/1050x1050/filters:quality(65):brightness(2):contrast(2):rgb(2,-2,0):sharpen(0.2,0.2,true)/it/recipe/B0e39vtERoxFEhBIgFgc/3908b526d74254fc5be0f6cceff2e5.jpeg'
            ],
            [
                'name' => 'Costine di Maiale Affumicate',
                'ingredients' => 'Costine di Maiale, Salsa Barbecue',
                'price' => 16.00,
                'restaurant_id' => 2,
                'image' => 'https://www.giallozafferano.it/images/8-895/Costine-di-maiale-affumicate-di-Kansas-City_780x520_wm.jpg'
            ],
            [
                'name' => 'Braciola di Manzo',
                'ingredients' => 'Carne di Manzo, Formaggio, Prosciutto Cotto',
                'price' => 17.00,
                'restaurant_id' => 2,
                'image' => 'https://www.cibovagare.it/uploads/editor/images/Braciole_520.jpg'
            ],
            [
                'name' => 'Anatra all\'Arancia',
                'ingredients' => 'Anatra, Salsa all\'Arancia',
                'price' => 19.00,
                'restaurant_id' => 2,
                'image' => 'https://www.salineculcasi.it/backend/sw_images//ricette/anatraarancia43.jpg'
            ],
            [
                'name' => 'Filetto di Pesce Spada alla Griglia',
                'ingredients' => 'Pesce Spada, Limone, Olio',
                'price' => 22.00,
                'restaurant_id' => 2,
                'image' => 'https://blog.giallozafferano.it/azuccherozero/wp-content/uploads/2018/04/Pesce-spada-alla-griglia-o02.jpeg'
            ],
            [
                'name' => 'Verdure Grigliate',
                'ingredients' => 'Verdure Miste, Olio, Sale',
                'price' => 10.00,
                'restaurant_id' => 2,
                'image' => 'https://blog.giallozafferano.it/tentazioniincucina/wp-content/uploads/2022/06/IMG_20220615_173504251-960x1280.jpg'
            ],
            [
                'name' => 'Tagliata di Manzo',
                'ingredients' => 'Carne di Manzo, Rucola, Grana',
                'price' => 18.00,
                'restaurant_id' => 2,
                'image' => 'https://www.tavolartegusto.it/wp/wp-content/uploads/2023/07/tagliata-di-manzo.jpg'
            ],
            [
                'name' => 'Costine di Agnello al Forno',
                'ingredients' => 'Agnello, Rosmarino, Aglio',
                'price' => 16.00,
                'restaurant_id' => 2,
                'image' => 'https://www.cuocicuoci.com/wp-content/uploads/2022/03/carre-di-agnello.jpg'
            ],
            [
                'name' => 'Cotoletta alla Milanese',
                'ingredients' => 'Carne di Vitello, Panatura',
                'price' => 15.00,
                'restaurant_id' => 2,
                'image' => 'https://media-assets.lacucinaitaliana.it/photos/620fc010248062ed83323fcc/1:1/w_2560%2Cc_limit/04201408901-Cropped.jpg'
            ],
            [
                'name' => 'Salmone alla Griglia',
                'ingredients' => 'Filetto di Salmone, Limone, Erbe',
                'price' => 20.00,
                'restaurant_id' => 2,
                'image' => 'https://wips.plug.it/cips/buonissimo.org/cms/2020/07/salmone-griglia.jpg'
            ],
            [
                'name' => 'Spiedini di Gamberi e Calamari',
                'ingredients' => 'Gamberi, Calamari, Limone',
                'price' => 22.00,
                'restaurant_id' => 2,
                'image' => 'https://blog.giallozafferano.it/ricettedelcuoreblog/wp-content/uploads/2018/07/IMG_0309logo.jpg'
            ],
            [
                'name' => 'Fiorentina di Maiale',
                'ingredients' => 'Costolette di Maiale, Salsa Barbecue',
                'price' => 14.00,
                'restaurant_id' => 2,
                'image' => 'https://foodandchips.com/wp-content/uploads/2019/02/Fiorentina2.jpg'
            ],
            [
                'name' => 'Petto di Pollo alla Griglia',
                'ingredients' => 'Petto di Pollo, Olio d\'Oliva, Sale',
                'price' => 12.00,
                'restaurant_id' => 2,
                'image' => 'https://www.filippoberio.it/wp-content/uploads/2024/02/pollo-marinato-alla-griglia.jpg'
            ],
            [
                'name' => 'Bruschette Miste',
                'ingredients' => 'Pane, Pomodori, Basilico, Olio',
                'price' => 8.00,
                'restaurant_id' => 2,
                'image' => 'https://www.donnamoderna.com/content/uploads/pianetadonna_www/gallery/foto_gallery/cucina/foto-bruschette-miste/bruschetta-pomodori-secchi.jpeg'
            ],
            [
                'name' => 'Insalata di Mare',
                'ingredients' => 'Frutti di Mare, Pomodori, Olive',
                'price' => 16.00,
                'restaurant_id' => 2,
                'image' => 'https://www.tavolartegusto.it/wp/wp-content/uploads/2022/07/Insalata-di-mare-.jpg'
            ],
            [
                'name' => 'Patate Arrosto',
                'ingredients' => 'Patate, Rosmarino, Aglio',
                'price' => 6.00,
                'restaurant_id' => 2,
                'image' => 'https://cdn.cook.stbm.it/thumbnails/ricette/9/9288/hd750x421.jpg'
            ],
            [
                'name' => 'Acqua Naturale 1 l',
                'ingredients' => null,
                'price' => 1.50,
                'restaurant_id' => 2,
                'image' => 'https://iperdrive.iper.it/wcsstore/FiniperCatalogAssetStore/asset/images/3074457345616683350/3074457345616683350_FULL_main.jpg'
            ],
            [
                'name' => 'Acqua Lete 1 l',
                'ingredients' => null,
                'price' => 1.50,
                'restaurant_id' => 2,
                'image' => 'https://www.drinkupservice.it/content/images/thumbs/0002168_lete-lt-1-pet.png'
            ],
            [
                'name' => 'Caffè',
                'ingredients' => null,
                'price' => 1.50,
                'restaurant_id' => 2,
                'image' => 'https://static.gamberorosso.it/2024/01/inchiesta-bar-caffe.jpg'
            ],
            [
                'name' => 'Tiramisù',
                'ingredients' => null,
                'price' => 4.00,
                'restaurant_id' => 2,
                'image' => 'https://cdn.cook.stbm.it/thumbnails/ricette/9/9648/hd750x421.jpg'
            ],
            [
                'name' => 'Panna Cotta',
                'ingredients' => null,
                'price' => 3.50,
                'restaurant_id' => 2,
                'image' => 'https://www.cucchiaio.it/content/dam/cucchiaio/it/ricette/2009/11/ricetta-panna-cotta/panna%20cotta-1.jpg'
            ],
            [
                'name' => 'Birra Artigianale',
                'ingredients' => null,
                'price' => 5.00,
                'restaurant_id' => 2,
                'image' => 'https://www.iltomolo.it/2558-large_default/birra-artigianale-rumbling-goat-stile-bock.jpg'
            ],
            [
                'name' => 'Coca-Cola lattina',
                'ingredients' => null,
                'price' => 2.00,
                'restaurant_id' => 2,
                'image' => 'https://www.topbevande.it/images/thumbs/0085545_coca-cola-original-33cl-confezione-da-24-barattoli-lattina_780.jpeg'
            ],
            [
                'name' => 'Coca-Cola Zero lattina ',
                'ingredients' => null,
                'price' => 2.00,
                'restaurant_id' => 2,
                'image' => 'https://cdn1.marcocusano.cloud/D936542D/products/58-c4ca4238a0b923820dcc509a6f75849b'
            ],
            [
                'name' => 'Margherita',
                'ingredients' => 'Pomodoro, Mozzarella, Basilico',
                'price' => 8.00,
                'restaurant_id' => 3,
                'image' => 'https://www.finedininglovers.it/sites/g/files/xknfdk1106/files/fdl_content_import_it/margherita-50kalo.jpg'
            ],
            [
                'name' => 'Quattro Stagioni',
                'ingredients' => 'Pomodoro, Mozzarella, Funghi, Prosciutto Cotto, Carciofi, Olive',
                'price' => 11.00,
                'restaurant_id' => 3,
                'image' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/A7B9D1B2-20CE-4D60-B18D-77D8E09F847A/Derivates/349C6F0F-E5E5-4327-9892-930DE2D8E89F.jpg'
            ],
            [
                'name' => 'Capricciosa',
                'ingredients' => 'Pomodoro, Mozzarella, Prosciutto Cotto, Funghi, Carciofi, Olive',
                'price' => 10.50,
                'restaurant_id' => 3,
                'image' => 'https://www.ricettealvolo.it/wp-content/uploads/2023/02/pizza-capricciosa-scaled.jpg'
            ],
            [
                'name' => 'Prosciutto e Funghi',
                'ingredients' => 'Pomodoro, Mozzarella, Prosciutto Cotto, Funghi',
                'price' => 9.50,
                'restaurant_id' => 3,
                'image' => 'https://i1.wp.com/www.piccolericette.net/piccolericette/wp-content/uploads/2019/10/4102_Pizza.jpg?resize=895%2C616&ssl=1'
            ],
            [
                'name' => 'Diavola',
                'ingredients' => 'Pomodoro, Mozzarella, Salame Piccante',
                'price' => 10.00,
                'restaurant_id' => 3,
                'image' => 'https://www.lucianopignataro.it/wp-content/uploads/2023/02/Pizzeria-Le-Parule-Diavola--515x480.webp'
            ],
            [
                'name' => 'Quattro Formaggi',
                'ingredients' => 'Mozzarella, Gorgonzola, Fontina, Parmigiano',
                'price' => 11.50,
                'restaurant_id' => 3,
                'image' => 'https://i0.wp.com/www.piccolericette.net/piccolericette/wp-content/uploads/2017/06/3234_Pizza.jpg?resize=895%2C616&ssl=1'
            ],
            [
                'name' => 'Napoli',
                'ingredients' => 'Pomodoro, Mozzarella, Acciughe, Olive, Capperi',
                'price' => 10.50,
                'restaurant_id' => 3,
                'image' => 'https://www.donnamoderna.com/content/uploads/2021/08/pizza-napoli-830x625.jpg'
            ],
            [
                'name' => 'Vegetariana',
                'ingredients' => 'Pomodoro, Mozzarella, Verdure Grigliate',
                'price' => 10.00,
                'restaurant_id' => 3,
                'image' => 'https://www.guardini.com/images/guardinispa/ricette/full/pizza_set_2021_full.jpg'
            ],
            [
                'name' => 'Bufalina',
                'ingredients' => 'Pomodoro, Mozzarella di Bufala, Basilico',
                'price' => 12.00,
                'restaurant_id' => 3,
                'image' => 'https://www.tacoloco.it/wp-content/uploads/2018/01/pizza-bufalina.jpg'
            ],
            [
                'name' => 'Tonno e Cipolla',
                'ingredients' => 'Pomodoro, Mozzarella, Tonno, Cipolla',
                'price' => 10.50,
                'restaurant_id' => 3,
                'image' => 'https://media-assets.lacucinaitaliana.it/photos/61fbd8df3697f3ffd0cffbc5/3:2/w_1200,h_800,c_limit/pizza-tonno-cipolle-800.jpg'
            ],
            [
                'name' => 'Calzone',
                'ingredients' => 'Pomodoro, Mozzarella, Prosciutto Cotto, Funghi, Ricotta',
                'price' => 12.00,
                'restaurant_id' => 3,
                'image' => 'https://cdn.ilclubdellericette.it/wp-content/uploads/2019/04/calzone-napoletano-640x480.jpg'
            ],
            [
                'name' => 'Pugliese',
                'ingredients' => 'Pomodoro, Mozzarella, Cipolla, Olive, Acciughe, Origano',
                'price' => 10.50,
                'restaurant_id' => 3,
                'image' => 'https://www.silviocicchi.com/pizzachef/wp-content/uploads/2015/05/pizza_pugliese-ev-672x372.jpg'
            ],
            [
                'name' => 'Boscaiola',
                'ingredients' => 'Pomodoro, Mozzarella, Funghi, Salsiccia, Piselli',
                'price' => 11.00,
                'restaurant_id' => 3,
                'image' => 'https://blog.giallozafferano.it/golosipeccati/wp-content/uploads/2015/11/pizza-boscaiola.jpg'
            ],
            [
                'name' => 'Marinara',
                'ingredients' => 'Pomodoro, Aglio, Origano',
                'price' => 8.50,
                'restaurant_id' => 3,
                'image' => 'https://www.ristorantelespecialita.it/wp-content/uploads/2017/03/Pizza-marinara-ricetta.jpg'
            ],
            [
                'name' => 'Frutti di Mare',
                'ingredients' => 'Pomodoro, Mozzarella, Frutti di Mare, Aglio, Prezzemolo',
                'price' => 13.00,
                'restaurant_id' => 3,
                'image' => 'https://wips.plug.it/cips/buonissimo.org/cms/2012/05/pizza-ai-frutti-di-mare.jpg'
            ],
            [
                'name' => 'Bianca',
                'ingredients' => 'Mozzarella, Gorgonzola, Radicchio, Noci',
                'price' => 11.50,
                'restaurant_id' => 3,
                'image' => 'https://blog.giallozafferano.it/dolcesalatoconlucia/wp-content/uploads/2016/10/14725343_10211426845975745_623964806_o.jpg'
            ],
            [
                'name' => 'Rustica',
                'ingredients' => 'Pomodoro, Mozzarella, Pancetta, Patate, Rosmarino',
                'price' => 10.50,
                'restaurant_id' => 3,
                'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/12/89/2a/a5/pizza-con-patate-porcini.jpg'
            ],
            [
                'name' => 'Hawaii',
                'ingredients' => 'Pomodoro, Mozzarella, Prosciutto Cotto, Ananas',
                'price' => 10.50,
                'restaurant_id' => 3,
                'image' => 'https://images.eatsmarter.com/sites/default/files/styles/max_size/public/hawaiian-pizza-532018.jpg'
            ],
            [
                'name' => 'Bufala e Rucola',
                'ingredients' => 'Pomodoro, Mozzarella di Bufala, Rucola, Pomodorini',
                'price' => 12.50,
                'restaurant_id' => 3,
                'image' => 'https://www.guardini.com/images/guardinispa/ricette/full/pizza_basilico.jpg'
            ],
            [
                'name' => 'Salsiccia e Friarielli',
                'ingredients' => 'Pomodoro, Mozzarella, Salsiccia, Friarielli, Peperoncino',
                'price' => 11.00,
                'restaurant_id' => 3,
                'image' => 'https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2022/06/pizza-salsiccia-friarielli-storia.jpg'
            ],
            [
                'name' => 'Acqua Minerale 1 l',
                'ingredients' => null,
                'price' => 1.20,
                'restaurant_id' => 3,
                'image' => 'https://iperdrive.iper.it/wcsstore/FiniperCatalogAssetStore/asset/images/3074457345616683350/3074457345616683350_FULL_main.jpg'
            ],
            [
                'name' => 'Acqua Lete 1 l',
                'ingredients' => null,
                'price' => 1.30,
                'restaurant_id' => 3,
                'image' => 'https://www.drinkupservice.it/content/images/thumbs/0002168_lete-lt-1-pet.png'
            ],
            [
                'name' => 'Patatine fritte',
                'ingredients' => null,
                'price' => 2.50,
                'restaurant_id' => 3,
                'image' => 'https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2023/09/Patatine-fritte.jpg'
            ],
            [
                'name' => 'Coca-Cola in lattina 33cl',
                'ingredients' => null,
                'price' => 2.00,
                'restaurant_id' => 3,
                'image' => 'https://www.topbevande.it/images/thumbs/0085545_coca-cola-original-33cl-confezione-da-24-barattoli-lattina_780.jpeg'
            ],
            [
                'name' => 'Birra Heineken',
                'ingredients' => null,
                'price' => 3.50,
                'restaurant_id' => 3,
                'image' => 'https://www.terranovaalimenti.it/wp-content/uploads/BR0043.jpg'
            ],
            [
                'name' => 'Coca-Cola Zero in lattina 33cl',
                'ingredients' => null,
                'price' => 2.00,
                'restaurant_id' => 2,
                'image' => 'https://cdn1.marcocusano.cloud/D936542D/products/58-c4ca4238a0b923820dcc509a6f75849b'
            ],
            [
                'name' => 'Pollo Kung Pao',
                'ingredients' => 'Pollo, Arachidi, Verdure, Peperoncini, Salsa di Soia',
                'price' => 12.99,
                'restaurant_id' => 4,
                'image' => 'https://www.finedininglovers.it/sites/g/files/xknfdk1106/files/fdl_content_import_it/pollo-kung-pao.jpg'
            ],
            [
                'name' => 'Maiale Agrodolce',
                'ingredients' => 'Maiale, Ananas, Peperoni, Cipolla, Salsa Agrodolce',
                'price' => 11.99,
                'restaurant_id' => 4,
                'image' => 'https://wips.plug.it/cips/buonissimo.org/cms/2012/06/maiale-in-agrodolce.jpg'
            ],
            [
                'name' => 'Manzo con Broccoli',
                'ingredients' => 'Manzo, Broccoli, Aglio, Salsa di Soia',
                'price' => 13.99,
                'restaurant_id' => 4,
                'image' => 'https://recipeimages.migros.ch/crop/v-w-1200-h-630-a-center_center/4221f8e76a0b3e5dc928fdecab010f467a0d1839/straccetti-di-manzo-con-broccoli-0-16-9.jpg'
            ],
            [
                'name' => 'Involtini Primavera',
                'ingredients' => 'Cavolo Cappuccio, Carote, Funghi, Germogli di Soia, Fogli di Riso',
                'price' => 6.99,
                'restaurant_id' => 4,
                'image' => 'https://www.cucchiaio.it/content/dam/cucchiaio/it/ricette/2023/06/involtini-di-manzo-prosciutto-scamorza-e-salvia/_R5_0343.jpg'
            ],
            [
                'name' => 'Riso Fritto con Gamberetti',
                'ingredients' => 'Gamberetti, Riso, Uova, Piselli, Carote, Salsa di Soia',
                'price' => 10.99,
                'restaurant_id' => 4,
                'image' => 'https://www.hobby.it/wp-content/uploads/2019/05/1448-0-riso-fritto-con-gamberetti_ok.jpg'
            ],
            [
                'name' => 'Tofu alla Szechuan',
                'ingredients' => 'Tofu, Carne di Maiale Macinata, Pasta di Peperoncino, Fagioli Neri Fermentati, Salsa di Soia',
                'price' => 10.99,
                'restaurant_id' => 4,
                'image' => 'https://khinskitchen.com/wp-content/uploads/2022/05/szechuan-tofu-05-500x500.jpg'
            ],
            [
                'name' => 'Ravioli al Vapore',
                'ingredients' => 'Maiale, Gamberetti, Erba Cipollina, Zenzero, Fogli di Riso',
                'price' => 9.99,
                'restaurant_id' => 4,
                'image' => 'https://cuchina.it/wp-content/uploads/2022/07/IMG_20220718_103445-924x1024.jpg'
            ],
            [
                'name' => 'Pollo del Generale Tso',
                'ingredients' => 'Pollo, Amido di Mais, Salsa di Soia, Aglio, Peperoncini, Zucchero, Aceto',
                'price' => 12.99,
                'restaurant_id' => 4,
                'image' => 'https://video-images.vice.com/articles/61b7c341a65df4009bb44074/lede/1639433521731-general-tsos-chicken-recipe-stevie.jpeg'
            ],
            [
                'name' => 'Zuppa Acida e Piccante',
                'ingredients' => 'Brodo di Pollo, Tofu, Funghi, Germogli di Bambù, Uova, Aceto, Salsa di Soia',
                'price' => 7.99,
                'restaurant_id' => 4,
                'image' => 'https://cuchina.it/wp-content/uploads/2021/12/IMG_20211225_173916-967x1024.jpg'
            ],
            [
                'name' => 'Chow Mein',
                'ingredients' => 'Tagliatelle di Uovo, Pollo, Gamberetti, Bok Choy, Carote, Salsa di Soia',
                'price' => 11.99,
                'restaurant_id' => 4,
                'image' => 'https://www.recipetineats.com/wp-content/uploads/2018/08/Chow-Mein_1.jpg'
            ],
            [
                'name' => 'Anatra alla Pechinese',
                'ingredients' => 'Anatra, Pancake, Cipolla, Cetriolo, Salsa di Prugne',
                'price' => 14.99,
                'restaurant_id' => 4,
                'image' => 'https://www.turismo.it/typo3temp/pics/dd7b92c544.jpg'
            ],
            [
                'name' => 'Spaghetti di Riso con Verdure Saltate',
                'ingredients' => 'Spaghetti di Riso, Peperoni, Carote, Cipolla, Zucchine, Salsa di Soia',
                'price' => 9.99,
                'restaurant_id' => 4,
                'image' => 'https://www.giallozafferano.it/images/10-1045/Spaghetti-di-riso-con-carne-e-verdure_650x433_wm.jpg'
            ],
            [
                'name' => 'Gamberi in Salsa di Ostriche',
                'ingredients' => 'Gamberi, Verdure Miste, Salsa di Ostriche, Aglio',
                'price' => 13.99,
                'restaurant_id' => 4,
                'image' => 'https://4.bp.blogspot.com/_gw6CpIasdLk/SAWFLo2GrsI/AAAAAAAAArg/bLwvdOP374Q/s400/insalata+gamberi+soia+piselli+sedano+salsa+ostriche+-+web.JPG'
            ],
            [
                'name' => 'Rolls di Uova',
                'ingredients' => 'Uova, Carote, Piselli, Cipolla, Prosciutto Cotto',
                'price' => 8.99,
                'restaurant_id' => 4,
                'image' => 'https://img-global.cpcdn.com/recipes/58ee9f6b4474db56/680x482cq70/uova-in-crosta-recipe-main-photo.jpg'
            ],
            [
                'name' => 'Riso Fritto Yangzhou',
                'ingredients' => 'Riso, Uova, Gamberetti, Prosciutto Cotto, Carote, Piselli, Cipolla',
                'price' => 11.99,
                'restaurant_id' => 4,
                'image' => 'https://lh5.googleusercontent.com/tz_dn5rvgFpUiF-PT3vcJR2_sERaah2rV_a_olDeVnhVhd4t9Of7lE4ekuJm6O8cR2O5LJFJwuoCWgtlvZcO3iIQzTpqr8vhaywFOl4rrACtv-20Hg3rssCZsr7Q7x7omUgO03-y6VAmMB9TZw'
            ],
            [
                'name' => 'Insalata di Alghe',
                'ingredients' => 'Alghe Miste, Sesamo, Olio di Sesamo, Aceto di Riso, Zucchero',
                'price' => 6.99,
                'restaurant_id' => 4,
                'image' => 'https://blog.giallozafferano.it/spuntidibonta/wp-content/uploads/2022/11/goma-wakame-ricetta-960x720.jpg'
            ],
            [
                'name' => 'Pancake di Gamberi',
                'ingredients' => 'Gamberi, Farina, Uova, Cipolla Verde, Zenzero',
                'price' => 10.99,
                'restaurant_id' => 4,
                'image' => 'https://www.lacucinageografica.it/wp-content/uploads/2020/06/Frittelle_ricetta_coreana_frutti_di_mare_pajeon_-1024x682.jpg'
            ],
            [
                'name' => 'Tofu Saltato con Verdure',
                'ingredients' => 'Tofu, Broccoli, Funghi, Carote, Salsa di Soia',
                'price' => 9.99,
                'restaurant_id' => 4,
                'image' => 'https://static2.iodonna.it/wp-content/uploads/2020/08/ricetta-sano-leggero-tofu-verdure-slider.jpg'
            ],
            [
                'name' => 'Tempura di Verdure',
                'ingredients' => 'Verdure Miste, Farina, Uova, Olio per Friggere, Salsa di Soia',
                'price' => 8.99,
                'restaurant_id' => 4,
                'image' => 'https://www.misya.info/wp-content/uploads/2013/03/tempura.jpg'
            ],
            [
                'name' => 'Zuppa di Wonton',
                'ingredients' => 'Wonton, Brodo di Pollo, Carne di Maiale, Cipolla, Sedano',
                'price' => 7.99,
                'restaurant_id' => 4,
                'image' => 'https://www.giallozafferano.it/images/238-23853/Wonton-soup_450x300.jpg'
            ],
            [
                'name' => 'Birra Heineken',
                'ingredients' => null,
                'price' => 3.50,
                'restaurant_id' => 3,
                'image' => 'https://content.dambros.it/uploads/2016/03/30122253/0000041719.jpg'
            ],
            [
                'name' => 'Birra Asahi 50cl',
                'ingredients' => null,
                'price' => 4.50,
                'restaurant_id' => 3,
                'image' => 'https://www.irorisushiathome.it/wp-content/uploads/2020/09/birra-asahi-500ml.jpg'
            ],
            [
                'name' => 'Spaghetti alla Carbonara',
                'ingredients' => 'Spaghetti, Uova, Guanciale, Pecorino Romano, Pepe Nero',
                'price' => 10.99,
                'restaurant_id' => 5,
                'image' => 'https://www.buttalapasta.it/wp-content/uploads/2020/04/spaghetti-alla-carbonara.jpg'
            ],
            [
                'name' => 'Penne all\'Arrabbiata',
                'ingredients' => 'Penne, Pomodoro, Peperoncino, Aglio, Olio Extra Vergine di Oliva',
                'price' => 9.99,
                'restaurant_id' => 5,
                'image' => 'https://www.fattoincasadabenedetta.it/wp-content/uploads/2022/03/AdobeStock_325292847-1200x900.jpg'
            ],
            [
                'name' => 'Linguine al Pesto Genovese',
                'ingredients' => 'Linguine, Basilico, Pinoli, Parmigiano Reggiano, Aglio, Olio Extra Vergine di Oliva',
                'price' => 11.99,
                'restaurant_id' => 5,
                'image' => 'https://www.dissapore.com/wp-content/uploads/2021/07/piatto-di-linguine-con-basilico.jpg'
            ],
            [
                'name' => 'Rigatoni alla Amatriciana',
                'ingredients' => 'Rigatoni, Pancetta, Pomodoro, Cipolla, Pecorino Romano',
                'price' => 10.99,
                'restaurant_id' => 5,
                'image' => 'https://scattidigusto.b-cdn.net/wp-content/uploads/2020/10/rigatoni-amatriciana-ricetta.jpg'
            ],
            [
                'name' => 'Fettuccine al Ragù Bolognese',
                'ingredients' => 'Fettuccine, Carne Macinata, Pomodoro, Carota, Sedano, Cipolla, Vino Rosso',
                'price' => 12.99,
                'restaurant_id' => 5,
                'image' => 'https://media-assets.lacucinaitaliana.it/photos/61fbda8ee0eeff9a53956615/1:1/pass/undefined'
            ],
            [
                'name' => 'Paccheri alla Norma',
                'ingredients' => 'Paccheri, Melanzane, Pomodoro, Ricotta Salata, Basilico',
                'price' => 11.99,
                'restaurant_id' => 5,
                'image' => 'https://wips.plug.it/cips/buonissimo.org/cms/2016/05/paccheri-norma.jpg?w=713&a=c&h=407'
            ],
            [
                'name' => 'Tagliatelle ai Funghi Porcini',
                'ingredients' => 'Tagliatelle, Funghi Porcini, Panna, Parmigiano Reggiano',
                'price' => 13.99,
                'restaurant_id' => 5,
                'image' => 'https://www.fattoincasadabenedetta.it/wp-content/uploads/2022/03/tagliatelle-ai-funghi-porcini.jpg'
            ],
            [
                'name' => 'Orecchiette alle Cime di Rapa',
                'ingredients' => 'Orecchiette, Cime di Rapa, Aglio, Olio Extra Vergine di Oliva, Peperoncino',
                'price' => 12.99,
                'restaurant_id' => 5,
                'image' => 'https://blog.giallozafferano.it/dulcisinforno/wp-content/uploads/2021/01/Orecchiette-con-cime-di-rapa-3139.jpg'
            ],
            [
                'name' => 'Lasagne alla Bolognese',
                'ingredients' => 'Lasagne, Carne Macinata, Besciamella, Parmigiano Reggiano, Pomodoro',
                'price' => 14.99,
                'restaurant_id' => 5,
                'image' => 'https://www.granarolo.it/system/granarolo_consumer/attachments/data/000/001/606/original/lasagne-alla-bolognese.jpg?1490627827'
            ],
            [
                'name' => 'Ravioli al Burro e Salvia',
                'ingredients' => 'Ravioli, Burro, Salvia, Parmigiano Reggiano',
                'price' => 13.99,
                'restaurant_id' => 5,
                'image' => 'https://wips.plug.it/cips/buonissimo.org/cms/2011/11/ravioli-di-ricotta-con-burro-e-salvia.jpg?w=712&a=c&h=406'
            ],
            [
                'name' => 'Birra Heineken',
                'ingredients' => null,
                'price' => 3.50,
                'restaurant_id' => 3,
                'image' => 'https://content.dambros.it/uploads/2016/03/30122253/0000041719.jpg'
            ],
            [
                'name' => 'Acqua Minerale 1 l',
                'ingredients' => null,
                'price' => 1.50,
                'restaurant_id' => 3,
                'image' => 'https://www.colizzivini.it/media/catalog/product/cache/a2269601488aaf6aadf9012f10675769/a/c/acqua_levissima__naturale_100.webp'
            ],
            [
                'name' => 'Acqua Frizzante 1 l',
                'ingredients' => null,
                'price' => 1.50,
                'restaurant_id' => 3,
                'image' => 'https://www.drinkupservice.it/content/images/thumbs/0002168_lete-lt-1-pet.png'
            ],
            [
                'name' => 'Acqua Naturale 50 cl',
                'ingredients' => null,
                'price' => 0.80,
                'restaurant_id' => 3,
                'image' => 'https://iperdrive.iper.it/wcsstore/FiniperCatalogAssetStore/asset/images/3074457345616683350/3074457345616683350_FULL_main.jpg'
            ],
            [
                'name' => 'Kebab Classico',
                'ingredients' => 'Carne di Maiale/Pollo, Pane Pita, Insalata, Pomodoro, Cipolla, Salsa allo Yogurt',
                'price' => 7.99,
                'restaurant_id' => 6,
                'image' => 'https://www.bellacarne.it/wp-content/uploads/2021/03/kebab-ricetta-originale.jpg'
            ],
            [
                'name' => 'Falafel Wrap',
                'ingredients' => 'Falafel, Pane Pita, Insalata, Pomodoro, Cipolla, Hummus',
                'price' => 8.99,
                'restaurant_id' => 6,
                'image' => 'https://pickyeaterblog.com/wp-content/uploads/2022/11/healthy-falafel-wrap-recipe.jpg'
            ],
            [
                'name' => 'Shawarma di Pollo',
                'ingredients' => 'Carne di Pollo, Pane Pita, Insalata, Pomodoro, Cipolla, Salsa Tahini',
                'price' => 9.99,
                'restaurant_id' => 6,
                'image' => 'https://blog.giallozafferano.it/incucinaconpatty/wp-content/uploads/2021/04/shawarma-6063224_1280-1200x675.jpg'
            ],
            [
                'name' => 'Kebab di Agnello',
                'ingredients' => 'Carne di Agnello, Pane Pita, Insalata, Pomodoro, Cipolla, Salsa allo Yogurt',
                'price' => 10.99,
                'restaurant_id' => 6,
                'image' => 'https://3.bp.blogspot.com/-9soANifVAsA/Vz8Ac7qC22I/AAAAAAAABec/dSxjgR2vMi8IloY7Rb7iMZN-QmvnOoNCgCLcB/s1600/menu-item-large-20.jpg'
            ],
            [
                'name' => 'Durum Kebab',
                'ingredients' => 'Carne di Manzo/Pollo, Tortilla, Insalata, Pomodoro, Cipolla, Salsa Piccante',
                'price' => 8.99,
                'restaurant_id' => 6,
                'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/0f/3e/d5/96/durum-kebab.jpg'
            ],
            [
                'name' => 'Kebab Vegetariano',
                'ingredients' => 'Seitan, Pane Pita, Insalata, Pomodoro, Cipolla, Salsa allo Yogurt',
                'price' => 9.99,
                'restaurant_id' => 6,
                'image' => 'https://www.giallozafferano.it/images/195-19577/Kebab-vegetariano_780x520_wm.jpg'
            ],
            [
                'name' => 'Kebab con Patatine',
                'ingredients' => 'Carne di Maiale/Pollo, Pane Pita, Insalata, Pomodoro, Cipolla, Patatine Fritte',
                'price' => 10.99,
                'restaurant_id' => 6,
                'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/21/69/25/bc/piatto-kebab-con-patatine.jpg'
            ],
            [
                'name' => 'Doner Kebab',
                'ingredients' => 'Carne di Manzo/Pollo, Pane Pita, Insalata, Pomodoro, Cipolla, Salsa Piccante',
                'price' => 9.99,
                'restaurant_id' => 6,
                'image' => 'https://www.thespruceeats.com/thmb/ao7czXh1afSBamtQnDUilsLD3uc=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/doner-kebab-recipe-4171703-hero-01-c14d8b7189df4685a50bae311317f831.jpg'
            ],
            [
                'name' => 'Kofte Kebab',
                'ingredients' => 'Polpette di Carne di Manzo/Pollo, Pane Pita, Insalata, Pomodoro, Cipolla, Salsa allo Yogurt',
                'price' => 10.99,
                'restaurant_id' => 6,
                'image' => 'https://www.allrecipes.com/thmb/i_xzwOLBDG0wzJ62gF2xmIW_iR8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/106030-kofta-kebabs-DDMFS-4x3-8d48e28bf518470aba11d076624037a6.jpg'
            ],
            [
                'name' => 'Birra Heineken',
                'ingredients' => null,
                'price' => 3.50,
                'restaurant_id' => 6,
                'image' => 'https://content.dambros.it/uploads/2016/03/30122253/0000041719.jpg'
            ],
            [
                'name' => 'Acqua naturale 50cl',
                'ingredients' => null,
                'price' => 1.00,
                'restaurant_id' => 6,
                'image' => 'https://spaziopizzadelivery.it/cdn/shop/products/Acquanaturale50cl_756f6cbf-8e8f-4bd9-b402-6d65507e8302.jpg?v=1709639482'
            ],
            [
                'name' => 'Acqua frizzante 50cl',
                'ingredients' => null,
                'price' => 1.00,
                'restaurant_id' => 6,
                'image' => 'https://cdn1.marcocusano.cloud/D936542D/products/178-c4ca4238a0b923820dcc509a6f75849b'
            ],
            [
                'name' => 'Pollo Tikka Masala',
                'ingredients' => 'Pollo, Pomodoro, Cipolla, Peperoncino, Crema di Cocco, Spezie Varie',
                'price' => 12.99,
                'restaurant_id' => 7,
                'image' => 'https://www.indianhealthyrecipes.com/wp-content/uploads/2020/03/badam-milk-2.jpg'
            ],
            [
                'name' => 'Paneer Tikka',
                'ingredients' => 'Paneer, Pomodoro, Cipolla, Peperoncino, Spezie Varie',
                'price' => 11.99,
                'restaurant_id' => 7,
                'image' => 'https://www.cookwithkushi.com/wp-content/uploads/2023/02/tandoori_paneer_tikka_restaurant_style.jpg'
            ],
            [
                'name' => 'Biryani di Verdure',
                'ingredients' => 'Riso Basmati, Verdure Miste, Spezie Varie',
                'price' => 9.99,
                'restaurant_id' => 7,
                'image' => 'https://www.buttalapasta.it/wp-content/uploads/biryani-di-verdure.jpg',
            ],
            [
                'name' => 'Butter Chicken',
                'ingredients' => 'Pollo, Pomodoro, Burro, Panna, Spezie Varie',
                'price' => 13.99,
                'restaurant_id' => 7,
                'image' => 'https://cafedelites.com/wp-content/uploads/2019/01/Butter-Chicken-IMAGE-64.jpg'
            ],
            [
                'name' => 'Saag Paneer',
                'ingredients' => 'Paneer, Spinaci, Pomodoro, Cipolla, Spezie Varie',
                'price' => 10.99,
                'restaurant_id' => 7,
                'image' => 'https://www.sainsburysmagazine.co.uk/media/7337/download/Saag-Paneer.jpg?v=1'
            ],
            [
                'name' => 'Naan all\'Aglio',
                'ingredients' => 'Farina, Aglio, Burro',
                'price' => 3.99,
                'restaurant_id' => 7,
                'image' => 'https://www.giallozafferano.it/images/201-20127/Naan-all-aglio_780x520_wm.jpg'
            ],
            [
                'name' => 'Mango Lassi',
                'ingredients' => 'Mango, Yogurt, Zucchero',
                'price' => 4.99,
                'restaurant_id' => 7,
                'image' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/6a808bb0-210d-4a71-9bd5-5f602437232f/Derivates/37e049d3-4aec-44fb-a1e4-17c951aa4623.jpg'
            ],
            [
                'name' => 'Pakora di Verdure',
                'ingredients' => 'Verdure Miste, Farina di Ceci, Spezie Varie',
                'price' => 7.99,
                'restaurant_id' => 7,
                'image' => 'https://www.vegolosi.it/wp-content/uploads/2018/06/Pakoras_4936_650.jpg'
            ],
            [
                'name' => 'Raita di Cetrioli',
                'ingredients' => 'Cetrioli, Yogurt, Spezie Varie',
                'price' => 2.99,
                'restaurant_id' => 7,
                'image' => 'https://www.giallozafferano.it/images/30-3009/Raita_780x520_wm.jpg'
            ],
            [
                'name' => 'Gulab Jamun',
                'ingredients' => 'Latte in Polvere, Farina, Zucchero, Acqua di Rose',
                'price' => 6.99,
                'restaurant_id' => 7,
                'image' => 'https://static01.nyt.com/images/2023/10/19/multimedia/ND-Gulab-Jamun-tqgl/ND-Gulab-Jamun-tqgl-square640.jpg'
            ],
            [
                'name' => 'Masala Chai',
                'ingredients' => 'Tè Nero, Latte, Spezie Varie',
                'price' => 3.99,
                'restaurant_id' => 7,
                'image' => 'https://primochef.it/wp-content/uploads/2021/05/SH_masala_chai.jpg'
            ],
            [
                'name' => 'Kulfi alla Rosa',
                'ingredients' => 'Latte, Zucchero, Pistacchi, Acqua di Rose',
                'price' => 7.99,
                'restaurant_id' => 7,
                'image' => 'https://www.desiblitz.com/wp-content/uploads/2019/09/7-Delicious-Kulfi-Recipes-to-Make-at-Home-strawberry.jpg'
            ],
            [
                'name' => 'Rasmalai',
                'ingredients' => 'Latte, Zucchero, Pistacchi, Spezie Varie',
                'price' => 8.99,
                'restaurant_id' => 7,
                'image' => 'https://www.cookwithmanali.com/wp-content/uploads/2014/07/Rasmalai-Recipe.jpg'
            ],
            [
                'name' => 'Big Mac',
                'ingredients' => 'Pane, Hamburger di Manzo, Insalata, Formaggio, Salsa Speciale, Cipolla',
                'price' => 5.99,
                'restaurant_id' => 8,
                'image' => 'https://www.mcdonalds.it/sites/default/files/styles/compressed/public/products/big-mac-hero-mob.jpg?itok=EE5XBx1F'
            ],
            [
                'name' => 'McChicken',
                'ingredients' => 'Pane, Petto di Pollo Impanato, Insalata, Maionese',
                'price' => 4.99,
                'restaurant_id' => 8,
                'image' => 'https://www.dissapore.com/wp-content/uploads/2022/08/big-mac-chicken.jpg'
            ],
            [
                'name' => 'McNuggets',
                'ingredients' => 'Petti di Pollo, Panatura, Salsa Agrodolce',
                'price' => 6.99,
                'restaurant_id' => 8,
                'image' => 'https://www.foodserviceweb.it/wp-content/uploads/sites/4/2018/09/800x596_chickennuggets_20st.jpg'
            ],
            [
                'name' => 'Quarter Pounder with Cheese',
                'ingredients' => 'Pane, Hamburger di Manzo, Formaggio, Ketchup, Senape',
                'price' => 5.49,
                'restaurant_id' => 8,
                'image' => 'https://s7d1.scene7.com/is/image/mcdonalds/DC_202201_0007-005_QuarterPounderwithCheese_832x472:1-3-product-tile-desktop?wid=765&hei=472&dpr=off'
            ],
            [
                'name' => 'Filet-O-Fish',
                'ingredients' => 'Pane, Pesce Impanato, Formaggio, Salsa Tartara',
                'price' => 4.99,
                'restaurant_id' => 8,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/f/f7/McDonald%27s_Filet-O-Fish_sandwich_%281%29.jpg'
            ],
            [
                'name' => 'Patatine fritte',
                'ingredients' => 'Patate, Olio di Semi di Girasole, Sale',
                'price' => 2.49,
                'restaurant_id' => 8,
                'image' => 'https://s7d1.scene7.com/is/image/mcdonalds/t-mcdonalds-fries-medium-6:nutrition-calculator-tile?wid=472&hei=472&dpr=off'
            ],
            [
                'name' => 'McFlurry',
                'ingredients' => 'Gelato, Topping a Scelta',
                'price' => 3.99,
                'restaurant_id' => 8,
                'image' => 'https://www.mcdonalds.it/sites/default/files/styles/compressed/public/products/750x1100-mcflurry-oreo.jpg?itok=EZNCj6LZ'
            ],
            [
                'name' => 'Big Breakfast',
                'ingredients' => 'Uova, Pancetta, Salsiccia, Hash Browns, Pancakes, Sciroppo d\'Acero',
                'price' => 6.99,
                'restaurant_id' => 8,
                'image' => 'https://www.the-sun.com/wp-content/uploads/sites/6/2021/01/OFF-PLAT-KE-BREAKFAST.jpg?strip=all&quality=100&w=1500&h=1000&crop=1'
            ],
            [
                'name' => 'Double Cheeseburger',
                'ingredients' => 'Pane, Doppio Hamburger di Manzo, Formaggio, Ketchup, Sottaceti',
                'price' => 4.49,
                'restaurant_id' => 8,
                'image' =>  'https://www.mcdonalds.it/sites/default/files/styles/compressed/public/products/double-cheeseburger--hero-mob.jpg?itok=h2Sb6fQv'
            ],
            [
                'name' => 'McRib',
                'ingredients' => 'Pane, Maiale Tritato, Salsa BBQ, Cipolla, Sottaceti',
                'price' => 5.49,
                'restaurant_id' => 8,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/2/27/McD-McRib.jpg'
            ],
            [
                'name' => 'Hash Browns',
                'ingredients' => 'Patate, Sale, Pepe',
                'price' => 1.99,
                'restaurant_id' => 8,
                'image' => 'https://s7d1.scene7.com/is/image/mcdonalds/mcdonalds-Hash-Brown-New:1-3-product-tile-desktop?wid=829&hei=515&dpr=off'
            ],
            [
                'name' => 'Sausage McMuffin',
                'ingredients' => 'Muffin, Salsiccia, Uovo, Formaggio',
                'price' => 3.99,
                'restaurant_id' => 8,
                'image' => 'https://s7d1.scene7.com/is/image/mcdonalds/mcdonalds-Sausage-Egg-McMuffin-2:1-3-product-tile-desktop?wid=829&hei=515&dpr=off'
            ],
            [
                'name' => 'McDouble',
                'ingredients' => 'Pane, Doppio Hamburger di Manzo, Ketchup, Senape, Cipolla',
                'price' => 3.49,
                'restaurant_id' => 8,
                'image' => 'https://s7d1.scene7.com/is/image/mcdonalds/Header_McDouble_832x472:1-3-product-tile-desktop?wid=763&hei=472&dpr=off'
            ],
            [
                'name' => 'Classic Salmon Poke Bowl',
                'ingredients' => 'Salmone Fresco, Riso al Gelsomino, Avocado, Edamame, Cetriolo, Alghe Nori, Salsa Ponzu',
                'price' => 12.99,
                'restaurant_id' => 9,
                'image' => 'https://www.savoryexperiments.com/wp-content/uploads/2022/01/Salmon-Poke-Bowl-4.jpg'
            ],
            [
                'name' => 'Spicy Tuna Poke Bowl',
                'ingredients' => 'Tonno Piccante, Riso al Gelsomino, Avocado, Mais, Cipollotto, Wasabi, Salsa Sriracha',
                'price' => 11.99,
                'restaurant_id' => 9,
                'image' => 'https://www.skinnytaste.com/wp-content/uploads/2019/08/Spicy-Tuna-Poke-Bowls-8.jpg'
            ],
            [
                'name' => 'Hawaiian Poke Bowl',
                'ingredients' => 'Tonno Giallo, Salmone, Riso al Gelsomino, Ananas, Mango, Peperoncino, Salsa Teriyaki',
                'price' => 14.99,
                'restaurant_id' => 9,
                'image' => 'https://therecipecritic.com/wp-content/uploads/2022/01/hawaiianpokebowls.jpg'
            ],
            [
                'name' => 'Tofu Poke Bowl',
                'ingredients' => 'Tofu, Riso al Gelsomino, Avocado, Pomodoro, Mais, Cetriolo, Salsa Yuzu',
                'price' => 10.99,
                'restaurant_id' => 9,
                'image' => 'https://www.skinnytaste.com/wp-content/uploads/2023/03/Tofu-Poke-Bowl-8.jpg'
            ],
            [
                'name' => 'California Roll Poke Bowl',
                'ingredients' => 'Granchio, Avocado, Cetriolo, Riso al Gelsomino, Masago, Salsa Mayo-Sriracha',
                'price' => 13.49,
                'restaurant_id' => 9,
                'image' => 'https://www.cookingclassy.com/wp-content/uploads/2022/08/california-roll-sushi-bowls-3.jpg'
            ],
            [
                'name' => 'Salmon Avocado Poke Bowl',
                'ingredients' => 'Salmone Fresco, Avocado, Riso al Gelsomino, Edamame, Cetriolo, Alga Wakame, Salsa Soia',
                'price' => 12.99,
                'restaurant_id' => 9,
                'image' => 'https://images.eatsmarter.com/sites/default/files/styles/max_size/public/salmon-poke-bowl-with-avocado-664909.jpg'
            ],
            [
                'name' => 'Spicy Salmon Poke Bowl',
                'ingredients' => 'Salmone Piccante, Riso al Gelsomino, Avocado, Mango, Mais, Cetriolo, Salsa Teriyaki',
                'price' => 12.99,
                'restaurant_id' => 9,
                'image' => 'https://farahjeats.com/wp-content/uploads/2022/01/IMG_0060_jpg-1024x1024.jpg'
            ],
            [
                'name' => 'Vegetarian Poke Bowl',
                'ingredients' => 'Tofu, Riso al Gelsomino, Avocado, Peperoni, Mais, Carote, Salsa di Sesamo',
                'price' => 10.99,
                'restaurant_id' => 9,
                'image' => 'https://www.noracooks.com/wp-content/uploads/2022/06/vegan-poke-bowl-6.jpg'
            ],
            [
                'name' => 'Spicy Shrimp Poke Bowl',
                'ingredients' => 'Gamberetti Piccanti, Riso al Gelsomino, Avocado, Mango, Cetriolo, Mais, Salsa Sriracha',
                'price' => 13.49,
                'restaurant_id' => 9,
                'image' => 'https://www.whollytasteful.com/wp-content/uploads/2022/02/shrimp-poke-bowl-featured.jpg'
            ],
            [
                'name' => 'Whopper',
                'ingredients' => 'Hamburger di Manzo, Pomodoro, Lattuga, Cipolla, Formaggio, Salsa di Maionese',
                'price' => 5.99,
                'restaurant_id' => 10,
                'image' => 'https://www.greenme.it/wp-content/uploads/2023/09/whopper-burger-king.jpg'
            ],
            [
                'name' => 'Big King XXL',
                'ingredients' => 'Hamburger di Manzo, Bacon, Formaggio, Lattuga, Cipolla, Salsa di Maionese',
                'price' => 7.49,
                'restaurant_id' => 10,
                'image' => 'https://www.bidibee.com/file/5f76037f10000025eeb0c8b5/MARKETS/5f76044f1000002beeb0c8b6/ITEMS/5f92f7761000004e166402fa/medium_9BLolTC5Mzj6C6F.jpg'
            ],
            [
                'name' => 'Cheeseburger',
                'ingredients' => 'Hamburger di Manzo, Formaggio, Ketchup, Senape, Sottaceti, Cipolla',
                'price' => 3.49,
                'restaurant_id' => 10,
                'image' => 'https://burgerking.com.cy/sites/default/files/Cheeseburger-01_2.png'
            ],
            [
                'name' => 'Chicken Nugget',
                'ingredients' => 'Pollo Impanato, Salsa di Maionese, Salsa Barbecue',
                'price' => 4.99,
                'restaurant_id' => 10,
                'image' => 'https://burgerking.com.my/upload/image/Product/21/Nuggets%206pcs.png'
            ],
            [
                'name' => 'BK Veggie Burger',
                'ingredients' => 'Hamburger Vegetale, Pomodoro, Lattuga, Cipolla, Ketchup, Senape',
                'price' => 4.99,
                'restaurant_id' => 10,
                'image' => 'https://funnyvegan.com/wp-content/uploads/2021/03/Funny-Vegan-news-plant-based-Whooper.png'
            ],
            [
                'name' => 'Chicken Royale',
                'ingredients' => 'Petto di Pollo alla Griglia, Pomodoro, Lattuga, Formaggio, Salsa di Maionese',
                'price' => 6.49,
                'restaurant_id' => 10,
                'image' => 'https://s3-eu-central-1.amazonaws.com/www.burger-king.ng/wp-media-folder-burger-king-nigeria//home/ubuntu/wordpress/web/app/uploads/sites/12/2021/09/original-chicken-1.jpg'
            ],
            [
                'name' => 'Double Whopper',
                'ingredients' => 'Doppio Hamburger di Manzo, Formaggio, Lattuga, Cipolla, Salsa di Maionese',
                'price' => 8.99,
                'restaurant_id' => 10,
                'image' => 'https://cms.burgerking.be/uploads/medium_DOUBLE_WHOPPER_CHEESE_FV_V1_min_33fd13abe8.png'
            ],
            [
                'name' => 'Bacon King',
                'ingredients' => 'Hamburger di Manzo, Bacon, Formaggio, Lattuga, Cipolla, Salsa di Maionese',
                'price' => 6.99,
                'restaurant_id' => 10,
                'image' => 'https://www.burgerking.it/assets/img/console/mo/products/580image_sito_slide_it.png?v=1709568750'
            ],
            [
                'name' => 'Chicken Fries',
                'ingredients' => 'Bastoncini di Pollo Impanato, Salsa di Maionese, Ketchup',
                'price' => 4.49,
                'restaurant_id' => 10,
                'image' => 'https://www.allrecipes.com/thmb/hjmgYEDrk96JhI3HLU9UJsoS6C4=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/7972088-Copycat-Burger-King-Chicken-Fries-ddmfs-4x3-165-f344109ed24944fc89677aaaae31dc7d.jpg'
            ],
            [
                'name' => 'BK Fusion',
                'ingredients' => 'Hamburger di Manzo, Pane al Sesamo, Formaggio, Salsa di Maionese, Cipolla, Pomodoro',
                'price' => 5.99,
                'restaurant_id' => 10,
                'image' => 'https://cdn.innaturale.com/uploads/2023/05/Veggie-Steakhouse-Burger-King.webp'
            ],
            [
                'name' => 'Crispy Chicken Wrap',
                'ingredients' => 'Pollo Croccante, Lattuga, Pomodoro, Formaggio, Salsa di Maionese',
                'price' => 4.99,
                'restaurant_id' => 10,
                'image' => 'https://burgerking.com.mt/wp-content/uploads/2020/03/13.ChickenWrap.png'
            ],
            [
                'name' => 'Double Cheeseburger',
                'ingredients' => 'Doppio Hamburger di Manzo, Doppio Formaggio, Ketchup, Senape, Sottaceti',
                'price' => 5.99,
                'restaurant_id' => 10,
                'image' => 'https://burgerking.com.my/upload/image/Product/56/Cheeseburger%20%28Double%29%20Ala%20Carte.png'
            ],
            [
                'name' => 'BBQ Bacon Double Cheeseburger',
                'ingredients' => 'Doppio Hamburger di Manzo, Doppio Bacon, Doppio Formaggio, Salsa Barbecue',
                'price' => 7.99,
                'restaurant_id' => 10,
                'image' => 'https://burgerking.com.my/upload/image/Product/14/BBQ%20Beefacon%20%28Double%29%20Ala%20Carte.png'
            ],
            [
                'name' => 'Long Chicken',
                'ingredients' => 'Petto di Pollo alla Griglia, Lattuga, Pomodoro, Formaggio, Salsa di Maionese',
                'price' => 5.99,
                'restaurant_id' => 10,
                'image' => 'https://burgerking.com.my/upload/image/Product/2/Long%20Chicken.png'
            ],
            [
                'name' => 'Spaghetto alle vongole',
                'ingredients' => 'Spaghetti, Aglio, Olio, Peperoncino, Vongole, Prezzemolo',
                'price' => 12.00,
                'restaurant_id' => 11,
                'image' => 'https://www.casapappagallo.it/storage/21312/spaghetti-con-le-vongole-%28sito%29.jpg'
            ],
            [
                'name' => 'Spaghetto allo Scoglio',
                'ingredients' => 'Spaghetti, Aglio, Olio, Peperoncino, Vongole, Cozze, Scampi, Gamberi, Calamari, Prezzemolo',
                'price' => 15.00,
                'restaurant_id' => 11,
                'image' => 'https://www.ricettedalmondo.it/images/foto-ricette/s/113-spaghetti-allo-scoglio-ds.jpg'
            ],
            [
                'name' => 'Risotto crema di Scapi',
                'ingredients' => 'Riso, Olio, Peperoncino, Scampi, Prezzemolo',
                'price' => 10.90,
                'restaurant_id' => 11,
                'image' => 'https://www.ricetteperbimby.it/foto-ricette/risotto-alla-crema-di-scampi-bimby.jpg'
            ],
            [
                'name' => 'Risotto alla pescatora',
                'ingredients' => 'Riso, Aglio, Olio, Peperoncino, Vongole, Cozze, Scampi, Gamberi, Calamari, Prezzemolo',
                'price' => 14.90,
                'restaurant_id' => 11,
                'image' => 'https://images.fidhouse.com/fidelitynews/wp-content/uploads/sites/6/2017/11/1511533598_29e26c16cf5ad276642f8cc11d619a992dab41bc-1511461857.jpg?width=1280&height=720&quality=80'
            ],
            [
                'name' => 'Spaghetto al Sugo',
                'ingredients' => 'Spaghetti, Aglio, Olio, Peperoncino, Basilico',
                'price' => 9.00,
                'restaurant_id' => 11,
                'image' => 'https://www.giallozafferano.it/images/221-22163/Spaghetti-al-pomodoro_650x433_wm.jpg'
            ],
            [
                'name' => 'Orata al forno',
                'ingredients' => 'Orata, Rosmarino, Olio, Patate',
                'price' => 20.00,
                'restaurant_id' => 11,
                'image' => 'https://www.cucchiaio.it/content/dam/cucchiaio/it/ricette/2022/03/orata-forno-patate/orata-al-forno-con-patate-finale.jpg'
            ],
            [
                'name' => 'Grigliata mista',
                'ingredients' => 'Calamari, Mazzancolle, Gamberi, Polpo, Scampi',
                'price' => 25.00,
                'restaurant_id' => 11,
                'image' => 'https://grillexperience.it/wp-content/uploads/2023/01/Pesce-alla-Griglia-Post-2.jpg'
            ],
            [
                'name' => 'Calamaro alla griglia',
                'ingredients' => 'Calamari, Olio, Prezzemolo, Zucchine, Salsa yourt, Menta',
                'price' => 15.00,
                'restaurant_id' => 11,
                'image' => 'https://blog.giallozafferano.it/allacciateilgrembiule/wp-content/uploads/2017/07/calamari-alla-griglia2.jpg'
            ],
            [
                'name' => 'Bistecca alla Fiorentina',
                'ingredients' => 'Bistecca, Sale',
                'price' => 45.00,
                'restaurant_id' => 11,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAi6djmWqdW4lUTFwLqs23uKrDtvegb17mWDrmEKtT9g&s'
            ],
            [
                'name' => 'Carbonara',
                'ingredients' => 'Spaghetti, Uovo, Pecorino, Guanciale, Pepe',
                'price' => 11.00,
                'restaurant_id' => 11,
                'image' => 'https://www.informacibo.it/wp-content/uploads/2018/04/carbonara.jpg'
            ],
            [
                'name' => 'Bastoncini di pollo croccanti',
                'ingredients' => 'Pollo, Sale, Uovo, Olio, Prezzemolo',
                'price' => 13.00,
                'restaurant_id' => 11,
                'image' => 'https://blog.giallozafferano.it/inventaricette/wp-content/uploads/2020/08/straccetti-di-pollo-fritti-vid-720x440.jpg'
            ],
            [
                'name' => 'Spaghetti alla Nerano',
                'ingredients' => 'Spaghetti, Zucchine, olio, Basilico, Provolone del monaco, Basilico',
                'price' => 11.50,
                'restaurant_id' => 11,
                'image' => 'https://www.giallozafferano.it/images/ricette/169/16964/foto_hd/hd650x433_wm.jpg'
            ],
            [
                'name' => 'Birra Heineken',
                'ingredients' => null,
                'price' => 3.50,
                'restaurant_id' => 11,
                'image' => 'https://content.dambros.it/uploads/2016/03/30122253/0000041719.jpg'
            ],
            [
                'name' => 'Acqua naturale 50cl',
                'ingredients' => null,
                'price' => 2.50,
                'restaurant_id' => 11,
                'image' => 'https://spaziopizzadelivery.it/cdn/shop/products/Acquanaturale50cl_756f6cbf-8e8f-4bd9-b402-6d65507e8302.jpg?v=1709639482'
            ],
            [
                'name' => 'Acqua frizzante 50cl',
                'ingredients' => null,
                'price' => 2.50,
                'restaurant_id' => 11,
                'image' => 'https://cdn1.marcocusano.cloud/D936542D/products/178-c4ca4238a0b923820dcc509a6f75849b'
            ],
            [
                'name' => 'Vino Pecorino',
                'ingredients' => null,
                'price' => 12.50,
                'restaurant_id' => 11,
                'image' => 'https://stappando.it/wp-content/uploads/2020/12/260821-pecorino-tollo-terre-di-chieti-679.jpg'
            ],
            [
                'name' => 'Birra Heineken',
                'ingredients' => null,
                'price' => 2.50,
                'restaurant_id' => 12,
                'image' => 'https://content.dambros.it/uploads/2016/03/30122253/0000041719.jpg'
            ],
            [
                'name' => 'Acqua naturale 50cl',
                'ingredients' => null,
                'price' => 1.50,
                'restaurant_id' => 12,
                'image' => 'https://spaziopizzadelivery.it/cdn/shop/products/Acquanaturale50cl_756f6cbf-8e8f-4bd9-b402-6d65507e8302.jpg?v=1709639482'
            ],
            [
                'name' => 'Acqua frizzante 50cl',
                'ingredients' => null,
                'price' => 1.50,
                'restaurant_id' => 12,
                'image' => 'https://cdn1.marcocusano.cloud/D936542D/products/178-c4ca4238a0b923820dcc509a6f75849b'
            ],
            [
                'name' => 'Suppli',
                'ingredients' => 'Riso, Mozzarella, Sugo',
                'price' => 1.50,
                'restaurant_id' => 12,
                'image' => 'https://signorgelo.it/wp-content/uploads/2022/06/Suppli-di-riso-rossi-Grandi.jpg'
            ],
            [
                'name' => 'Fiore di zucca',
                'ingredients' => 'Fiore di zucca, Mozzarella, Alice',
                'price' => 2.50,
                'restaurant_id' => 12,
                'image' => 'https://cdn.cook.stbm.it/thumbnails/ricette/144/144462/hd750x421.jpg'
            ],
            [
                'name' => 'Crocche di patate',
                'ingredients' => 'Patate, Uovo, Parmigiano, Mozzarella, Prezzemolo',
                'price' => 2.00,
                'restaurant_id' => 12,
                'image' => 'https://www.moltofood.it/wp-content/uploads/2022/04/Crocche_di_patate_copertina.jpg'
            ],
            [
                'name' => 'Pizza parmigiana',
                'ingredients' => 'Melanzane, Sugo, Mozzarella, Basilico',
                'price' => 11.00,
                'restaurant_id' => 12,
                'image' => 'https://www.volupizzeria.com/wp-content/uploads/2022/01/Normalissima-1080x675.jpg'
            ],
            [
                'name' => 'Napoli',
                'ingredients' => 'Pomodoro, Mozzarella, Acciughe, Olive, Capperi',
                'price' => 10.50,
                'restaurant_id' => 12,
                'image' => 'https://www.donnamoderna.com/content/uploads/2021/08/pizza-napoli-830x625.jpg'
            ],
            [
                'name' => 'Vegetariana',
                'ingredients' => 'Pomodoro, Mozzarella, Verdure Grigliate',
                'price' => 10.00,
                'restaurant_id' => 12,
                'image' => 'https://www.guardini.com/images/guardinispa/ricette/full/pizza_set_2021_full.jpg'
            ],
            [
                'name' => 'Bufalina',
                'ingredients' => 'Pomodoro, Mozzarella di Bufala, Basilico',
                'price' => 12.00,
                'restaurant_id' => 12,
                'image' => 'https://www.tacoloco.it/wp-content/uploads/2018/01/pizza-bufalina.jpg'
            ],
            [
                'name' => 'Tonno e Cipolla',
                'ingredients' => 'Pomodoro, Mozzarella, Tonno, Cipolla',
                'price' => 10.50,
                'restaurant_id' => 12,
                'image' => 'https://media-assets.lacucinaitaliana.it/photos/61fbd8df3697f3ffd0cffbc5/3:2/w_1200,h_800,c_limit/pizza-tonno-cipolle-800.jpg'
            ],
            [
                'name' => 'Calzone',
                'ingredients' => 'Pomodoro, Mozzarella, Prosciutto Cotto, Funghi, Ricotta',
                'price' => 12.00,
                'restaurant_id' => 12,
                'image' => 'https://cdn.ilclubdellericette.it/wp-content/uploads/2019/04/calzone-napoletano-640x480.jpg'
            ],
            [
                'name' => 'Pugliese',
                'ingredients' => 'Pomodoro, Mozzarella, Cipolla, Olive, Acciughe, Origano',
                'price' => 10.50,
                'restaurant_id' => 12,
                'image' => 'https://www.silviocicchi.com/pizzachef/wp-content/uploads/2015/05/pizza_pugliese-ev-672x372.jpg'
            ],
            [
                'name' => 'Boscaiola',
                'ingredients' => 'Pomodoro, Mozzarella, Funghi, Salsiccia, Piselli',
                'price' => 11.00,
                'restaurant_id' => 12,
                'image' => 'https://blog.giallozafferano.it/golosipeccati/wp-content/uploads/2015/11/pizza-boscaiola.jpg'
            ],
            [
                'name' => 'Marinara',
                'ingredients' => 'Pomodoro, Aglio, Origano',
                'price' => 8.50,
                'restaurant_id' => 12,
                'image' => 'https://www.ristorantelespecialita.it/wp-content/uploads/2017/03/Pizza-marinara-ricetta.jpg'
            ],
            [
                'name' => 'Frutti di Mare',
                'ingredients' => 'Pomodoro, Mozzarella, Frutti di Mare, Aglio, Prezzemolo',
                'price' => 13.00,
                'restaurant_id' => 12,
                'image' => 'https://wips.plug.it/cips/buonissimo.org/cms/2012/05/pizza-ai-frutti-di-mare.jpg'
            ],
            [
                'name' => 'Bianca',
                'ingredients' => 'Mozzarella, Gorgonzola, Radicchio, Noci',
                'price' => 11.50,
                'restaurant_id' => 12,
                'image' => 'https://blog.giallozafferano.it/dolcesalatoconlucia/wp-content/uploads/2016/10/14725343_10211426845975745_623964806_o.jpg'
            ],
            [
                'name' => 'Rustica',
                'ingredients' => 'Pomodoro, Mozzarella, Pancetta, Patate, Rosmarino',
                'price' => 10.50,
                'restaurant_id' => 12,
                'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/12/89/2a/a5/pizza-con-patate-porcini.jpg'
            ],
            [
                'name' => 'Acqua naturale 50cl',
                'ingredients' => null,
                'price' => 2.50,
                'restaurant_id' => 13,
                'image' => 'https://spaziopizzadelivery.it/cdn/shop/products/Acquanaturale50cl_756f6cbf-8e8f-4bd9-b402-6d65507e8302.jpg?v=1709639482'
            ],
            [
                'name' => 'Acqua frizzante 50cl',
                'ingredients' => null,
                'price' => 2.50,
                'restaurant_id' => 13,
                'image' => 'https://cdn1.marcocusano.cloud/D936542D/products/178-c4ca4238a0b923820dcc509a6f75849b'
            ],
            [
                'name' => 'Vino Pecorino',
                'ingredients' => null,
                'price' => 12.50,
                'restaurant_id' => 13,
                'image' => 'https://stappando.it/wp-content/uploads/2020/12/260821-pecorino-tollo-terre-di-chieti-679.jpg'
            ],
            [
                'name' => 'Poke medio',
                'ingredients' => 'Riso, Salmone, Sesamo, Soia, Avocado, Teryaki, Edamame',
                'price' => 11.90,
                'restaurant_id' => 13,
                'image' => 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,q_auto,f_auto,h_450,w_600,dpr_1.0/v1/it/dishes/272077/975d3e886d148d9f1259add158745348'
            ],
            [
                'name' => 'Poke grande',
                'ingredients' => 'Riso, Salmone, Sesamo, Soia, Avocado, Teryaki, Edamame',
                'price' => 11.90,
                'restaurant_id' => 13,
                'image' => 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,q_auto,f_auto,h_450,w_600,dpr_1.0/v1/it/dishes/272077/975d3e886d148d9f1259add158745348'
            ],
            [
                'name' => 'Burrito Salmone',
                'ingredients' => 'Riso, Salmone, Lattuga, Pomodoro, Philadelphia, Piadina',
                'price' => 9.00,
                'restaurant_id' => 13,
                'image' => 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,q_auto,f_auto,h_450,w_600,dpr_1.0/v1/it/dishes/272077/fbf00a74f5843ef3a9ab3f5fddd36f55'
            ],
            [
                'name' => 'Sandwich Salmone',
                'ingredients' => 'Pane Americano, Philadelphia, Lattuga Romana, Salmone, Avocado',
                'price' => 7.90,
                'restaurant_id' => 13,
                'image' => 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,q_auto,f_auto,h_450,w_600,dpr_1.0/v1/it/dishes/272077/8f91e8535e9432c2b76c74fc7c8410ee'
            ],
            [
                'name' => 'Wakame Bowl',
                'ingredients' => 'Alghe verdi, Sesamo',
                'price' => 4.50,
                'restaurant_id' => 13,
                'image' => 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,q_auto,f_auto,h_450,w_600,dpr_1.0/v1/it/dishes/brg_968/f00de048707df6393a61a40e6f89828a'
            ],
            [
                'name' => 'Acqua naturale 50cl',
                'ingredients' => null,
                'price' => 2.50,
                'restaurant_id' => 14,
                'image' => 'https://spaziopizzadelivery.it/cdn/shop/products/Acquanaturale50cl_756f6cbf-8e8f-4bd9-b402-6d65507e8302.jpg?v=1709639482'
            ],
            [
                'name' => 'Acqua frizzante 50cl',
                'ingredients' => null,
                'price' => 2.50,
                'restaurant_id' => 14,
                'image' => 'https://cdn1.marcocusano.cloud/D936542D/products/178-c4ca4238a0b923820dcc509a6f75849b'
            ],
            [
                'name' => 'Vino Pecorino',
                'ingredients' => null,
                'price' => 12.50,
                'restaurant_id' => 14,
                'image' => 'https://stappando.it/wp-content/uploads/2020/12/260821-pecorino-tollo-terre-di-chieti-679.jpg'
            ],
            [
                'name' => 'Cheeseburger',
                'ingredients' => 'hamburger di manzo 100% italiano da 120g con doppio cheddar, insalata iceberg, cetriolo, cipolla fresca, pomodoro, salsa barbecue e thousand island',
                'price' => 10.50,
                'restaurant_id' => 14,
                'image' => 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,q_auto,f_auto,h_450,w_600,dpr_1.0/v1/it/dishes/brg_american-original-birger/cheeseburger'
            ],
            [
                'name' => 'Chicken Burger',
                'ingredients' => 'cotoletta di pollo con insalata, pomodoro, ketchup e maionese',
                'price' => 8.00,
                'restaurant_id' => 14,
                'image' => 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,q_auto,f_auto,h_450,w_600,dpr_1.0/v1/it/dishes/brg_american-original-birger/chicken-burger'
            ],
            [
                'name' => 'Egg Bacon Cheeseburger',
                'ingredients' => 'hamburger di manzo 100% italiano da 120g con doppio cheddar, bacon croccante, uovo alla piastra, insalata iceberg, cetriolo, cipolla fresca, pomodoro, salsa barbecue, salsa bacon e thousand island',
                'price' => 13.50,
                'restaurant_id' => 14,
                'image' => 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,q_auto,f_auto,h_450,w_600,dpr_1.0/v1/it/dishes/brg_american-original-birger/egg-bacon-cheeseburger'
            ],
            [
                'name' => 'Chorizo Hot Dog',
                'ingredients' => 'chorizo, jalapeno a fette, cipolla croccante, cetriolini, honey mustard e panna acida',
                'price' => 14.50,
                'restaurant_id' => 14,
                'image' => 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,q_auto,f_auto,h_450,w_600,dpr_1.0/v1/it/dishes/brg_american-original-birger/chorizo-hot-dog'
            ],
            [
                'name' => 'Spicy Hot Dog',
                'ingredients' => 'wurstel fritto, insalata, chili e pico de gallo',
                'price' => 12.50,
                'restaurant_id' => 14,
                'image' => 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,q_auto,f_auto,h_450,w_600,dpr_1.0/v1/it/dishes/brg_american-original-birger/spicy-hot-dog'
            ],
            [
                'name' => 'Insalata Primavera',
                'ingredients' => 'pomodoro, olive nere, insalata iceberg, cetrioli, mais, mozzarella, crostini di pane e honey mustard',
                'price' => 9.00,
                'restaurant_id' => 14,
                'image' => 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,q_auto,f_auto,h_450,w_600,dpr_1.0/v1/it/dishes/brg_american-original-birger/insalata-primavera'
            ],
            [
                'name' => 'Muffin Red Velvet',
                'ingredients' => null,
                'price' => 6.00,
                'restaurant_id' => 14,
                'image' => 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,q_auto,f_auto,h_450,w_600,dpr_1.0/v1/it/dishes/brg_american-original-birger/muffin-red-velvet'
            ],
            [
                'name' => 'Acqua naturale 50cl',
                'ingredients' => null,
                'price' => 2.50,
                'restaurant_id' => 15,
                'image' => 'https://spaziopizzadelivery.it/cdn/shop/products/Acquanaturale50cl_756f6cbf-8e8f-4bd9-b402-6d65507e8302.jpg?v=1709639482'
            ],
            [
                'name' => 'Acqua frizzante 50cl',
                'ingredients' => null,
                'price' => 2.50,
                'restaurant_id' => 15,
                'image' => 'https://cdn1.marcocusano.cloud/D936542D/products/178-c4ca4238a0b923820dcc509a6f75849b'
            ],
            [
                'name' => 'Vino Pecorino',
                'ingredients' => null,
                'price' => 12.50,
                'restaurant_id' => 15,
                'image' => 'https://stappando.it/wp-content/uploads/2020/12/260821-pecorino-tollo-terre-di-chieti-679.jpg'
            ],
            [
                'name' => 'Tonnarelli con Fiori di Zucca e Calamari',
                'ingredients' => 'Tonnarelli con Fiori di Zucca e Calamari',
                'price' => 10.00,
                'restaurant_id' => 15,
                'image' => 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,q_auto,f_auto,h_450,w_600,dpr_1.0/v1/it/dishes/211718/tonnarelli-con-fiori-di-zucca-e-calamari'
            ],
            [
                'name' => 'Mezze Maniche alla Siciliana',
                'ingredients' => 'Mezze Maniche alla Siciliana con Pesce Spada, Melanzane, Pomodoro Pachino e Ricotta Salata',
                'price' => 10.00,
                'restaurant_id' => 15,
                'image' => 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,q_auto,f_auto,h_450,w_600,dpr_1.0/v1/it/dishes/211718/mezze-maniche-alla-siciliana-con-pesce-spada-melan'
            ],
            [
                'name' => 'Mezze Maniche con Fiori di Zucca',
                'ingredients' => 'Mezze Maniche con Fiori di Zucca, Guanciale, Pomodoro Pachino e Ricotta Salata',
                'price' => 8.00,
                'restaurant_id' => 15,
                'image' => 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,q_auto,f_auto,h_450,w_600,dpr_1.0/v1/it/dishes/211718/mezze-maniche-con-fiori-di-zucca-guanciale-pomodor'
            ],
            [
                'name' => 'Tagliata ai Funghi Porcini',
                'ingredients' => 'Tagliata, Funghi Porcini',
                'price' => 18.00,
                'restaurant_id' => 15,
                'image' => 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,q_auto,f_auto,h_450,w_600,dpr_1.0/v1/it/dishes/211718/tagliata-ai-funghi-porcini'
            ],
            [
                'name' => 'Orata con Verdure',
                'ingredients' => 'Orata, Zucchine, Patate',
                'price' => 16.00,
                'restaurant_id' => 15,
                'image' => 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,q_auto,f_auto,h_450,w_600,dpr_1.0/v1/it/dishes/211718/spigola-o-orata-con-verdure'
            ],
          
          
          
        ];

        foreach($dishes as $dish)
        {
            $new_dish = new Dish();
            $new_dish->fill($dish);
            $new_dish->save();
        }
    }
}
