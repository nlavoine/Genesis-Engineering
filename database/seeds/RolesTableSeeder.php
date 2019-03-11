<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'label' => 'sup_admin',
        ]);

        DB::table('roles')->insert([
            'label' => 'admin',
        ]);

        DB::table('roles')->insert([
            'label' => 'user',
        ]);
    }
}
