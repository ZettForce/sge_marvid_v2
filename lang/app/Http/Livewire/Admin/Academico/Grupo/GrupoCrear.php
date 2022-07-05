<?php

namespace App\Http\Livewire\Admin\Academico\Grupo;

use App\Http\Livewire\Admin\Grupo\RulesGrupo;
use App\Models\Grupo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

use Livewire\Component;

class GrupoCrear extends Component
{
    use WithFileUploads;
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

        return redirect(route('academico.grupo.index'));
    }

    public function rules()
    {
        return RulesGrupo::Reglas();
    }
}
