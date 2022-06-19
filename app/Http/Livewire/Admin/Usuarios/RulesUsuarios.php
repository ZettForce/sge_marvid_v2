<?php
namespace App\Http\Livewire\Admin\Usuarios;

class RulesUsuarios{
    public static function Reglas($id = null)
    {
        return[
            'usuario.primerNombre' => 'required|string',
            'usuario.segundoNombre' => 'nullable|string',
            'usuario.apellidoPaterno' => 'required|string',
            'usuario.apellidoMaterno' => 'nullable|string',
            'usuario.email' => 'required|string',
            'usuario.password' => 'required|string',
            'usuario.f_nacimiento' => 'required|string',
            'usuario.sexo' => 'required|string',
            'usuario.curp' => 'required|string',
            'usuario.domicilio' => 'required|string',
            'usuario.colonia' => 'required|string',
            'usuario.zip' => 'nullable|string',
            'usuario.t_celular' => 'required|string',
            'usuario.t-casa' => 'nullable|string',
            'usuario.nacionalidad' => 'required|string',

        ];
    }
}
