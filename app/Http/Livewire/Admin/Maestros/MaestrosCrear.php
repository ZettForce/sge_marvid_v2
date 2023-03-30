<?php

namespace App\Http\Livewire\Admin\Maestros;

use App\Models\Maestro;
use Livewire\Component;

class MaestrosCrear extends Component
{
    public Maestro $maestro;
    public function mount()
    {
        $this->maestro = new Maestro();
    }
    public function render()
    {
        return view('livewire.admin.maestros.maestros-crear');
    }

    public function crear()
    {
        $this->validate();
        $this->maestro->save();
        $this->emit('alerta');
        return redirect(route('maestros.index'));
    }
    public function rules()
    {
        return RulesMaestros::Reglas();
    }
}
