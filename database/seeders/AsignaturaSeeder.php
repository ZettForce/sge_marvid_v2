<?php

namespace Database\Seeders;

use App\Models\Asignatura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Asignatura::create([
            'clave' => '201',
            'descripcion'  => 'Física I'
        ]);

        Asignatura::create([
            'clave' => '202',
            'descripcion'  => 'Matematícas I'
        ]);
        Asignatura::create([
            'clave' => '203',
            'descripcion'  => 'Informática I'
        ]);
        /* Asignatura::factory(10)->create(); */

    }
}
