<?php
namespace App\Http\Livewire\Admin\Academico\Grupo;
class RulesGrupos{
    public static function Reglas($id = null)
    {
        return[
            'grupo.clave' => 'nullable|string',
            'grupo.descripcion' => 'nullable|string',
            'grupo.identificador' => 'nullable|string',
            'grupo.turno' => 'string'


        ];
    }
}
