<?php

namespace App\Http\Livewire\Admin\Academico\Grupo;

use App\Models\Grupo;
use Livewire\Component;
use Livewire\WithPagination;

class GrupoIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $cargando = false;


    public function render()
    {
        $grupos = Grupo::orderBy('clave_grupo','desc');
        $grupos = ($this->cargando == true) ? Grupo::where('clave_grupo', 'LIKE', '%' . $this->search . '%')
        ->paginate(10):[];
        return view('livewire.admin.academico.grupo.grupo-index', compact('grupos'));
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
