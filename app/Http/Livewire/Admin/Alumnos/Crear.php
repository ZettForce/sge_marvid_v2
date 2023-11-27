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
    public $pictureStudent;
    public $fechaNacimiento;
    public $edad;

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
        if ($this->pictureStudent != null) {
            $this->alumno->pictureStudent = Storage::disk('public')->put('images/alumnos', $this->pictureStudent);
        }
        $this->alumno->save();
        $this->emit('alerta');
        return redirect(route('alumnos.index'));


    }

    public function rules()
    {
        return RulesAlumnos::Reglas();
    }
}
