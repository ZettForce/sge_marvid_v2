<?php

namespace App\Http\Livewire\Admin\Academico\Ciclo;

use App\Models\Ciclo;
use Livewire\Component;

class CicloEditar extends Component
{
    public Ciclo $ciclo;
    public function render()
    {
        return view('livewire.admin.academico.ciclo.ciclo-editar');
    }
    public function editar(){
        $this->validate();
        $this->ciclo->save();
        return redirect(route('ciclo.index'));
    }
    protected function rules(){
        return RulesCiclo::Reglas($this->ciclo->id);
    }
}
