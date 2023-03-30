<?php
namespace App\Http\Livewire\Admin\Academico\Asignaturas;
class AsignaturasRules{
    public static function Reglas($id = null)
    {
        return[
            'asignatura.clave' => 'required|string|unique:asignaturas,clave',
            'asignatura.descripcion' => 'required|string'
        ];
    }
}
