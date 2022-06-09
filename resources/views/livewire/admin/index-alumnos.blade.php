<div>
    <div wire:init="cargando">
        {{-- <div wire:poll> funciona para recargar pagina en tiempo real --}}
        <h4>Index de alumnos</h4>
        <a type="button"  href="{{route('alumnos.crear')}}" class="float-right mb-3 btn btn-success">Agregar <i
                class="fa fa-plus" aria-hidden="true"></i></a>

        <div class="mb-2 col-6">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
                <input wire:model="search" class="form-control" placeholder="Buscar..." type="search" aria-l
                    aria-describedby="addon-wrapping">

            </div>

        </div>


            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Matricula</th>
                        <th colspan="1" style="text-align:center">Nombre del alumno</th>
                        <th>Domicilio</th>
                        <th>Colonia</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
               {{--  <tbody>

                        <tr>
                            <td> {{ $alumno->matricula }}</td>
                            <td>
                             {{ $alumno->nombre }}
                             {{ $alumno->nombre2 }}
                             {{ $alumno->apellidoPaterno }}
                             {{ $alumno->apellidoMaterno }}
                            </td>
                            <td> {{ $alumno->domicilio }}</td>
                            <td> {{ $alumno->colonia }}</td>

                            <th>
                                <img style="width: 40px;height:40px" class="rounded-circle"
                                    src="{{ Storage::disk('public')->url($alumno->foto ? $alumno->foto : 'images/alumnos/default.png') }}"
                                    alt="">
                            </th>
                            <td>
                                <a href="#" title="Ver más"
                                    class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a href="#" title="Editar"
                                    class="btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></i></a>
                                <a href="#" title="Eliminar"
                                    class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>



                </tbody> --}}
            </table>



        {{-- </div> --}}



    </div>
</div>
