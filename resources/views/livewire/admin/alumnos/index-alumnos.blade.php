<div wire:init="cargando">
    @section('content_header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Alumnos</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('index.home')}}">Inico</a></li>
                <li class="breadcrumb-item active">Alumnos</li>
            </ol>
        </div>
    </div>
</div>
@stop
    {{-- <div wire:poll> funciona para recargar pagina en tiempo real --}}
    <h4>Index de alumnos</h4>
    <a type="button" href="{{ route('alumnos.crear') }}" class="float-right mb-3 btn btn-success">Agregar <i
            class="fa fa-plus"></i></a>

    <div class="mb-2 col-6">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
            <input wire:model="search" class="form-control" placeholder="Buscar..." type="search" aria-l
                aria-describedby="addon-wrapping">

        </div>

    </div>
    @if (count($alumnos) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Matricula</th>
                <th>Nombre del alumno</th>
                <th>Domicilio</th>
                <th>Colonia</th>
                <th width="110">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
                <tr>
                    <td> {{ $alumno->matricula }}</td>
                    <td>
                     {{ $alumno->apellidoPaterno }}
                     {{ $alumno->apellidoMaterno }}
                     {{ $alumno->primerNombre }}
                     {{ $alumno->segundoNombre }}
                    </td>
                    <td> {{ $alumno->domicilio }}</td>
                    <td> {{ $alumno->colonia }}</td>

                    <td>
                        <a  href="{{ route('alumnos.mostrar', $alumno) }}"  title="Ver más"
                            class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                        <a {{-- href="{{ route('editar.alumnos', $alumno) }}" --}} title="Editar"
                            class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></i></a>
                    </td>
                </tr>

            @endforeach

        </tbody>
    </table>

@else
     <img class="mx-auto d-block" style="width: 250px; height: 250px"
        src="{{ Storage::disk('public')->url('images/otros/cargando.gif') }}" alt="cargando">
@endif





    {{ $cargando == true ? $alumnos->links() : null }}
</div>
