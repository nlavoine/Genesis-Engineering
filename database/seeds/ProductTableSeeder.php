<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Z-Produit 1',
            'details' => 'La puissance d\'un PC dans un portable<br>
                        La nouvelle référence des ordinateurs portables aussi puissants que ceux de bureau, le Razer
                        Blade
                        Pro 17" est remarquemablement fin et possede un puissant processeur quadricoeur
                        Intel<sup>®</sup>
                        Core<sup>™</sup> i7 de 7e génération, une carte graphique NVIDIA<sup>®</sup> GeForce<sup>®</sup>
                        GTX
                        Serie 10 et d\'un espace de stockage hybride.',
            'price' => 10,
            'stock' => 100,
            'imgPath' => '/assets/images/razer.jpg',
            'category_id' => 0
        ]);

        DB::table('products')->insert([
            'name' => 'G-Produit 2',
            'details' => 'La puissance d\'un PC dans un portable<br>
                        La nouvelle référence des ordinateurs portables aussi puissants que ceux de bureau, le Razer
                        Blade
                        Pro 17" est remarquemablement fin et possede un puissant processeur quadricoeur
                        Intel<sup>®</sup>
                        Core<sup>™</sup> i7 de 7e génération, une carte graphique NVIDIA<sup>®</sup> GeForce<sup>®</sup>
                        GTX
                        Serie 10 et d\'un espace de stockage hybride.',
            'price' => 20,
            'stock' => 100,
            'imgPath' => '/assets/images/razer.jpg',
            'category_id' => 0
        ]);

        DB::table('products')->insert([
            'name' => 'A-Produit 3',
            'details' => 'La puissance d\'un PC dans un portable<br>
                        La nouvelle référence des ordinateurs portables aussi puissants que ceux de bureau, le Razer
                        Blade
                        Pro 17" est remarquemablement fin et possede un puissant processeur quadricoeur
                        Intel<sup>®</sup>
                        Core<sup>™</sup> i7 de 7e génération, une carte graphique NVIDIA<sup>®</sup> GeForce<sup>®</sup>
                        GTX
                        Serie 10 et d\'un espace de stockage hybride.',
            'price' => 30,
            'stock' => 100,
            'imgPath' => '/assets/images/razer.jpg',
            'category_id' => 0
        ]);


    }
}
