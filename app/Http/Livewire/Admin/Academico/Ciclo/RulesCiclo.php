<?php
namespace App\Http\Livewire\Admin\Academico\Ciclo;

class RulesCiclo{
    public static function Reglas($id = null)
    {
        return [
            'ciclo.clave' =>'string|required|unique:ciclos,clave' .$id,
            'ciclo.descripcion' => 'string|required',
            'ciclo.inicia' => 'date|nullable',
            'ciclo.termina' => 'date|nullable'
        ];
    }
}
