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
            'name' => 'Thermaltake',
            'details_1' => 'La puissance d\'un PC<br>
                        La nouvelle référence des ordinateurs portables aussi puissants que ceux de bureau, le Razer
                        Blade
                        Pro 17" est remarquemablement fin et possede un puissant processeur quadricoeur
                        Intel<sup>®</sup>
                        Core<sup>™</sup> i7 de 7e génération, une carte graphique NVIDIA<sup>®</sup> GeForce<sup>®</sup>
                        GTX
                        Serie 10 et d\'un espace de stockage hybride.',
            'details_2' =>'   ',
            'details_3' =>'   ',
            'price' => 649.99,
            'stock' => 100,

        ]);

        DB::table('products')->insert([
            'name' => 'Deepcool',
            'details_1' => 'La puissance d\'un PC <br>
                        La nouvelle référence des ordinateurs portables aussi puissants que ceux de bureau, le Razer
                        Blade
                        Pro 17" est remarquemablement fin et possede un puissant processeur quadricoeur
                        Intel<sup>®</sup>
                        Core<sup>™</sup> i7 de 7e génération, une carte graphique NVIDIA<sup>®</sup> GeForce<sup>®</sup>
                        GTX
                        Serie 10 et d\'un espace de stockage hybride.',
            'details_2' =>'   ',
            'details_3' =>'   ',
            'price' => 849.99,
            'stock' => 100,

        ]);

        DB::table('products')->insert([
            'name' => 'Antec',
            'details_1' => 'La puissance d\'un PC <br>
                        La nouvelle référence des ordinateurs portables aussi puissants que ceux de bureau, le Razer
                        Blade
                        Pro 17" est remarquemablement fin et possede un puissant processeur quadricoeur
                        Intel<sup>®</sup>
                        Core<sup>™</sup> i7 de 7e génération, une carte graphique NVIDIA<sup>®</sup> GeForce<sup>®</sup>
                        GTX
                        Serie 10 et d\'un espace de stockage hybride.',
            'details_2' =>'   ',
            'details_3' =>'   ',
            'price' => 799.99,
            'stock' => 100,

        ]);


    }
}
