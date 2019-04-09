<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $faker = Faker\Factory::create();

        $limit = 33;
        $first_id = 261;

        for ($i = $first_id; $i < $first_id+$limit; $i++) {
            DB::table('images')->insert([ //,
                'url' => $faker->imageUrl($width = 600, $height = 400, 'technics'),
                'order' => 1,
                'product_id' => $i,
            ]);
            DB::table('images')->insert([ //,
                'url' => $faker->imageUrl($width = 1200, $height = 400, 'technics'),
                'order' => 2,
                'product_id' => $i,
            ]);
            DB::table('images')->insert([ //,
                'url' => $faker->imageUrl($width = 1200, $height = 400, 'technics'),
                'order' => 3,
                'product_id' => $i,
            ]);
        }
        /*DB::table('images')->insert([
            'url' => '/assets/images/razer_stealth_13.png',
            'product_id' => 1,
        ]);

        DB::table('images')->insert([
            'url' => '/assets/images/razer_14.jpg',
            'product_id' => 2,
        ]);

        DB::table('images')->insert([
            'url' => '/assets/images/razer_15.jpg',
            'product_id' => 3,
        ]);

        DB::table('images')->insert([
            'url' => '/assets/images/razer_pro_17.jpg',
            'product_id' => 4,
        ]);*/
    }
}
