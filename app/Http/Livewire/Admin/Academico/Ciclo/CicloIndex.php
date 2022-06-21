<?php

namespace App\Http\Livewire\Admin\Academico\Ciclo;

use App\Models\Ciclo;
use Livewire\Component;
use Livewire\WithPagination;

class CicloIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $cargando = false;

    public function render()
    {
        $ciclos = Ciclo::orderBy('clave','desc');
        $ciclos = ($this->cargando == true) ? Ciclo::where('clave', 'LIKE', '%' .$this->search . '%')
        ->paginate(10) : [];

        return view('livewire.admin.academico.ciclo.ciclo-index', compact('ciclos'));
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
