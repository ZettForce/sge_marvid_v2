<?php
namespace App\Http\Livewire\Admin\Usuarios;

class UsuariosRules{
    public static function Reglas($id = null)
    {
        $validarPassword = ($id) ? 'nullable|min:8' : 'required|min:8';
        return[
            'usuario.email' => 'required|email|unique:users,email' .$id,
            'picture' => 'nullable|image',
            'password' => $validarPassword,
            'confirmar_password' => 'same:password'

        ];
    }
}
