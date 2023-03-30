<?php

namespace App\Http\Livewire\Admin\Academico\Ciclo;

use App\Models\Ciclo;
use Livewire\Component;

class CicloCrear extends Component
{
    public Ciclo $ciclo;
    public function mount()
    {
        $this->ciclo = new Ciclo();
    }
    public function render()
    {
        return view('livewire.admin.academico.ciclo.ciclo-crear');
    }
    public function crear()
    {
        $this->validate();
        $this->ciclo->save();
        $this->emit('alerta');
        return redirect(route('ciclo.index'));
    }
    public function rules()
    {
        return RulesCiclo::Reglas();
    }
}
