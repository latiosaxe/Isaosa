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
        DB::table('users')->insert([
            [
                'name' => 'José Peréz',
                'username' => 'paco',
                'email' => 'jpaco.pr@gmail.com',
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
