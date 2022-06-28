<?php

namespace App\Http\Livewire\Admin\Academico\Grupo;

use App\Http\Livewire\Admin\Academico\Grupo\RulesGrupos;
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
        return view('livewire.admin.academico.grupo.grupo-crear');
    }

    public function crear()
    {
        $this->validate();
        $this->grupo->save();

        return redirect(route('index.home'));
    }
    public function rules()
    {
        return RulesGrupos::Reglas();
    }
}
