<?php

namespace App\Http\Livewire\Admin\Usuarios;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UsuariosCrear extends Component
{
    public User $usuario;
    public $password;
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

        $this->usuario->save();

        return redirect(route('usuarios.index'));
    }

    public function rules()
    {
        return UsuariosRules::Reglas();
    }

}
