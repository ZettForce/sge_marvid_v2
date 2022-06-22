<div>



    <legend>Vista Estudiante</legend>
    <left>Periodo
        <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
            <option>2010-I</option>
            <option>2010-II</option>
            <option>2011-I</option>
            <option>2011-II</option>
        </select>
        <br>
        <br>
    </left>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Calificaciones</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right"
                                placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Grupos</th>
                                <th>Maestro(a)</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>183</td>
                                <td>John Doe</td>
                                <td><a {{-- href="{{ route('alumnos.mostrar', $alumno) }}" --}} title="Ver más" class="btn btn-info btn-sm"><i
                                            class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a {{-- href="{{ route('editar.alumnos', $alumno) }}" --}} title="Editar" class="btn btn-primary btn-sm"><i
                                            class="fa fa-pencil" aria-hidden="true"></i></i></a>
                                </td>

                            </tr>
                            <tr>
                                <td>219</td>
                                <td>Alexander Pierce</td>
                                <td><a {{-- href="{{ route('alumnos.mostrar', $alumno) }}" --}} title="Ver más" class="btn btn-info btn-sm"><i
                                            class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a {{-- href="{{ route('editar.alumnos', $alumno) }}" --}} title="Editar" class="btn btn-primary btn-sm"><i
                                            class="fa fa-pencil" aria-hidden="true"></i></i></a>
                                </td>

                            </tr>
                            <tr>
                                <td>657</td>
                                <td>Bob Doe</td>
                                <td><a {{-- href="{{ route('alumnos.mostrar', $alumno) }}" --}} title="Ver más" class="btn btn-info btn-sm"><i
                                            class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a {{-- href="{{ route('editar.alumnos', $alumno) }}" --}} title="Editar" class="btn btn-primary btn-sm"><i
                                            class="fa fa-pencil" aria-hidden="true"></i></i></a>
                                </td>

                            </tr>
                            <tr>
                                <td>175</td>
                                <td>Mike Doe</td>
                                <td><a {{-- href="{{ route('alumnos.mostrar', $alumno) }}" --}} title="Ver más" class="btn btn-info btn-sm"><i
                                            class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a {{-- href="{{ route('editar.alumnos', $alumno) }}" --}} title="Editar" class="btn btn-primary btn-sm"><i
                                            class="fa fa-pencil" aria-hidden="true"></i></i></a>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>
