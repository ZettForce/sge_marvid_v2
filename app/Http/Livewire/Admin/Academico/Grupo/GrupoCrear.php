<?php

namespace App\Http\Livewire\Admin\Academico\Grupo;

use App\Http\Livewire\Admin\Academico\Grupo\RulesGrupos;
use App\Models\Ciclo;
use App\Models\Grado;
use App\Models\Grupo;
use Livewire\Component;

class GrupoCrear extends Component
{
    public Grupo $grupo;

    public function mount()
    {
        $this->grupo = new Grupo();
    }

    public function render()
    {
        $grados = Grado::all();
        $ciclos = Ciclo::all();
        return view('livewire.admin.academico.grupo.grupo-crear', compact('grados','ciclos'));

    }

    public function crear()
    {
        $this->validate();
        $this->grupo->save();
        $this->emit('alerta');

        return redirect(route('academico.grupo.index'));
    }
    public function rules()
    {
        return RulesGrupos::Reglas();
    }
}
