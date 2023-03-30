<?php

namespace App\Http\Livewire\Admin\Academico\Clases;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Clase;

class ClasesIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $cargando = false;
    public function render()
    {
        $clases = Clase::orderBy('id','asc');
        return view('livewire.admin.academico.clases.clases-index');
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
