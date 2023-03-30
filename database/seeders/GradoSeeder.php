<?php

namespace Database\Seeders;

use App\Models\Grado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grado::create([
           'descripcion' => '1',
           'etiqueta' => '1',
        ]);
        Grado::create([
            'descripcion' => '2',
            'etiqueta' => '1',
         ]);
         Grado::create([
            'descripcion' => '3',
            'etiqueta' => '3',
         ]);
         Grado::create([
            'descripcion' => '4',
            'etiqueta' => '4',
         ]);
         Grado::create([
            'descripcion' => '5',
            'etiqueta' => '5',
         ]);
         Grado::create([
            'descripcion' => '6',
            'etiqueta' => '6',
         ]);
    }
}
