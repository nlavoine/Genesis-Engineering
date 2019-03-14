<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        $limit = 33;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('products')->insert([ //,

                'name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'details_1' => $faker->paragraph($nbSentences = 10, $variableNbSentences = true),
                'details_2' => $faker->paragraph($nbSentences = 10, $variableNbSentences = true),
                'details_3' => $faker->paragraph($nbSentences = 10, $variableNbSentences = true),
                'price' => $faker->randomFloat(2,$min = 0, $max = 3000),
                'stock' => $faker->randomDigitNotNull,
                'category_id' => $faker->numberBetween(1,4),
            ]);
        }
        /*DB::table('products')->insert([
            'name' => 'Razer Blade Stealth 13',
            'details_1' => 'Déplacez-vous Avec Puissance<br>
                        L\'ordinateur Razer Blade Stealth 13” est équipé d\'une carte graphique 25 W NVIDIA<sup>®</sup> 
                        GeForce<sup>®</sup> MX150 4 Go plus puissante pour jouer et créer du contenu. 
                        Grâce à son écran de qualité exceptionnelle et son clavier Razer Chroma<sup>™</sup>, 
                        il combine mobilité et style à la puissance idéale pour le travail et le jeu.',
            'price' => 1499.99,
            'stock' => 50,
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Razer Blade 14',
            'details_1' => 'Puissant. Portable. Parfait.<br>
                        L\'incroyable finesse du Razer Blade 14" est l\'ultime compagnon de voyage du joueur. 
                        Vivez une immersion de gameplay plus rapide et fluide grâce à la carte graphique NVIDIA<sup>®</sup> 
                        GeForce<sup>®</sup> GTX 1060 VR Ready et profitez de performances inégalés grâce au nouveau 
                        processeur quadricœur Intel<sup>®</sup> Core<sup>™</sup>i7 de 7e génération',
            'price' => 2349.99,
            'stock' => 50,
            'category_id' => 1,

        ]);

        DB::table('products')->insert([
            'name' => 'Razer Blade 15 (2018)',
            'details_1' => 'Ultra Rapide. Ultra Petit. Ultra Puissant.<br>
                        Le Razer Blade 15 est disponible dans deux configurations différentes. 
                        Le modèle avancé mis à jour intègre désormais la dernière carte graphique NVIDIA<sup>®</sup> 
                        GeForce RTX<sup>™</sup> et un écran Full HD de 144 Hz pour une expérience de jeu ultime. 
                        Le modèle de base offre des jeux incroyables dont vous pouvez profiter pendant votre déplacement, 
                        pilotés par NVIDIA GeForce GTX 1060 ainsi qu\'un double espace de stockage.',
            'price' => 2649.99,
            'stock' => 50,
            'category_id' => 1,

        ]);

        DB::table('products')->insert([
            'name' => 'Razer Blade Pro 17',
            'details_1' => 'La puissance d\'un PC dans un portable<br>
                        La nouvelle référence des ordinateurs portables aussi puissants que ceux de bureau, 
                        le Razer Blade Pro 17" est remarquemablement fin et possede un puissant processeur quadricoeur 
                        Intel<sub>®</sub> Core<sup>™</sup> i7 de 7e génération, une carte graphique NVIDIA<sup>®</sup> 
                        GeForce<sup>®</sup> GTX Serie 10 et d\'un espace de stockage hybride.',
            'price' => 4499.99,
            'stock' => 50,
            'category_id' => 1,

        ]);*/

    }
}
