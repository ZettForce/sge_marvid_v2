<?php

namespace App\Http\Livewire\Admin\Usuarios;

use App\Http\Livewire\Admin\Usuarios\RulesUsuarios;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Crear extends Component
{
    use WithFileUploads;
    public Usuario $usuario;
    public $foto;

    public function mount()
    {
        $this->usuario = new Usuario();
    }

    public function render()
    {
        return view('livewire.admin.usuarios.crear');
    }
    public function crear()
    {
        $this->validate();

        $this->usuario->save();

        return redirect(route('usuarios.index'));


    }

    public function rules()
    {
        return RulesUsuarios::Reglas();
    }
}
