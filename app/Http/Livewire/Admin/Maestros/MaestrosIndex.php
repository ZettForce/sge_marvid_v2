<?php

namespace App\Http\Livewire\Admin\Maestros;

use App\Models\Maestro;
use Livewire\Component;
use Livewire\WithPagination;

class MaestrosIndex extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $search;
    public $cargando = false;
    public function render()
    {
        $maestros = Maestro::orderBy('id','desc');
        $maestros = ($this->cargando == true) ? Maestro::where('primerNombre', 'LIKE', '%' .$this->search .'%')
        ->orwhere ('apellidoPaterno', 'LIKE', '%' .$this->search .'%')
        ->orwhere ('apellidoMaterno', 'LIKE', '%' .$this->search .'%')
        /* ->orwhere ('segundoNombre', 'LIKE', '%' .$this->search .'%') */
        ->paginate(10) : [];
        return view('livewire.admin.maestros.maestros-index', compact('maestros'));
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
