@section('content_header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Plan de Estudios</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('index.home')}}">Inico</a></li>
                <li class="breadcrumb-item"><a href="{{route('academico.index')}}">Academico</a></li>
                <li class="breadcrumb-item active">Plan de Estudios</li>
            </ol>
        </div>
    </div>
</div>
@stop
<div wire:init="cargando">
    <a type="button" {{-- href="{{ route('alumnos.crear') }}" --}} class="float-right mb-3 btn btn-success">Agregar Plan <i class="fa fa-plus"
            aria-hidden="true"></i></a>

    <div class="mb-2 col-6">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
            <input wire:model="search" class="form-control" placeholder="Buscar por clave" type="search" aria-l
                aria-describedby="addon-wrapping">

        </div>

    </div>
    @if (count($estudios) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Clave</th>
                    <th>Descripción</th>
                    <th width="120" >Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estudios as $estudio)
                    <tr>
                        <td> {{ $estudio->clave }}</td>

                        <td> {{ $estudio->descripcion }}</td>

                        <td>
                            <a {{-- href="{{ route('alumnos.mostrar', $alumno) }}" --}} title="Ver más" class="btn btn-info btn-sm"><i class="fa fa-eye"
                                    aria-hidden="true"></i></a>
                            <a {{-- href="{{ route('editar.alumnos', $alumno) }}" --}} title="Editar" class="btn btn-primary btn-sm"><i
                                    class="fa fa-pencil" aria-hidden="true"></i></i></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    @else
            <label style="text-align: center" >No hay plan de estuidos, Agrega uno.</label>
    @endif





    {{ $cargando == true ? $estudios->links() : null }}
</div>
