<?php

namespace App\Http\Livewire\Admin\Usuarios;


use App\Models\Usuario;
use Livewire\Component;

class Mostrar extends Component
{
    public Usuario $usuario;
    public $foto;
    public function render()
    {
        return view('livewire.admin.usuarios.mostrar');
    }
}
