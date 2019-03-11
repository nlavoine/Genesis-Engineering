<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
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
        ]);
    }
}
