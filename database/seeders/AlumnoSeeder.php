<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumno::create([
            'matricula' => '203010',
            'observaciones' => 'No hay observaciones',
            'costosInscripcion' => '1500',
            'costosColegiatura' => '1300',
            'ciclo' => '2022-1',
            'primerNombre' => 'HEIDY',
            'segundoNombre' => 'ANAHI',
            'apellidoPaterno' => 'VEGA',
            'apellidoMaterno' => 'GARCIA',
            'f_nacimiento' => '2004/02/23',
            'curp' => 'MAHF950209HSRRRL01',
            'sexo' => 'FEMENINO',
            'domicilio' => 'SU CASA',
            'colonia' => 'CAMPESTRE',
            'zip' => '83499',
            't_celular' => '6538499179',
            't_casa' => '',
            'nacionalidad' => 'MÉXICO',
            'proce_secundaria' => 'COLEGIO NOGALES',
            'proce_estado' => 'SONORA',
            'proce_promedio' => '89',
            'enfermedades' => 'NINGUNA',
            'grupoSanguineo' => 'O POSTIVO',
            'atencionMedica' => 'IMMS',
            'nombrePadre' => 'FILIBERTO MARTINEZ',
            'nombreMadre' => 'NYDIA ELIZETH ARVIZU',
            'nombreTutor' => '',
            'direccion' => 'OAXACA #3709',
            'tutor_tel_trabajo' => '6535187931',
            'tutor_tel_celular' => '6311056377',


        ]);


    }
}
