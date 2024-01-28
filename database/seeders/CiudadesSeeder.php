<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('ciudades')->insert([
            ['nombre' => 'Acacias'],
            ['nombre' =>'Aguachica'],
            ['nombre' =>'Apartado'],
            ['nombre' => 'Armenia'],
            ['nombre' => 'Barrancabermeja'],
            ['nombre' => 'Barranquilla'],
            ['nombre' =>'Bello'],
            ['nombre' =>'Bogota D.C.'], 
            ['nombre' => 'Bucaramanga'],
            ['nombre' => 'Buenaventura'],
            ['nombre' => 'Cali'],
            ['nombre' => 'Cartagena'],
            ['nombre' => 'Cartago'],
            ['nombre' => 'Caucasia'],
            ['nombre' => 'Chia'],
            ['nombre' => 'Cucuta'],
            ['nombre' => 'Duitama'],
            ['nombre' => 'Envigado'],
            ['nombre' => 'Florencia'],
            ['nombre' => 'Floridablanca'],
            ['nombre' => 'Fusagasuga'],
            ['nombre' => 'Girardot'],
            ['nombre' => 'Ibague'],
            ['nombre' => 'Ipiales'],
            ['nombre' => 'Itagui'],
            ['nombre' => 'La Dorada'],
            ['nombre' => 'Manizales'],
            ['nombre' => 'Medell?n\r'],
            ['nombre' => 'Monteria'],
            ['nombre' => 'Mosquera'],
            ['nombre' => 'Neiva'],
            ['nombre' => 'Palmira'],
            ['nombre' => 'Pasto'],
            ['nombre' => 'Pereira'],
            ['nombre' => 'Popayan'],
            ['nombre' => 'Quibdo\r\n'],
            ['nombre' => 'Riohacha'],
            ['nombre' => 'Rionegro'],
            ['nombre' => 'Sabaneta'],
            ['nombre' => 'San Andres'],
            ['nombre' => 'Santa Marta'],
            ['nombre' => 'Sincelejo'],
            ['nombre' => 'Soacha'],
            ['nombre' => 'Sogamoso'],
            ['nombre' => 'Tulua'],
            ['nombre' => 'Tumaco'],
            ['nombre' => 'Tunja'],
            ['nombre' => 'Valledupar'],
            ['nombre' => 'Villavicencio'],
            ['nombre' => 'Yopal'],
            ['nombre' => 'Zipaquira']
        ]);

        
    }
}
