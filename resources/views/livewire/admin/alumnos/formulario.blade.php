<div>
    <form class="bg-img">
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Primer Nombre *</label>
                <input wire:model.defer="alumno.primerNombre" type="text" class="form-control" placeholder="Jesus">
                @error('alumno.primerNombre')
                    <span class="text-danger">{{ $message }}</span>
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
                <input wire:model.defer="alumno.apellidoMaterno" type="text" class="form-control"
                    placeholder="López">
                @error('alumno.apellidoMaterno')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>CURP *</label>
                <input wire:model.defer="alumno.curp" type="text" class="form-control"
                    placeholder="MAHF890207HSRRRL01" minlength="18" maxlength="18">
                @error('alumno.curp')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label>Sexo *</label>
                <select wire:model.defer="alumno.sexo" type="text" class="form-control" placeholder="Calle y Número">
                    <option selected>Selecciona...</option>
                    <option>Femenino</option>
                    <option>Masculino</option>
                </select>
                @error('alumno.sexo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>Domicilio *</label>
                <input wire:model.defer="alumno.domicilio" type="text" class="form-control"
                    placeholder="Calle y Número">
                @error('alumno.domicilio')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>Colonia *</label>
                <select wire:model.defer="alumno.colonia" class="form-control">
                    <option selected>Selecciona...</option>
                    <option>10 de Abril</option>
                    <option>Aeropuerto</option>
                    <option>Alameda</option>
                    <option>Altar</option>
                    <option>Aviación</option>
                    <option>Bellavista</option>
                    <option>Burócrata</option>
                    <option>Campamento</option>
                    <option>Campestre</option>
                    <option>Chula Vista 2 del Parque</option>
                    <option>Chula Vista I</option>
                    <option>Chula Vista II</option>
                    <option>Chula Vista III</option>
                    <option>Comercial</option>
                    <option>Cuauhtémoc</option>
                    <option>Del Bosque</option>
                    <option>Del Parque</option>
                    <option>Del Río</option>
                    <option>Diana Residencial</option>
                    <option>Federal</option>
                    <option>Industrial</option>
                    <option>Jalisco</option>
                    <option>Joyas del Parque</option>
                    <option>La Grullita</option>
                    <option>La Mesa</option>
                    <option>La Mesa</option>
                    <option>Las Palmas</option>
                    <option>Libertad</option>
                    <option>Los Adobes</option>
                    <option>Los Portales</option>
                    <option>México</option>
                    <option>Mezquite</option>
                    <option>Misión Del Sol</option>
                    <option>Nuevo Palmira</option>
                    <option>Nuevo San Luis</option>
                    <option>Oasis</option>
                    <option>Paraiso del Bosque</option>
                    <option>Parque Industrial</option>
                    <option>Progreso</option>
                    <option>Reforma</option>
                    <option>Residencias</option>
                    <option>Ruiz Cortines</option>
                    <option>Solidaridad</option>
                    <option>Sonora</option>
                    <option>Villa Colonial</option>
                    <option>Villa Las Flores</option>
                    <option>Villas del Río</option>

                </select>
                @error('alumno.colonia')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-1">
                <label>C.P</label>
                <input wire:model.defer="alumno.zip" type="number" class="form-control" placeholder="83499" minlength="5" maxlength="5" pattern="^[0-9]{0,12}([,][0-9]{2,2})?$" >
                @error('alumno.zip')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Télefono Celular *</label>
                <input wire:model.defer="alumno.t_celular" type="number" class="form-control"
                    placeholder="(653) 123 1234" minlength="10" maxlength="10">
                @error('alumno.t_celular')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>Télefono Casa </label>
                <input wire:model.defer="alumno.t_casa" type="number" class="form-control"
                    placeholder="(653) 123 1234" minlength="10" maxlength="10">
                @error('alumno.t-casa')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>* Fecha Nacimiento</label>
                <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                    <input wire:model.defer="alumno.f_nacimiento" placeholder="Select date" type="date"
                        id="example" class="form-control">
                    @error('alumno.f_nacimiento')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
            </div>
            <div class="form-group col-md-3">
                <label>Nacionalidad *</label>
                <select wire:model.defer="alumno.nacionalidad" class="form-control">
                    <option selected>Selecciona...</option>
                    <option>México</option>
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
        <div class="card-header" style="text-align: center;color:white;background-color:#701630">
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
                <input wire:model.defer="alumno.proce_estado" type="text" class="form-control" placeholder="Estado">
                @error('alumno.proce_estado')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label>Promedio</label>
                <input wire:model.defer="alumno.proce_promedio" type="number" class="form-control" placeholder="100">
                @error('alumno.proce_promedio')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <br>
        <br>
        <div class="card-header" style="text-align: center;color:white;background-color:#701630">
            Información Medica
        </div>
        <br>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label>Enfermedades o Alergias *</label>
                <input wire:model.defer="alumno.enfermedades" type="text" class="form-control"
                    placeholder="Ninguna">
                @error('alumno.enfermedades')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="form-group col-md-5">
                <label>Emergencias se atenderan en *</label>
                <select wire:model.defer="alumno.atencionMedica" class="form-control">
                    <option selected>Selecciona...</option>
                    <option>IMMS</option>
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
                <select wire:model.defer="alumno.grupoSanguineo" type="text" class="form-control"
                    placeholder=" O Positivo (O+)">
                    <option selected>Selecciona...</option>
                    <option>A positivo (A +)</option>
                    <option>A negativo (A-)</option>
                    <option>B positivo (B +)</option>
                    <option>B negativo (B-)</option>
                    <option>AB positivo (AB+)</option>
                    <option>O positivo (O+)</option>
                    <option>O negativo (O-)</option>
                </select>
                @error('alumno.grupoSanguineo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

        </div>
        <br>
        <br>
        <div class="card-header" style="text-align: center;color:white;background-color:#701630">
            Datos del Tutor
        </div>
        <br>


        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Nombre del Padre *</label>
                <input wire:model.defer="alumno.nombrePadre" type="text" class="form-control"
                    placeholder="Ninguna">
                @error('alumno.nombrePadre')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label>Nombre de la Madre *</label>
                <input wire:model.defer="alumno.nombreMadre" type="text" class="form-control"
                    placeholder="Ninguna">
                @error('alumno.nombreMadre')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label>Nombre del Tutor </label>
                <input wire:model.defer="alumno.nombreTutor" type="text" class="form-control"
                    placeholder="Ninguna">
                @error('alumno.nombreTutor')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Dirección *</label>
                <input wire:model.defer="alumno.direccion" type="text" class="form-control"
                    placeholder="Direccion">
                @error('alumno.direccion')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="form-group col-md-4">
                <label>Tel de Trabajo</label>
                <input wire:model.defer="alumno.tutor_tel_trabajo" type="number" class="form-control"
                    placeholder="6535187931" minlength="10" maxlength="10">
                @error('alumno.tutor_tel_trabajo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="form-group col-md-4">
                <label>Tel Celular *</label>
                <input wire:model.defer="alumno.tutor_tel_celular" type="number" class="form-control"
                    placeholder="6535170560" minlength="10" maxlength="10">
                @error('alumno.tutor_tel_celular')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>

        </div>

        * campos obligatorios
    </form>
</div>
