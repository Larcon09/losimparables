<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArchivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('archivos')->insert([
            ['tipo' => 'term','description' =>  '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Facilisi morbi tempus iaculis urna. Iaculis nunc sed augue lacus viverra vitae congue eu. Turpis massa tincidunt dui ut ornare lectus. Condimentum mattis pellentesque id nibh tortor id aliquet. Sapien et ligula ullamcorper malesuada. Enim lobortis scelerisque fermentum dui faucibus in ornare. Quam adipiscing vitae proin sagittis nisl. In metus vulputate eu scelerisque. Facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui. Augue interdum velit euismod in pellentesque massa placerat duis. Tortor aliquam nulla facilisi cras fermentum odio eu. Velit ut tortor pretium viverra suspendisse potenti nullam ac tortor. ok</p>'],
            ['tipo' => 'cond','description' =>  '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Facilisi morbi tempus iaculis urna. Iaculis nunc sed augue lacus viverra vitae congue eu. Turpis massa tincidunt dui ut ornare lectus. Condimentum mattis pellentesque id nibh tortor id aliquet. Sapien et ligula ullamcorper malesuada. Enim lobortis scelerisque fermentum dui faucibus in ornare. Quam adipiscing vitae proin sagittis nisl. In metus vulputate eu scelerisque. Facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui. Augue interdum velit euismod in pellentesque massa placerat duis. Tortor aliquam nulla facilisi cras fermentum odio eu. Velit ut tortor pretium viverra suspendisse potenti nullam ac tortor. ok</p>']
        ]);
    }
}
