<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

class IndexUsuarios extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $search;
    public $cargando = false;

    public function render()
    {
        return view('livewire.admin.index-usuarios');
    }
}
