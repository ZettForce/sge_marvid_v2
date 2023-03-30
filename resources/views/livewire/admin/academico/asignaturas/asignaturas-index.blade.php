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
                <li class="breadcrumb-item active">Asignaturas</li>
            </ol>
        </div>
    </div>
</div>
@stop
<div wire:init="cargando">
    {{-- <div wire:poll> funciona para recargar pagina en tiempo real --}}
    <a type="button" href="{{ route('asignatura.crear') }}" class="float-right mb-3 btn btn-success">Agregar Nueva <i
            class="fa fa-plus"></i></a>

    <div class="mb-2 col-6">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
            <input wire:model="search" class="form-control" placeholder="Buscar..." type="search" aria-l
                aria-describedby="addon-wrapping">

        </div>

    </div>
    @if (count($asignaturas) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Clave</th>
                    <th>Descripción</th>
                    <th width="120" >Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($asignaturas as $asignatura)
                    <tr>
                        <td> {{ $asignatura->clave }}</td>
                        <td> {{ $asignatura->descripcion }}</td>
                        <td>
                            <a  {{-- href="{{ route('alumnos.mostrar', $alumno) }}" --}}  title="Ver más" class="btn btn-info btn-sm"><i class="fa fa-eye"
                                    aria-hidden="true"></i></a>
                            <a  {{-- href="{{ route('editar.alumnos', $alumno) }}" --}}  title="Editar" class="btn btn-primary btn-sm"><i
                                    class="fa fa-pencil"></i></i></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    @else
        <img class="mx-auto d-block" style="width: 250px; height: 250px"
            src="{{ Storage::disk('public')->url('images/otros/cargando.gif') }}" alt="cargando">
    @endif





    {{ $cargando == true ? $asignaturas->links() : null }}
</div>
