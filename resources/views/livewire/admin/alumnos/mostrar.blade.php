@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Alumnos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('index.home') }}">Inico</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('alumnos.index') }}">Alumnos</a></li>
                    <li class="breadcrumb-item active">Mostrar</li>
                </ol>
            </div>
        </div>
    </div>
@stop
<div>
    <div class="container mt-5">
        <div class="card card-danger card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <label><i class="fa-solid fa-universal-access"></i> Acciones:</label>
                </h3>
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-primary toastsDefaultDefault">
                    Constancia <i class="fas fa-file-alt"></i>
                </button>
                <button type="button" class="btn btn-primary toastsDefaultDefault">
                    Inscribir <i class="fas fa-pen-alt"></i>
                </button>
                <button type="button" class="btn btn-primary toastsDefaultDefault">
                    Boleta <i class="fas fa-book-open"></i>
                </button>
                {{-- <button type="button" class="btn btn-primary toastsDefaultDefault">
                    Launch Full Toast
                    </button> --}}
            </div>
        </div>
        <div class="row">
            {{-- <div class="col-4">
                @if ($picture != null)
                    <img style="width: 230px;height:230px" src="{{ $picture->temporaryUrl() }}" alt="">
                @else
                    <img style="width: 230px; height: 230px;"
                        src="{{ Storage::disk('public')->url($usuario->picture != null ? $agregar->picture : 'images/alumnos/default.png') }}"
                        alt="No picture">
                @endif
            </div> --}}
            <div class="col-sm-12">
                <h2>{{ $alumno->primerNombre }} {{ $alumno->segundoNombre }} {{ $alumno->apellidoPaterno }}
                    {{ $alumno->apellidoMaterno }} | {{ $alumno->matricula }}</h2>
            </div>
            <div class="card-body">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <label>Fecha de nacimiento: </label>
                            <h6>{{ $alumno->f_nacimiento }}</h6>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <label>Nacionalidad: </label>
                            <h6>{{ $alumno->nacionalidad }}</h6>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <label>Sexo: </label>
                            <h6>{{ $alumno->sexo }}</h6>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <label>CURP: </label>
                            <h6>{{ $alumno->curp }}</h6>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <label>Domicilio: </label>
                            <h6>{{ $alumno->domicilio }}, Col. {{ $alumno->colonia }}, C.P {{ $alumno->zip }}</h6>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <label>Teléfono Celular: </label>
                            <h6>{{ $alumno->t_celular }}</h6>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <label>Teléfono Casa: </label>
                            <h6>{{ $alumno->t_casa }}</h6>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<div class="card card-danger card-outline">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-edit"></i>
            Información Detallada
        </h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-5 col-sm-3">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                    aria-orientation="vertical">
                    <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home"
                        role="tab" aria-controls="vert-tabs-home"><i class="fa-solid fa-stethoscope"></i>
                        Información Medica</a>
                    <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile"
                        role="tab" aria-controls="vert-tabs-profile"><i class="fa-solid fa-address-book"></i>
                        Datos del Tutor</a>
                    <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages"
                        role="tab" aria-controls="vert-tabs-messages"><i class="fa-solid fa-clipboard-check"></i>
                        Documentos Entregados</a>
                    <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings"
                        role="tab" aria-controls="vert-tabs-settings"><i class="fa-solid fa-book-open-reader"></i>
                        Control Escolar</a>
                </div>
            </div>
            <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">
                    <div class="tab-pane text-left fade active show" id="vert-tabs-home" role="tabpanel"
                        aria-labelledby="vert-tabs-home-tab">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Enfermedades o Alergias:</label>
                                <p>{{ $alumno->enfermedades }}</p>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Grupo Sanguíneo:</label>
                                <p>{{ $alumno->grupoSanguineo }}</p>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Emergencias se atenderán en:</label>
                                <p>{{ $alumno->atencionMedica }}</p>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel"
                        aria-labelledby="vert-tabs-profile-tab">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Nombre del padre:</label>
                                <p>{{ $alumno->nombrePadre }}</p>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Nombre de la Madre:</label>
                                <p>{{ $alumno->nombreMadre }}</p>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Nombre del Tutor:</label>
                                <p>{{ $alumno->nombreTutor }}</p>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Dirección:</label>
                                <p>{{ $alumno->direccion }}</p>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Teléfono de Casa:</label>
                                <p>{{ $alumno->tutor_tel_trabajo }}</p>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Teléfono Celular:</label>
                                <p>{{ $alumno->tutor_tel_celular }}</p>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel"
                        aria-labelledby="vert-tabs-messages-tab">
                        Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat
                        augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit
                        sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut
                        velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus
                        tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet
                        sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum
                        gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt
                        eleifend ac ornare magna.
                    </div>
                    <div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel"
                        aria-labelledby="vert-tabs-settings-tab">
                        Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus
                        turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis
                        vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum
                        pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet
                        urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse
                        platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                    </div>
                </div>
            </div>
        </div>
