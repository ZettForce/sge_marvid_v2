<div>
    <form class="bg-img">
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Primer Nombre *</label>
                <input wire:model.defer="alumno.primerNombre" type="text" class="form-control" placeholder="Jesus">
                @error('alumno.primerNombre')<span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>Segundo Nombre</label>
                <input wire:model.defer="alumno.segundoNombre" type="text" class="form-control" placeholder="Antonio">
                @error('alumno.segundoNombre')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>Apellido Paterno *</label>
                <input wire:model.defer="alumno.apellidoPaterno" type="text" class="form-control"
                    placeholder="Martínez">
                @error('alumno.apellidoPaterno')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>Apellido Materno *</label>
                <input wire:model.defer="alumno.apellidoMaterno" type="text" class="form-control" placeholder="López">
                @error('alumno.apellidoMaterno')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Domicilio *</label>
                <input wire:model.defer="alumno.domicilio" type="text" class="form-control"
                    placeholder="Calle y Número">
                @error('alumno.domicilio')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label>Colonia *</label>
                <select wire:model.defer="alumno.colonia" class="form-control">
                    <option selected>Selecciona...</option>
                    <option>Campamento</option>
                    <option>Campestre</option>
                    <option>Chula Vista I</option>
                    <option>Del Bosque</option>
                    <option>La Grullita</option>
                </select>
                @error('alumno.colonia')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label>Código Postal</label>
                <input wire:model.defer="alumno.zip" type="text" class="form-control">
                @error('alumno.zip')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Télefono Celular *</label>
                <input wire:model.defer="alumno.t_celular" type="text" class="form-control"
                    placeholder="(653) 123 1234">
                @error('alumno.t_celular')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>Télefono Casa </label>
                <input wire:model.defer="alumno.t-casa" type="text" class="form-control" placeholder="(653) 123 1234">
                @error('alumno.t-casa')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>* Fecha Nacimiento <i class="fas fa-calendar input-prefix"></i> </label>
                <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                    <input wire:model.defer="alumno.f_nacimiento" placeholder="Select date" type="text" id="example"
                        class="form-control">
                    @error('alumno.f_nacimiento')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
            </div>
            <div class="form-group col-md-3">
                <label>Nacionalidad *</label>
                <select wire:model.defer="alumno.nacionalidad" class="form-control">
                    <option selected>México</option>
                    <option>Estados Unidos</option>
                    <option>Guatemala</option>
                    <option>Venezuela</option>
                </select>
                @error('alumno.nacionalidad')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


        </div>
        <br>
        <br>
        <div class="card-header" style="text-align: center;color:white;background-color:#800000">
            Datos de escuela de procedencia
        </div>
        <br>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Secundaria</label>
                <input wire:model.defer="alumno.proce_secundaria" type="text" class="form-control"
                    placeholder="Nombre escuela">
                @error('alumno.proce_secundaria')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label>Estado</label>
                <input wire:model.defer="alumno.proce_estado" type="text" class="form-control"
                    placeholder="Estado">
                @error('alumno.proce_estado')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label>Promedio</label>
                <input wire:model.defer="alumno.proce_promedio" type="text" class="form-control" placeholder="100">
                @error('alumno.proce_promedio')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <br>
        <br>
        <div class="card-header" style="text-align: center;color:white;background-color:#800000">
            Información Medica
        </div>
        <br>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label>Enfermedades o Alergias *</label>
                <input wire:model.defer="alumno.enfermedades" type="text" class="form-control" placeholder="Ninguna">
                @error('alumno.enfermedades')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="form-group col-md-5">
                <label>Emergencias se ateneran *</label>
                <select wire:model.defer="alumno.atencionMedica" class="form-control">
                    <option selected>IMMS</option>
                    <option>ISSTE</option>
                    <option>ISSTESON</option>
                    <option>OTRO</option>
                </select>
                @error('alumno.atencionMedica')
                    <span class="text-danger">{{ $message }}</span>
                @enderror


            </div>
            <div class="form-group col-md-2">
                <label>Grupo Sanguíneo *</label>
                <input wire:model.defer="alumno.grupoSanguineo" type="text" class="form-control" placeholder=" O+">
                @error('alumno.grupoSanguineo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

        </div>
        <br>
        <br>
        <div class="card-header" style="text-align: center;color:white;background-color:#800000">
            Datos del Tutor
        </div>
        <br>


        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Nombre del Padre *</label>
                <input wire:model.defer="alumno.nombrePadre" type="text" class="form-control" placeholder="Ninguna">
                @error('alumno.nombrePadre')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label>Nombre de la Madre *</label>
                <input wire:model.defer="alumno.nombreMadre" type="text" class="form-control" placeholder="Ninguna">
                @error('alumno.nombreMadre')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label>Nombre del Tutor </label>
                <input wire:model.defer="alumno.nombreTutor" type="text" class="form-control" placeholder="Ninguna">
                @error('alumno.nombreTutor')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Dirección *</label>
                <input wire:model.defer="alumno.direccion" type="text" class="form-control" placeholder="Ninguna">
                @error('alumno.direccion')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="form-group col-md-4">
                <label>Tel de Trabajo</label>
                <input wire:model.defer="alumno.tutor_tel_trabajo" type="text" class="form-control" placeholder="Ninguna">
                @error('alumno.tutor_tel_trabajo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="form-group col-md-4">
                <label>Tel Celular *</label>
                <input wire:model.defer="alumno.tutor_tel_celular" type="text" class="form-control" placeholder="Ninguna">
                @error('alumno.tutor_tel_celular')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>

        </div>

        * campos obligatorios
    </form>
</div>
