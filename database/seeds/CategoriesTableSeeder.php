<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Main categories
         */

        DB::table('categories')->insert([
            'name' => 'Ordinateurs',
            'parent_id' => null,
        ]);

        DB::table('categories')->insert([
            'name' => 'Périphériques',
            'parent_id' => null,
        ]);

        DB::table('categories')->insert([
            'name' => 'Fauteuils',
            'parent_id' => null,
        ]);

        DB::table('categories')->insert([
            'name' => 'Accessoires',
            'parent_id' => null,
        ]);


        /**
         * Level 1 sub-categories
         */

        DB::table('categories')->insert([
            'name' => 'Laptop',
            'parent_id' => 1,
        ]);

        DB::table('categories')->insert([
            'name' => 'PC',
            'parent_id' => 1,
        ]);


    }
}
