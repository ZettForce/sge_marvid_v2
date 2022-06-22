<?php

namespace App\Http\Livewire\Admin\Alumnos;

use App\Models\Alumno;
use Livewire\Component;

class Mostrar extends Component
{
    public Alumno $alumno;
    public $foto;
    public function render()
    {
        return view('livewire.admin.alumnos.mostrar');
    }
}
