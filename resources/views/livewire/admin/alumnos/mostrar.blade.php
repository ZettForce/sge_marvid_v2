<div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                <h3>{{ $alumno->matricula }}</h3>
                {{-- <h5>{{$alumno->apellidoPaterno}} {{$alumno->apellidoMaterno}}</h5> --}}
                <div class="fakeimg"><img class="card-img-top" {{-- width="80px" height="220px" --}}
                        src="{{ Storage::disk('public')->url($alumno->foto ? $alumno->foto : 'images/otros/alumnos/defaultStudent.png') }}"
                        alt="Card image cap"></div>
                <p>Aqui va el boton para cambiar imagen</p>
                <h3 class="mt-4">Acciones</h3>
                {{-- <p>Lorem ipsum dolor sit ame.</p> --}}
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Editar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inscribir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Calificaciones</a>
                    </li>

                </ul>
                <hr class="d-sm-none">
            </div>
            <div class="col-sm-8">
                <h2>{{ $alumno->primerNombre }} {{ $alumno->segundoNombre }} {{ $alumno->apellidoPaterno }}
                    {{ $alumno->apellidoMaterno }}</h2>
                <h5>Title description, Dec 7, 2020</h5>
                <div class="fakeimg">Fake Image</div>
                <p>Some text..</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco.</p>
                {{-- Informacion medica --}}
                <div class="card-header" style="text-align:center;color:white;background-color:#701630">
                    <h4><i class="fa-solid fa-hospital"></i> Información Medica</h4>
                </div>
                {{-- <h4 class="mt-5"><i class="fa-solid fa-hospital"></i> Información Medica</h4> --}}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <h5>Enfermedades o Alergias : <br> </h5>
                        <h6>{{ $alumno->enfermedades }}</h6>

                    </div>
                    <div class="form-group col-md-6">
                        <h5>Grupo Sanguíneo : <br> </h5>
                        <h6>{{ $alumno->grupoSanguineo }}</h6>

                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h5>Emergencias se atenderán en : <br> </h5>
                        <h6>{{ $alumno->atencionMedica }}</h6>

                    </div>
                </div>
                {{-- Fin Informacion medica --}}
                {{-- Datos tutor --}}
                <div class="card-header" style="text-align:center;color:white;background-color:#701630">
                    <h4><i class="fa-solid fa-address-book"></i> Datos del Tutor</h4>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <h5>Nombre del Padre : <br> </h5>
                        <h6>{{ $alumno->nombrePadre }}</h6>

                    </div>
                    <div class="form-group col-md-4">
                        <h5>Nombre de la Madre : <br> </h5>
                        <h6>{{ $alumno->nombreMadre }}</h6>

                    </div>
                    <div class="form-group col-md-4">
                        <h5>Nombre del tutor : <br> </h5>
                        <h6>{{ $alumno->nombreTutor }}</h6>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <h5>Dirección : <br> </h5>
                        <h6>{{ $alumno->direccion }}</h6>

                    </div>
                    <div class="form-group col-md-4">
                        <h5>Telefono de Casa : <br> </h5>
                        <h6>{{ $alumno->tutor_tel_trabajo }}</h6>

                    </div>
                    <div class="form-group col-md-4">
                        <h5>Telefono Celular : <br> </h5>
                        <h6>{{ $alumno->tutor_tel_celular }}</h6>
                    </div>
                </div>

                {{-- Fin Datos tutor --}}
            </div>
        </div>
    </div>
