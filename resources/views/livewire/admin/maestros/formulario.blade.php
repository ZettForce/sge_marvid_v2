<div>
    <form class="bg-img">
        <div wire:loading wire:target="pictureTeacher" class="align-items-center">
            <strong>Cargando...</strong>
            <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>
        </div>
        <div class="form-row">
            <div class="col-2">
                @if ($pictureTeacher != null)
                    <img style="width: 180px;height:240px" src="{{ $pictureTeacher->temporaryUrl() }}" alt="">
                @else
                    <img style="width: 180px; height:240px;"
                        src="{{ Storage::disk('public')->url($maestro->pictureTeacher != null ? $maestro->pictureTeacher : 'images/maestros/default.png') }}"
                        alt="No picture">
                @endif

                <form>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Subir imagen</label>
                        <input wire:model="pictureTeacher" type="file" class="form-control-file"
                            id="exampleFormControlFile1">
                        @error('pictureTeacher')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </form>

            </div>
            <div class="form-group col-md-3">
                <label>Nombre *</label>
                <input wire:model.defer="maestro.primerNombre" onkeyup="this.value = this.value.toUpperCase();" type="text" class="form-control" placeholder="Jesus">
                @error('maestro.primerNombre')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            {{-- <div class="form-group col-md-3">
                <label>Segundo Nombre</label>
                <input wire:model.defer="maestro.segundoNombre" onkeyup="this.value = this.value.toUpperCase();" type="text" class="form-control" placeholder="Antonio">
                @error('maestro.segundoNombre')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div> --}}
            <div class="form-group col-md-3">
                <label>Apellido Paterno *</label>
                <input wire:model.defer="maestro.apellidoPaterno" onkeyup="this.value = this.value.toUpperCase();" type="text" class="form-control"
                    placeholder="Martínez">
                @error('maestro.apellidoPaterno')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>Apellido Materno *</label>
                <input wire:model.defer="maestro.apellidoMaterno" onkeyup="this.value = this.value.toUpperCase();" type="text" class="form-control"
                    placeholder="López">
                @error('maestro.apellidoMaterno')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>CURP *</label>
                <input wire:model.defer="maestro.curp" onkeyup="this.value = this.value.toUpperCase();" type="text" class="form-control"
                    placeholder="MAHF890207HSRRRL01" minlength="18" maxlength="18">
                @error('maestro.curp')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label>Sexo *</label>
                <select wire:model.defer="maestro.sexo" type="text" onkeyup="this.value = this.value.toUpperCase();" class="form-control" placeholder="Calle y Número">
                    <option selected>Selecciona...</option>
                    <option>Femenino</option>
                    <option>Masculino</option>
                </select>
                @error('maestro.sexo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>Domicilio *</label>
                <input wire:model.defer="maestro.domicilio" onkeyup="this.value = this.value.toUpperCase();" type="text" class="form-control"
                    placeholder="Calle y Número">
                @error('maestro.domicilio')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>Colonia *</label>
                <select wire:model.defer="maestro.colonia" onkeyup="this.value = this.value.toUpperCase();" class="form-control">
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
                @error('maestro.colonia')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-1">
                <label>C.P</label>
                <input wire:model.defer="maestro.zip" pattern="[0-9]{5,5}" data-inputmask="'mask': '(999)99'" type="text" class="form-control" placeholder="83499" minlength="5" maxlength="5" pattern="^[0-9]{0,12}([,][0-9]{2,2})?$" >
                @error('maestro.zip')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Télefono Celular *</label>
                <input wire:model.defer="maestro.t_celular"  pattern="[0-9]{1,10}" data-inputmask="'mask': '(999) 999-9999'" type="text" class="form-control"
                    placeholder="(653) 123 1234" minlength="10" maxlength="10">
                @error('maestro.t_celular')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>Télefono Casa </label>
                <input wire:model.defer="maestro.t_casa"  pattern="[0-9]{1,10}" data-inputmask="'mask': '(999) 999-9999'" type="text" class="form-control"
                    placeholder="(653) 123 1234" minlength="10" maxlength="10">
                @error('maestro.t-casa')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>* Fecha Nacimiento</label>
                <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                    <input wire:model.defer="maestro.f_nacimiento" placeholder="Select date" type="date"
                        id="example" class="form-control">
                    @error('maestro.f_nacimiento')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
            </div>
            <div class="form-group col-md-3">
                <label>Nacionalidad *</label>
                <select wire:model.defer="maestro.nacionalidad" onkeyup="this.value = this.value.toUpperCase();" class="form-control">
                    <option selected>Selecciona...</option>
                    <option>México</option>
                    <option>Estados Unidos</option>
                    <option>Guatemala</option>
                    <option>Venezuela</option>
                </select>
                @error('maestro.nacionalidad')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


        </div>
        <br>
        <br>
        <br>
        <div class="card-header" style="text-align: center;color:white;background-color:#701630">
            Información Medica
        </div>
        <br>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Enfermedades o Alergias *</label>
                <input wire:model.defer="maestro.enfermedades" onkeyup="this.value = this.value.toUpperCase();" type="text" class="form-control"
                    placeholder="Ninguna">
                @error('maestro.enfermedades')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="form-group col-md-4">
                <label>Emergencias se atenderan *</label>
                <select wire:model.defer="maestro.atencionMedica" onkeyup="this.value = this.value.toUpperCase();" class="form-control">
                    <option selected>Selecciona...</option>
                    <option>IMMS</option>
                    <option>ISSTE</option>
                    <option>ISSTESON</option>
                    <option>OTRO</option>
                </select>
                @error('maestro.atencionMedica')
                    <span class="text-danger">{{ $message }}</span>
                @enderror


            </div>
            <div class="form-group col-md-4">
                <label>Grupo Sanguíneo *</label>
                <select wire:model.defer="maestro.grupoSanguineo" type="text" class="form-control"
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
                @error('maestro.grupoSanguineo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

        </div>
        <br>
        <br>
        <div class="card-header" style="text-align: center;color:white;background-color:#701630">
            Datos de Contacto
        </div>
        <br>


        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nombre del Padre *</label>
                <input wire:model.defer="maestro.nombrePadre" onkeyup="this.value = this.value.toUpperCase();" type="text" class="form-control"
                    placeholder="Jesús Martínez">
                @error('maestro.nombrePadre')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Nombre de la Madre *</label>
                <input wire:model.defer="maestro.nombreMadre" onkeyup="this.value = this.value.toUpperCase();" type="text" class="form-control"
                    placeholder="Alicia Cancino">
                @error('maestro.nombreMadre')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Dirección *</label>
                <input wire:model.defer="maestro.direccion" onkeyup="this.value = this.value.toUpperCase();" type="text" class="form-control"
                    placeholder="Direccion">
                @error('maestro.direccion')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="form-group col-md-4">
                <label>Tel de Trabajo</label>
                <input wire:model.defer="maestro.tel_trabajo" pattern="[0-9]{1,10}" data-inputmask="'mask': '(999) 999-9999'" type="text" class="form-control"
                    placeholder="6535187931" minlength="10" maxlength="10">
                @error('maestro.tel_trabajo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="form-group col-md-4">
                <label>Tel Celular *</label>
                <input wire:model.defer="maestro.tel_celular"  pattern="[0-9]{1,10}" data-inputmask="'mask': '(999) 999-9999'" type="text" class="form-control"
                    placeholder="6535170560" minlength="10" maxlength="10">
                @error('maestro.tel_celular')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>

        </div>

        * campos obligatorios
    </form>
</div>
