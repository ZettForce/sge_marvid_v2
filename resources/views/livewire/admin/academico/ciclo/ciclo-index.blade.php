@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Ciclo</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('index.home') }}">Inico</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('academico.index') }}">Academico</a></li>
                    <li class="breadcrumb-item active">Ciclo</li>
                </ol>
            </div>
        </div>
    </div>
@stop
<div wire:init="cargando">
    <a type="button" href="{{ route('ciclo.crear') }}" title="Crear un nuevo ciclo escolar"
        class="float-right mb-3 btn btn-success">Agregar Ciclo <i class="fa fa-plus" aria-hidden="true"></i></a>

    <div class="mb-2 col-6">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
            <input wire:model="search" class="form-control" placeholder="Buscar por clave" type="search" aria-l
                aria-describedby="addon-wrapping">

        </div>

    </div>
    @if (count($ciclos) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Clave</th>
                    <th>Descripción</th>
                    <th width="110">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ciclos as $ciclo)
                    <tr>
                        <td> {{ $ciclo->clave }}</td>

                        <td> {{ $ciclo->descripcion }}</td>

                        <td>
                            <a href="{{ route('ciclo.editar', $ciclo) }}" title="Editar" class="btn btn-primary btn-sm"><i
                                    class="fa fa-pencil" aria-hidden="true"></i></i></a>
                            <a href="{{ route('ciclo.borrar', $ciclo) }}" title="Eliminar"
                                class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    @else
        <img class="mx-auto d-block" style="width: 250px; height: 250px"
            src="{{ Storage::disk('public')->url('images/otros/cargando.gif') }}" alt="cargando">
    @endif

    {{ $cargando == true ? $ciclos->links() : null }}
</div>
