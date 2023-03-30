<?php

namespace App\Http\Livewire\Admin\Academico\Asignaturas;

use App\Models\Asignatura;
use Livewire\Component;

class AsignaturasCrear extends Component
{
    public Asignatura $asignatura;

    public function mount()
    {
        $this-> asignatura = new Asignatura();
    }

    public function render()
    {
        return view('livewire.admin.academico.asignaturas.asignaturas-crear');
    }

    public function crear()
    {
        $this->validate();
        $this->asignatura->save();
        $this->emit('alerta');
        return redirect(route('asignatura.index'));
    }
    public function rules()
    {
       return AsignaturasRules::Reglas();
    }
}
