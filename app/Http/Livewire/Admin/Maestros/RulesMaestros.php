<?php

namespace App\Http\Livewire\Admin\Maestros;

class RulesMaestros
{
    public static function Reglas($id = null)
    {
        return [
            'maestro.primerNombre' => 'required|string',
            /* 'maestro.segundoNombre' => 'string|nullable', */
            'maestro.apellidoPaterno' => 'string|required',
            'maestro.apellidoMaterno' => 'string|nullable',
            'maestro.f_nacimiento' => 'date|required',
            'maestro.sexo' => 'string|required',
            'maestro.curp' => 'string|required',
            'maestro.domicilio' => 'string|required',
            'maestro.colonia' => 'string|required',
            'maestro.zip' => 'string|nullable',
            'maestro.t_celular' => 'string|required',
            'maestro.t-casa' => 'string|nullable',
            'maestro.nacionalidad' => 'string|required',
            'maestro.enfermedades' => 'string|required',
            'maestro.atencionMedica' => 'string|required',
            'maestro.grupoSanguineo' => 'string|required',
            'maestro.nombrePadre' => 'string|nullable',
            'maestro.nombreMadre' => 'string|nullable',
            'maestro.direccion' => 'string|nullable',
            'maestro.tel_trabajo' => 'string|nullable',
            'maestro.tel_celular' => 'string|nullable',
            'pictureTeacher' => 'nullable|image'
        ];
    }
}
