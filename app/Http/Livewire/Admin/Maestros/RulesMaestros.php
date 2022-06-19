<?php
namespace App\Http\Livewire\Admin\Maestros;

class RulesMaestros{
    public static function Reglas($id = null)
    {
        return[
            'maestro.primerNombre' => 'required|string',
            'maestro.segundoNombre' => 'nullable|string',
            'maestro.apellidoPaterno' => 'required|string',
            'maestro.apellidoMaterno' => 'nullable|string',
            'maestro.f_nacimiento' => 'required|string',
            'maestro.sexo' => 'required|string',
            'maestro.curp' => 'required|string',
            'maestro.domicilio' => 'required|string',
            'maestro.colonia' => 'required|string',
            'maestro.zip' => 'nullable|string',
            'maestro.t_celular' => 'required|string',
            'maestro.t-casa' => 'nullable|string',
            'maestro.nacionalidad' => 'required|string',
        ];
    }
}
