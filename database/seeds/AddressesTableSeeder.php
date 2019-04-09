<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'label' => 'domicile',
            'first_name' => 'Michel',
            'last_name' => 'Nguyen',
            'address_1' => '33 Grande Rue',
            'city' => 'Valence',
            'state' => 'Rhone-Alpes',
            'country' => 'France',
            'zip_code' => 26000,
            'user_id' => 1,
        ]);
    }
}
