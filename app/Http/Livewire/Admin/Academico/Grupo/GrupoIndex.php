<?php

namespace App\Http\Livewire\Admin\Academico\Grupo;

use App\Models\Ciclo;
use App\Models\Grado;
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
        $grados = Grado::find('ciclo_id');
        $ciclos = Ciclo::all();
        /* $grupos = Grupo::orderBy('ciclo_id','desc'); */
        $grupos = ($this->cargando == true) ? Grupo:: where('ciclo_id',/* , 'LIKE', '%' . */ $this->search/*  . '%' */)
        ->paginate(15):[];
        return view('livewire.admin.academico.grupo.grupo-index', compact('grupos','ciclos','grados'));
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
