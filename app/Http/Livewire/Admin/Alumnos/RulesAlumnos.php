<?php
namespace App\Http\Livewire\Admin\Alumnos;

class RulesAlumnos{
    public static function Reglas($id = null)
    {
        return[
            'alumno.matricula' => 'nullable|string',
            'alumno.observaciones' => 'nullable|string',
            'alumno.costosInscripcion' => 'nullable|string',
            'alumno.costosColegiatura' => 'nullable|string',
            'alumno.ciclo' => 'nullable|string',
            'alumno.primerNombre' => 'required|string',
            'alumno.segundoNombre' => 'nullable|string',
            'alumno.apellidoPaterno' => 'required|string',
            'alumno.apellidoMaterno' => 'nullable|string',
            'alumno.f_nacimiento' => 'required|string',
            'alumno.domicilio' => 'required|string',
            'alumno.colonia' => 'required|string',
            'alumno.zip' => 'nullable|string',
            'alumno.t_celular' => 'required|string',
            'alumno.t-casa' => 'nullable|string',
            'alumno.nacionalidad' => 'required|string',
            'alumno.proce_secundaria' => 'nullable|string',
            'alumno.proce_estado' => 'nullable|string',
            'alumno.proce_promedio' => 'nullable|string',
            'alumno.enfermedades' => 'nullable|string',
            'alumno.grupoSanguineo' => 'nullable|string',
            'alumno.atencionMedica' => 'nullable|string',
            'alumno.nombrePadre' => 'required|string',
            'alumno.nombreMadre' => 'required|string',
            'alumno.nombreTutor' => 'nullable|string',
            'alumno.direccion' => 'required|string',
            'alumno.tutor_tel_trabajo' => 'nullable|string',
            'alumno.tutor_tel_celular' => 'required|string',


        ];
    }
}
