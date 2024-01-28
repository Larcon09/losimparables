<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('menus')->insert([
            ['rol' => 'Administrador','name' => 'Dashboard','route' => 'Dashboard','ordering' => 1],
            ['rol' => 'Administrador','name' => 'Jugar','route' => 'Jugar','ordering' => 2],
            ['rol' => 'Administrador','name' => 'Reporte de Activaciones','route' => 'activaciones_admin','ordering' => 3],
            ['rol' => 'Administrador','name' => 'Reporte de Premios','route' => 'premios_admin','ordering' => 4],
            ['rol' => 'Administrador','name' => 'Ganadores','route' => 'ganadores_admin','ordering' => 5],
            ['rol' => 'Administrador','name' => 'Terminos y Condiciones','route' => 'archivos','ordering' => 6],
            ['rol' => 'Administrador','name' => 'Usuarios','route' => 'usuarios','ordering' => 7],

            ['rol' => 'Vendedor','name' => 'Ingresar Activaciones','route' => 'activaciones','ordering' => 1],
            ['rol' => 'Vendedor','name' => 'Jugar','route' => 'Jugar','ordering' => 2],
            ['rol' => 'Vendedor','name' => 'Premios','route' => 'premios','ordering' => 3],
            ['rol' => 'Vendedor','name' => 'Ganadores','route' => 'ganadores','ordering' => 4],
            ['rol' => 'Vendedor','name' => 'Terminos y Condiciones','route' => 'archivos','ordering' => 5],
            ['rol' => 'Vendedor','name' => 'Perfil','route' => 'Profile','ordering' => 6],
        ]);
    }
}
