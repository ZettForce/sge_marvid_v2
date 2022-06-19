<?php

namespace App\Http\Livewire\Admin\Maestros;

use App\Http\Livewire\Admin\Maestros\RulesMaestros;
use App\Models\Maestro;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Crear extends Component
{
    use WithFileUploads;
    public Maestro $maestro;
    public $foto;

    public function mount()
    {
        $this->maestro = new Maestro();
    }

    public function render()
    {
        return view('livewire.admin.maestros.crear');
    }
    
    public function crear()
    {
        $this->validate();

        $this->maestro->save();
        return redirect(route('maestros.index'));

    }

    public function rules()
    {
        return RulesMaestros::Reglas();
    }
}
