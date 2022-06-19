<div wire:init="cargando">
    {{-- <div wire:poll> funciona para recargar pagina en tiempo real --}}
    <h4>Usuarios registrados</h4>
    <a type="button" href="{{ route('usuarios.crear') }}" class="float-right mb-3 btn btn-success">Agregar <i
            class="fa fa-plus" aria-hidden="true"></i></a>

    <div class="mb-2 col-6">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
            <input wire:model="search" class="form-control" placeholder="Buscar..." type="search" aria-l
                aria-describedby="addon-wrapping">

        </div>

    </div>
    @if (count($usuarios) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Matricula</th>
                <th colspan="1" style="text-align:center">Nombre del usuario</th>
                <th>Curp</th>
                <th>Domicilio</th>
                <th>Colonia</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td> {{ $usuario->matricula }}</td>
                    <td>
                     {{ $usuario->apellidoPaterno }}
                     {{ $usuario->apellidoMaterno }}
                     {{ $usuario->primerNombre }}
                     {{ $usuario->segundoNombre }}
                    </td>
                    <td> {{ $usuario->curp }}</td>
                    <td> {{ $usuario->domicilio }}</td>
                    <td> {{ $usuario->colonia }}</td>

                    {{-- <th>
                        <img style="width: 40px;height:40px" class="rounded-circle"
                            src="{{ Storage::disk('public')->url($alumno->foto ? $alumno->foto : 'images/alumnos/default.png') }}"
                            alt="">
                    </th> --}}
                    <td>
                        <a  href="{{ route('usuarios.mostrar', $usuario) }}"  title="Ver más"
                            class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a {{-- href="{{ route('editar.usuario', $usuario) }}" --}} title="Editar"
                            class="btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></i></a>
                    </td>
                </tr>

            @endforeach

        </tbody>
    </table>

@else
     <img class="mx-auto d-block" style="width: 250px; height: 250px"
        src="{{ Storage::disk('public')->url('images/otros/cargando.gif') }}" alt="cargando">
@endif





    {{ $cargando == true ? $usuarios->links() : null }}
</div>

