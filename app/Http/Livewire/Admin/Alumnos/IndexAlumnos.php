<?php

namespace App\Http\Livewire\Admin\Alumnos;

use App\Models\Alumno;
use Livewire\Component;
use Livewire\WithPagination;

class IndexAlumnos extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $search;
    public $cargando = false;
    public function render()
    {
        $alumnos = Alumno::orderBy('apellidoPaterno','desc');
        $alumnos = ($this->cargando == true) ? Alumno::where('primerNombre', 'LIKE', '%' .$this->search .'%')
        ->orwhere ('apellidoPaterno', 'LIKE', '%' .$this->search .'%')
        ->orwhere ('apellidoMaterno', 'LIKE', '%' .$this->search .'%')
        ->paginate(10) : [];

        return view('livewire.admin.alumnos.index-alumnos', compact('alumnos'));
    }
}
