<?php

namespace Database\Seeders;

use App\Models\Ciclo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CicloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ciclo::create([
          'clave' => '2022-1',
          'descripcion' => '1ER CUATRIMESTRE 2022 DEL 2022',
          'etiqueta' => '2022-1'
        ]);


    }
}
