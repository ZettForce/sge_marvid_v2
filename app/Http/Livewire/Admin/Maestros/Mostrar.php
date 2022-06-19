<?php

namespace App\Http\Livewire\Admin\Maestros;

use App\Models\Maestro;
use Livewire\Component;

class Mostrar extends Component
{
    public Maestro $maestro;
    public $foto;
    public function render()
    {
        return view('livewire.admin.maestros.mostrar');
    }
}
