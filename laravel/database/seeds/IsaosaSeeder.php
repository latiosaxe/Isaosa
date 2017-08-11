<?php

use Illuminate\Database\Seeder;

class IsaosaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'name' => 'José Peréz',
                'username' => 'paco',
                'email' => 'jpaco.pr@gmail.com',
                'password' => bcrypt('IsaosaADMIN'),
                'level'  => 5
            ],[
                'name' => 'Cazz',
                'username' => 'cazz',
                'email' => 'cazz@isaosa.com.mx',
                'password' => bcrypt('IsaosaADMIN'),
                'level'  => 5
            ],[
                'name' => 'Jorge Luna',
                'username' => 'jluna',
                'email' => 'jluna@isaosa.com.mx',
                'password' => bcrypt('IsaosaADMIN'),
                'level'  => 3
            ],[
                'name' => 'Francisco Mardrigal',
                'username' => 'chico',
                'email' => 'chico@isaosa.com.mx',
                'password' => bcrypt('IsaosaADMIN'),
                'level'  => 5
            ],[
                'name' => 'Mactzil Guzman',
                'username' => 'mactzil',
                'email' => 'mactzil@isaosa.com.mx',
                'password' => bcrypt('IsaosaADMIN'),
                'level'  => 5
            ],[
                'name' => 'Samantha Villamil',
                'username' => 'samantha',
                'email' => 'samantha@isaosa.com.mx',
                'password' => bcrypt('IsaosaADMIN'),
                'level'  => 3
            ]
        ]);
    }
}
