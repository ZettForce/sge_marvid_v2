<div>
    @section('content_header')
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Editar Ciclo</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('index.home') }}">Inico</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('academico.index') }}">Academico</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('ciclo.index') }}">Ciclo</a></li>
                        <li class="breadcrumb-item active">Editar</li>
                    </ol>
                </div>
            </div>
        </div>
    @stop
    <form wire:submit.prevent="editar">
        <div class="card">
            <div class="card-header" style="text-align: center;color:white;background-color:maroon">
            </div>
            <div class="card-body">
                @include('livewire.admin.academico.ciclo.ciclo-formulario')
            </div>
            <div class="card-footer text-muted">
                <button wire:loading.attr="disabled" class="btn btn-primary btn-sm">Actualizar <i class="fa fa-pencil"
                        aria-hidden="true"></i></button>
                <a href="{{ route('ciclo.index') }}" class="btn btn-danger btn-sm">Cancelar <i class="fa fa-ban"
                        aria-hidden="true"></i></a>
            </div>
        </div>
    </form>
</div>
