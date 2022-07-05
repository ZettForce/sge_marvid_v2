<?php

namespace App\Http\Livewire\Admin\Grupo;

class RulesGrupo
{
    public static function Reglas($id = null)
    {
        return [
            'grupo.clave_grupo' => 'required',
            'grupo.descripcion_grupo' => 'required|string',
            'grupo.grado_grupo' => 'required|string',
            'grupo.identificador_grupo' => 'required|string',
            'grupo.turno_grupo' => 'required|string',
            'grupo.cupo_grupo' => 'required|string',


        ];
    }
}
