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
                'restaurant_id' => 1
            ],
            [
                'name' => 'Tartare Salmone',
                'ingredients' => 'Salmone, Avocado, Cipolla Rossa',
                'price' => 9.00,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Gyoza',
                'ingredients' => 'Carne di maiale, Verza',
                'price' => 5.50,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Yakitori Pollo',
                'ingredients' => 'Pollo, Salsa Teriyaki',
                'price' => 5.00,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Sushi Salmone',
                'ingredients' => 'Riso, Salmone',
                'price' => 3.50,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Sashimi Tonno',
                'ingredients' => 'Tonno',
                'price' => 4.50,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Tempura Verdure',
                'ingredients' => 'Verdure Miste, Farina, Uova',
                'price' => 5.00,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Uramaki California',
                'ingredients' => 'Riso, Avocado, Surimi, Maionese',
                'price' => 6.50,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Tartare Tonno',
                'ingredients' => 'Tonno, Avocado, Cetriolo',
                'price' => 8.00,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Nigiri Gamberetti',
                'ingredients' => 'Riso, Gamberetti',
                'price' => 4.00,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Sushi Avocado',
                'ingredients' => 'Riso, Avocado',
                'price' => 3.00,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Sashimi Branzino',
                'ingredients' => 'Branzino',
                'price' => 5.00,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Gunkan Ikura',
                'ingredients' => 'Riso, Uova di Salmone',
                'price' => 7.50,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Yakitori Manzo',
                'ingredients' => 'Manzo, Salsa Teriyaki',
                'price' => 6.00,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Acqua Naturale 1 l',
                'ingredients' => null,
                'price' => 1.50,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Acqua Lete 1 l',
                'ingredients' => null,
                'price' => 1.50,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Saké',
                'ingredients' => null,
                'price' => 8.00,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Gelato al Tè Verde',
                'ingredients' => null,
                'price' => 3.50,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Mochi al Sesamo',
                'ingredients' => null,
                'price' => 3.00,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Torta Giapponese al Tè Verde',
                'ingredients' => null,
                'price' => 4.50,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Bistecca Fiorentina',
                'ingredients' => 'Carne di Manzo',
                'price' => 20.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Costolette di Agnello alla Griglia',
                'ingredients' => 'Agnello',
                'price' => 18.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Filetto di Maiale Marinato',
                'ingredients' => 'Maiale, Marinatura',
                'price' => 15.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Salsiccia alla Griglia',
                'ingredients' => 'Carne di Maiale, Spezie',
                'price' => 12.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Pollo Arrosto',
                'ingredients' => 'Pollo, Erbe Aromatiche',
                'price' => 14.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Costine di Maiale Affumicate',
                'ingredients' => 'Costine di Maiale, Salsa Barbecue',
                'price' => 16.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Braciola di Manzo',
                'ingredients' => 'Carne di Manzo, Formaggio, Prosciutto Cotto',
                'price' => 17.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Anatra all\'Arancia',
                'ingredients' => 'Anatra, Salsa all\'Arancia',
                'price' => 19.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Filetto di Pesce Spada alla Griglia',
                'ingredients' => 'Pesce Spada, Limone, Olio',
                'price' => 22.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Verdure Grigliate',
                'ingredients' => 'Verdure Miste, Olio, Sale',
                'price' => 10.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Tagliata di Manzo',
                'ingredients' => 'Carne di Manzo, Rucola, Grana',
                'price' => 18.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Costine di Agnello al Forno',
                'ingredients' => 'Agnello, Rosmarino, Aglio',
                'price' => 16.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Cotoletta alla Milanese',
                'ingredients' => 'Carne di Vitello, Panatura',
                'price' => 15.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Salmone alla Griglia',
                'ingredients' => 'Filetto di Salmone, Limone, Erbe',
                'price' => 20.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Spiedini di Gamberi e Calamari',
                'ingredients' => 'Gamberi, Calamari, Limone',
                'price' => 22.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Fiorentina di Maiale',
                'ingredients' => 'Costolette di Maiale, Salsa Barbecue',
                'price' => 14.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Petto di Pollo alla Griglia',
                'ingredients' => 'Petto di Pollo, Olio d\'Oliva, Sale',
                'price' => 12.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Bruschette Miste',
                'ingredients' => 'Pane, Pomodori, Basilico, Olio',
                'price' => 8.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Insalata di Mare',
                'ingredients' => 'Frutti di Mare, Pomodori, Olive',
                'price' => 16.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Patate Arrosto',
                'ingredients' => 'Patate, Rosmarino, Aglio',
                'price' => 6.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Acqua Naturale 1 l',
                'ingredients' => null,
                'price' => 1.50,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Acqua Lete 1 l',
                'ingredients' => null,
                'price' => 1.50,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Caffè',
                'ingredients' => null,
                'price' => 1.50,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Tiramisù',
                'ingredients' => null,
                'price' => 4.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Panna Cotta',
                'ingredients' => null,
                'price' => 3.50,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Birra Artigianale',
                'ingredients' => null,
                'price' => 5.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Coca-Cola lattina',
                'ingredients' => null,
                'price' => 2.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Coca-Cola Zero lattina ',
                'ingredients' => null,
                'price' => 2.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Margherita',
                'ingredients' => 'Pomodoro, Mozzarella, Basilico',
                'price' => 8.00,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Quattro Stagioni',
                'ingredients' => 'Pomodoro, Mozzarella, Funghi, Prosciutto Cotto, Carciofi, Olive',
                'price' => 11.00,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Capricciosa',
                'ingredients' => 'Pomodoro, Mozzarella, Prosciutto Cotto, Funghi, Carciofi, Olive',
                'price' => 10.50,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Prosciutto e Funghi',
                'ingredients' => 'Pomodoro, Mozzarella, Prosciutto Cotto, Funghi',
                'price' => 9.50,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Diavola',
                'ingredients' => 'Pomodoro, Mozzarella, Salame Piccante',
                'price' => 10.00,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Quattro Formaggi',
                'ingredients' => 'Mozzarella, Gorgonzola, Fontina, Parmigiano',
                'price' => 11.50,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Napoli',
                'ingredients' => 'Pomodoro, Mozzarella, Acciughe, Olive, Capperi',
                'price' => 10.50,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Vegetariana',
                'ingredients' => 'Pomodoro, Mozzarella, Verdure Grigliate',
                'price' => 10.00,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Bufalina',
                'ingredients' => 'Pomodoro, Mozzarella di Bufala, Basilico',
                'price' => 12.00,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Tonno e Cipolla',
                'ingredients' => 'Pomodoro, Mozzarella, Tonno, Cipolla',
                'price' => 10.50,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Calzone',
                'ingredients' => 'Pomodoro, Mozzarella, Prosciutto Cotto, Funghi, Ricotta',
                'price' => 12.00,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Pugliese',
                'ingredients' => 'Pomodoro, Mozzarella, Cipolla, Olive, Acciughe, Origano',
                'price' => 10.50,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Boscaiola',
                'ingredients' => 'Pomodoro, Mozzarella, Funghi, Salsiccia, Piselli',
                'price' => 11.00,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Marinara',
                'ingredients' => 'Pomodoro, Aglio, Origano',
                'price' => 8.50,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Frutti di Mare',
                'ingredients' => 'Pomodoro, Mozzarella, Frutti di Mare, Aglio, Prezzemolo',
                'price' => 13.00,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Bianca',
                'ingredients' => 'Mozzarella, Gorgonzola, Radicchio, Noci',
                'price' => 11.50,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Rustica',
                'ingredients' => 'Pomodoro, Mozzarella, Pancetta, Patate, Rosmarino',
                'price' => 10.50,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Hawaii',
                'ingredients' => 'Pomodoro, Mozzarella, Prosciutto Cotto, Ananas',
                'price' => 10.50,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Bufala e Rucola',
                'ingredients' => 'Pomodoro, Mozzarella di Bufala, Rucola, Pomodorini',
                'price' => 12.50,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Salsiccia e Friarielli',
                'ingredients' => 'Pomodoro, Mozzarella, Salsiccia, Friarielli, Peperoncino',
                'price' => 11.00,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Acqua Minerale 1 l',
                'ingredients' => null,
                'price' => 1.20,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Acqua Lete 1 l',
                'ingredients' => null,
                'price' => 1.30,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Patatine fritte',
                'ingredients' => null,
                'price' => 2.50,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Coca-Cola in lattina 33cl',
                'ingredients' => null,
                'price' => 2.00,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Birra Heineken',
                'ingredients' => null,
                'price' => 3.50,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Coca-Cola Zero in lattina 33cl',
                'ingredients' => null,
                'price' => 2.00,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Pollo Kung Pao',
                'ingredients' => 'Pollo, Arachidi, Verdure, Peperoncini, Salsa di Soia',
                'price' => 12.99,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Maiale Agrodolce',
                'ingredients' => 'Maiale, Ananas, Peperoni, Cipolla, Salsa Agrodolce',
                'price' => 11.99,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Manzo con Broccoli',
                'ingredients' => 'Manzo, Broccoli, Aglio, Salsa di Soia',
                'price' => 13.99,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Involtini Primavera',
                'ingredients' => 'Cavolo Cappuccio, Carote, Funghi, Germogli di Soia, Fogli di Riso',
                'price' => 6.99,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Riso Fritto con Gamberetti',
                'ingredients' => 'Gamberetti, Riso, Uova, Piselli, Carote, Salsa di Soia',
                'price' => 10.99,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Tofu alla Szechuan',
                'ingredients' => 'Tofu, Carne di Maiale Macinata, Pasta di Peperoncino, Fagioli Neri Fermentati, Salsa di Soia',
                'price' => 10.99,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Ravioli al Vapore',
                'ingredients' => 'Maiale, Gamberetti, Erba Cipollina, Zenzero, Fogli di Riso',
                'price' => 9.99,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Pollo del Generale Tso',
                'ingredients' => 'Pollo, Amido di Mais, Salsa di Soia, Aglio, Peperoncini, Zucchero, Aceto',
                'price' => 12.99,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Zuppa Acida e Piccante',
                'ingredients' => 'Brodo di Pollo, Tofu, Funghi, Germogli di Bambù, Uova, Aceto, Salsa di Soia',
                'price' => 7.99,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Chow Mein',
                'ingredients' => 'Tagliatelle di Uovo, Pollo, Gamberetti, Bok Choy, Carote, Salsa di Soia',
                'price' => 11.99,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Anatra alla Pechinese',
                'ingredients' => 'Anatra, Pancake, Cipolla, Cetriolo, Salsa di Prugne',
                'price' => 14.99,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Spaghetti di Riso con Verdure Saltate',
                'ingredients' => 'Spaghetti di Riso, Peperoni, Carote, Cipolla, Zucchine, Salsa di Soia',
                'price' => 9.99,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Gamberi in Salsa di Ostriche',
                'ingredients' => 'Gamberi, Verdure Miste, Salsa di Ostriche, Aglio',
                'price' => 13.99,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Rolls di Uova',
                'ingredients' => 'Uova, Carote, Piselli, Cipolla, Prosciutto Cotto',
                'price' => 8.99,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Riso Fritto Yangzhou',
                'ingredients' => 'Riso, Uova, Gamberetti, Prosciutto Cotto, Carote, Piselli, Cipolla',
                'price' => 11.99,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Insalata di Alghe',
                'ingredients' => 'Alghe Miste, Sesamo, Olio di Sesamo, Aceto di Riso, Zucchero',
                'price' => 6.99,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Pancake di Gamberi',
                'ingredients' => 'Gamberi, Farina, Uova, Cipolla Verde, Zenzero',
                'price' => 10.99,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Tofu Saltato con Verdure',
                'ingredients' => 'Tofu, Broccoli, Funghi, Carote, Salsa di Soia',
                'price' => 9.99,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Tempura di Verdure',
                'ingredients' => 'Verdure Miste, Farina, Uova, Olio per Friggere, Salsa di Soia',
                'price' => 8.99,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Zuppa di Wonton',
                'ingredients' => 'Wonton, Brodo di Pollo, Carne di Maiale, Cipolla, Sedano',
                'price' => 7.99,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Birra Heineken',
                'ingredients' => null,
                'price' => 3.50,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Birra Asahi 50cl',
                'ingredients' => null,
                'price' => 4.50,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Spaghetti alla Carbonara',
                'ingredients' => 'Spaghetti, Uova, Guanciale, Pecorino Romano, Pepe Nero',
                'price' => 10.99,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Penne all\'Arrabbiata',
                'ingredients' => 'Penne, Pomodoro, Peperoncino, Aglio, Olio Extra Vergine di Oliva',
                'price' => 9.99,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Linguine al Pesto Genovese',
                'ingredients' => 'Linguine, Basilico, Pinoli, Parmigiano Reggiano, Aglio, Olio Extra Vergine di Oliva',
                'price' => 11.99,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Rigatoni alla Amatriciana',
                'ingredients' => 'Rigatoni, Pancetta, Pomodoro, Cipolla, Pecorino Romano',
                'price' => 10.99,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Fettuccine al Ragù Bolognese',
                'ingredients' => 'Fettuccine, Carne Macinata, Pomodoro, Carota, Sedano, Cipolla, Vino Rosso',
                'price' => 12.99,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Paccheri alla Norma',
                'ingredients' => 'Paccheri, Melanzane, Pomodoro, Ricotta Salata, Basilico',
                'price' => 11.99,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Tagliatelle ai Funghi Porcini',
                'ingredients' => 'Tagliatelle, Funghi Porcini, Panna, Parmigiano Reggiano',
                'price' => 13.99,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Orecchiette alle Cime di Rapa',
                'ingredients' => 'Orecchiette, Cime di Rapa, Aglio, Olio Extra Vergine di Oliva, Peperoncino',
                'price' => 12.99,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Lasagne alla Bolognese',
                'ingredients' => 'Lasagne, Carne Macinata, Besciamella, Parmigiano Reggiano, Pomodoro',
                'price' => 14.99,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Ravioli al Burro e Salvia',
                'ingredients' => 'Ravioli, Burro, Salvia, Parmigiano Reggiano',
                'price' => 13.99,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Birra Heineken',
                'ingredients' => null,
                'price' => 3.50,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Acqua Minerale 1 l',
                'ingredients' => null,
                'price' => 1.50,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Acqua Frizzante 1 l',
                'ingredients' => null,
                'price' => 1.50,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Acqua Naturale 50 cl',
                'ingredients' => null,
                'price' => 0.80,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Kebab Classico',
                'ingredients' => 'Carne di Maiale/Pollo, Pane Pita, Insalata, Pomodoro, Cipolla, Salsa allo Yogurt',
                'price' => 7.99,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Falafel Wrap',
                'ingredients' => 'Falafel, Pane Pita, Insalata, Pomodoro, Cipolla, Hummus',
                'price' => 8.99,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Shawarma di Pollo',
                'ingredients' => 'Carne di Pollo, Pane Pita, Insalata, Pomodoro, Cipolla, Salsa Tahini',
                'price' => 9.99,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Kebab di Agnello',
                'ingredients' => 'Carne di Agnello, Pane Pita, Insalata, Pomodoro, Cipolla, Salsa allo Yogurt',
                'price' => 10.99,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Durum Kebab',
                'ingredients' => 'Carne di Manzo/Pollo, Tortilla, Insalata, Pomodoro, Cipolla, Salsa Piccante',
                'price' => 8.99,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Kebab Vegetariano',
                'ingredients' => 'Seitan, Pane Pita, Insalata, Pomodoro, Cipolla, Salsa allo Yogurt',
                'price' => 9.99,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Adana Kebab',
                'ingredients' => 'Carne di Agnello/Manzo, Pane Pita, Insalata, Pomodoro, Cipolla, Peperoncino',
                'price' => 11.99,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Kebab con Patatine',
                'ingredients' => 'Carne di Maiale/Pollo, Pane Pita, Insalata, Pomodoro, Cipolla, Patatine Fritte',
                'price' => 10.99,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Doner Kebab',
                'ingredients' => 'Carne di Manzo/Pollo, Pane Pita, Insalata, Pomodoro, Cipolla, Salsa Piccante',
                'price' => 9.99,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Kofte Kebab',
                'ingredients' => 'Polpette di Carne di Manzo/Pollo, Pane Pita, Insalata, Pomodoro, Cipolla, Salsa allo Yogurt',
                'price' => 10.99,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Birra Heineken',
                'ingredients' => null,
                'price' => 3.50,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Acqua naturale 50cl',
                'ingredients' => null,
                'price' => 1.00,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Acqua frizzante 50cl',
                'ingredients' => null,
                'price' => 1.00,
                'restaurant_id' => 3
            ],
        ];

        foreach ($dishes as $dish) {
            $new_dish = new Dish();
            $new_dish->fill($dish);
            $new_dish->save();
        }
    }
}
