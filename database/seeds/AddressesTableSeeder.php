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
            'label'=>'domicile',
        'first_name'=>'Michel',
            'last_name'=>'Nguyen',
            'address'=>'Grande Rue',
        'complement'=>'33',
            'city'=>'Valence',
            'state'=>'Rhone-Alpes',
            'country'=>'france',
            'zip_code'=>26000,
            'user_id'=>1,



        ]);
    }
}
