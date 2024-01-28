<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                'name' => 'Jorge Caraballo',
                'cedula' => '80850141',
                'email' => 'jorge.encargo@gmail.com',
                'password' => bcrypt('123456'),
                'ciudad' => '0',
                'cav' => '0',
                'avatar' => '',
                'rol' => 'Administrador',
                'estado' => 'activo'
            ],
            [
                'name' => 'Luis Eduardo',
                'cedula' => '1047371134',
                'email' => 'luis.laraconeo09@gmail.com',
                'password' => bcrypt('123456'),
                'ciudad' => '0',
                'cav' => '0',
                'avatar' => '',
                'rol' => 'Vendedor',
                'estado' => 'activo'
            ]
        ]);
    }
}
