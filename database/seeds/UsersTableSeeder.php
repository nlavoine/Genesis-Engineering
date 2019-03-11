<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Myn',
            'last_name' => 'Won',
            'email' => 'wonmyn@genesis.com',
            'password' => 'wangfu255',
            'role_id' => 3,
        ]);
    }
}
