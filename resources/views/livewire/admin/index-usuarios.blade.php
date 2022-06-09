<div>
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h4>Usuarios</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('index.home') }}">Inicio</a></li>
                    <li class="breadcrumb-item active">Usuarios</li>
                </ol>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-tabs">
                <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-five-tab" role="tablist">
                        {{-- inicio --}}
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-five-normal-tab" data-toggle="pill"
                                href="#custom-tabs-five-normal" role="tab" aria-controls="custom-tabs-five-normal"
                                aria-selected="false">Inicio</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-five-tabContent">
                        <div class="tab-pane fade active show" id="custom-tabs-five-normal" role="tabpanel"
                            aria-labelledby="custom-tabs-five-normal-tab">

                            {{-- inicio --}}
                            <div wire:init="cargando">
                                {{-- <div wire:poll> funciona para recargar pagina en tiempo real --}}
                                <a type="button" {{-- href="{{ route('crear.usuarios') }}" --}} class="float-right mb-3 btn btn-success">Agregar <i
                                        class="fa fa-plus" aria-hidden="true"></i></a>

                                <div class="mb-2 col-3">
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
                                        <input wire:model="search" class="form-control" placeholder="Buscar..." type="search" aria-l
                                            aria-describedby="addon-wrapping">

                                    </div>

                                </div>

                                {{-- @if (count($usuarios) > 0) --}}
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Correo</th>
                                                <th>Imagen</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($usuarios as $usuario) --}}
                                                <tr>
                                                    {{-- <th scope="row">{{ $usuario->id }}</th>
                                                    <td> {{ $usuario->username }}</td>
                                                    <td> {{ $usuario->email }}</td>
                                                    <th> --}}
                                                        {{-- <img style="width: 40px;height:40px" class="rounded-circle"
                                                            src="{{ Storage::disk('public')->url($usuario->foto ? $usuario->foto : 'images/usuarios/default.png') }}"
                                                            alt=""> --}}
                                                    </th>
                                                    <td>
                                                        <a {{-- href="{{ route('mostrar.usuarios', $usuario) }}" --}} title="Ver más"
                                                            class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                        <a {{-- href="{{ route('editar.usuarios', $usuario) }}" --}} title="Editar"
                                                            class="btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></i></a>
                                                        <a {{-- href="{{ route('borrar.usuarios', $usuario) }}" --}} title="Eliminar"
                                                            class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>



                                        </tbody>
                                    </table>


                                    <img class="mx-auto d-block" style="width: 250px; height: 250px"
                                        src="{{ Storage::disk('public')->url('images/otros/cargando.gif') }}" alt="cargando">


                                {{-- </div> --}}



                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
