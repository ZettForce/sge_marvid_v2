<div wire:init="cargando">
    <h4>Index Grupos</h4>
    <a type="button"  href="{{ route('academico.grupo.crear') }}" class="float-right mb-3 btn btn-success">Agregar <i class="fa fa-plus"
            aria-hidden="true"></i></a>

    <div class="mb-2 col-6">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
            <input wire:model="search" class="form-control" placeholder="Buscar grupo" type="search" aria-l
                aria-describedby="addon-wrapping">

        </div>

    </div>
    @if (count($grupos) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Clave</th>
                    <th>Grado</th>
                    <th>Identificador</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($grupos as $grupo)
                    <tr>
                        <td> {{ $grupo->clave_grupo }}</td>
                        <td> {{ $grupo->descripcion_grupo }}</td>
                        <td> {{ $grupo->identificador_grupo }}</td>

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
        <img class="mx-auto d-block" style="width: 250px; height: 250px"
            src="{{ Storage::disk('public')->url('images/otros/cargando.gif') }}" alt="cargando">
    @endif





    {{ $cargando == true ? $grupos->links() : null }}
</div>