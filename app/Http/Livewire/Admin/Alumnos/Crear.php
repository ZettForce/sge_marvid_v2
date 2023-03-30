<?php

namespace App\Http\Livewire\Admin\Alumnos;

use App\Http\Livewire\Admin\Alumnos\RulesAlumnos;
use App\Models\Alumno;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Crear extends Component
{
    use WithFileUploads;
    public Alumno $alumno;
    public $foto;

    public function mount()
    {
        $this->alumno = new Alumno();
    }

    public function render()
    {
        return view('livewire.admin.alumnos.crear');
    }
    public function crear()
    {
        $this->validate();
        $this->alumno->save();
        $this->emit('alerta');
        return redirect(route('alumnos.index'));


    }

    public function rules()
    {
        return RulesAlumnos::Reglas();
    }
}
