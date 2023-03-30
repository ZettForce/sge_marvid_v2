<?php

namespace App\Http\Livewire\Admin\Academico\Ciclo;

use App\Models\Ciclo;
use Livewire\Component;

class CicloBorrar extends Component
{
    public Ciclo $ciclo;
    public function render()
    {
        return view('livewire.admin.academico.ciclo.ciclo-borrar');
    }
    public function eliminar()
    {
        $this->ciclo->delete();
        return redirect(route('ciclo.index'));
    }
}
