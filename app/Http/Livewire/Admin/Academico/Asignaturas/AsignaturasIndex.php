<?php

namespace App\Http\Livewire\Admin\Academico\Asignaturas;

use App\Models\Asignatura;
use Livewire\Component;
use Livewire\WithPagination;

class AsignaturasIndex extends Component
{
    use WithPagination;
    protected $paginationTheme= 'bootstrap';
    public $search;
    public $cargando = false;
    public function render()
    {
        $asignaturas = Asignatura::orderBy('descripcion', 'desc');
        $asignaturas =($this->cargando == true) ? Asignatura::where('descripcion', 'LIKE', '%' .$this->search .'%')
        ->orwhere ('clave', 'LIKE', '%' .$this->search .'%')
        ->paginate(10) : [];
        return view('livewire.admin.academico.asignaturas.asignaturas-index', compact('asignaturas'));
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
