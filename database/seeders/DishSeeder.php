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
                'image' => 'https://b2498294.smushcdn.com/2498294/wine-dharma/uploads/2020/10/1914-cucina-cinese-manzo-con-salsa-di-soia-broccoli-e-aglio-e-sesamo.jpg?lossy=2&strip=1&webp=1'
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
        ];

        foreach($dishes as $dish)
        {
            $new_dish = new Dish();
            $new_dish->fill($dish);
            $new_dish->save();
        }
    }
}
