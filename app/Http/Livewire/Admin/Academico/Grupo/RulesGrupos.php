<?php
namespace App\Http\Livewire\Admin\Academico\Grupo;
class RulesGrupos{
    public static function Reglas($id = null)
    {
        return[
            'grupo.clave' => 'required|string',
            'grupo.descripcion' => 'required|string',
            'grupo.identificador' => 'required|string',
            'grupo.turno' => 'string|required',
            'grupo.grado_id' => 'string|required',
            'grupo.ciclo_id' => 'string|required'


        ];
    }
}
