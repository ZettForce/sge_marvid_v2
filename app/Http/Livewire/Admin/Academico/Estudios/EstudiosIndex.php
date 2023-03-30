<?php

namespace App\Http\Livewire\Admin\Academico\Estudios;

use App\Models\Estudio;
use Livewire\Component;
use Livewire\WithPagination;

class EstudiosIndex extends Component
{
    use WithPagination;
    protected $paginationTheme= 'bootstrap';
    public $search;
    public $cargando = false;
    public function render()
    {
        $estudios = Estudio::orderBy('descripcion', 'desc');
        $estudios = ($this->cargando == true) ? Estudio::where('descripcion', 'LIKE', '%' .$this->search .'%')
        ->orwhere ('clave', 'LIKE', '%' .$this->search .'%')
        ->paginate(10) : [];
        return view('livewire.admin.academico.estudios.estudios-index', compact('estudios'));
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
