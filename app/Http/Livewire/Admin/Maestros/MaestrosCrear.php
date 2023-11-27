<?php

namespace App\Http\Livewire\Admin\Maestros;

use App\Models\Maestro;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class MaestrosCrear extends Component
{
    use WithFileUploads;
    public Maestro $maestro;
    public $pictureTeacher;

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
        if ($this->pictureTeacher != null) {
            $this->maestro->pictureTeacher = Storage::disk('public')->put('images/maestros', $this->pictureTeacher);
        }
        $this->maestro->save();
        $this->emit('alerta');
        return redirect(route('maestros.index'));
    }
    public function rules()
    {
        return RulesMaestros::Reglas();
    }
}
