<?php

namespace App\Http\Livewire\Admin\Usuarios;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsuariosIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $cargando = false;

    public function render()
    {

        $usuarios = User::orderBy('name', 'desc');
        $usuarios = ($this->cargando == true) ? User::where('email', 'LIKE', '%' . $this->search . '%')
            ->orwhere('name', 'LIKE', '%' . $this->search . '%')
            ->paginate(10) : [];


        return view('livewire.admin.usuarios.usuarios-index', compact('usuarios'));
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
