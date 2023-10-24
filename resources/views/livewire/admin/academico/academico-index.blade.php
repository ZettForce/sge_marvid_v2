<div>
    @section('content_header')
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Academico</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('index.home') }}">Inico</a></li>
                        <li class="breadcrumb-item active">Academico</li>
                    </ol>
                </div>
            </div>
        </div>
    @stop
    @section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>Ciclo</h3>
                        </div>
                        <div class="icon">
                            <i class="fas fas fa-shapes"></i>
                        </div>
                        <a href="{{ route('ciclo.index') }}" title="Crear, Editar Ciclos" class="small-box-footer">Ver más
                            <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>Asignaturas<sup style="font-size: 20px"></sup></h3>
                        </div>
                        <div class="icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <a href="{{ route('asignatura.index') }}" title="Crear, Editar Asignaturas"
                            class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>Grupos</h3>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <a href="{{ route('academico.grupo.index') }}" title="Crear, Editar Grupos"
                            class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>Plan de Estudio</h3>
                        </div>
                        <div class="icon">
                            <i class="fas fa-apple-alt"></i>
                        </div>
                        <a href="{{ route('estudios.index') }}" title="Crear, Editar Plan de Estudios"
                            class="small-box-footer ">Ver más <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>Clases</h3>
                        </div>
                        <div class="icon">
                            <i class="fas fa-microscope"></i>
                        </div>
                        <a href="#" title="Asignar Clases a Maestros" class="small-box-footer">Ver más <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    @stop
</div>
