<?php

namespace App\Http\Livewire\Admin\Usuarios;

use App\Models\Usuario;
use Livewire\WithPagination;
use Livewire\Component;

class UsuariosIndex extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $search;
    public $cargando = false;

    public function render()
    {
        $usuarios = Usuario::orderBy('apellidoPaterno','desc');
        $usuarios = ($this->cargando == true) ? Usuario::where('primerNombre', 'LIKE', '%' .$this->search .'%')
        ->orwhere ('apellidoPaterno', 'LIKE', '%' .$this->search .'%')
        ->orwhere ('apellidoMaterno', 'LIKE', '%' .$this->search .'%')
        ->paginate(10) : [];

        return view('livewire.admin.usuarios.usuarios-index',compact('usuarios'));
    }

    public function cargando()
    {
        $this->cargando = true;
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
}
