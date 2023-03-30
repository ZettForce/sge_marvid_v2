@section('content_header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Asignaturas</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('index.home')}}">Inico</a></li>
                <li class="breadcrumb-item"><a href="{{route('academico.index')}}">Academico</a></li>
                <li class="breadcrumb-item"><a href="{{route('asignatura.index')}}">Asignaturas</a></li>
                <li class="breadcrumb-item active">Crear</li>
            </ol>
        </div>
    </div>
</div>
@stop
<div>
    <form  wire:submit.prevent="crear" wire:click="$emit('saved')">
        <div class="card">
            <div class="card-header" style="text-align: center;color:white;background-color:#701630" >
                Nueva Asignatura  <i class="fas fa-book"></i>
            </div>
            <div class="card-body">
                @include('livewire.admin.academico.asignaturas.formulario')
            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-success btn-sm">Agregar <i
                        class="fa fa-save"></i></button>
                <a href="{{ route('asignatura.index') }}"class="btn btn-danger btn-sm">Cancelar <i class="fa fa-ban"
                        aria-hidden="true"></i></a>
            </div>
        </div>

    </form>
</div>
