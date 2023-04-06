<?php

namespace App\Http\Livewire\Admin\Usuarios;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UsuariosCrear extends Component
{
    use WithFileUploads;
    public User $usuario;
    public $password;
    public $picture;
    public $confirmar_password;
    public function mount()
    {
        $this->usuario = new User();
    }

    public function render()
    {
        return view('livewire.admin.usuarios.usuarios-crear');
    }

    public function crear()
    {
        $this->validate();
        $this->usuario->password = Hash::make($this->password);

        if ($this->picture != null) {
            $this->usuario->picture = Storage::disk('public')->put('images/usuarios', $this->picture);
        }

        $this->usuario->save();
        return redirect(route('usuarios.index'));
    }

    public function rules()
    {
        return UsuariosRules::Reglas();
    }

}
