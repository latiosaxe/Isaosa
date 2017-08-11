<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Axel G',
                'username' => 'axel',
                'email' => 'axel@hanami.ninja',
                'password' => bcrypt('AxelAdmin'),
                'level'  => 5
            ]
        ]);
    }
}
