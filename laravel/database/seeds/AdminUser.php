<?php

use Illuminate\Database\Seeder;

class AdminUser extends Seeder
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
                'name' => 'Administrador',
                'username' => 'admin',
                'email' => 'admin@isaosa.com.mx',
                'password' => bcrypt('ADMINIsaosa'),
                'level'  => 5
            ]
        ]);
    }
}
