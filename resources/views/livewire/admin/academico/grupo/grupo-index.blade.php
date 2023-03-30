@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Grupos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('index.home') }}">Inico</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('academico.index') }}">Academico</a></li>
                    <li class="breadcrumb-item active">Grupos</li>
                </ol>
            </div>
        </div>
    </div>
@stop
<div wire:init="cargando">
    <a type="button" href="{{ route('academico.grupo.crear') }}" class="float-right mb-3 btn btn-success">Agregar <i
            class="fa fa-plus"></i></a>

    <div class="mb-2 col-6">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
            <select wire:model="search" class="form-control" placeholder="Buscar grupo" type="search" aria-l
                aria-describedby="addon-wrapping">

                <option selected> Selecciona un ciclo... </option>
                @foreach ($ciclos as $ciclo)

                    <option value="{{$ciclo->id}}">{{ $ciclo->clave }}</option>
                @endforeach
            </select>

        </div>

    </div>
    @if (count($grupos) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Clave</th>
                    <th>Grado</th>
                    <th>Identificador</th>
                    <th>Ciclo</th>
                    <th width="120">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($grupos as $grupo)
                    <tr>
                        <td> {{ $grupo->clave }}</td>
                        <td> {{ $grupo->grado_id }} </td>
                        <td> {{ $grupo->identificador }}</td>
                        <td> {{$grupo->ciclo_id}}</td>

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
        <label>No hay grupos, crea uno.</label>
    @endif





    {{ $cargando == true ? $grupos->links() : null }}
</div>
