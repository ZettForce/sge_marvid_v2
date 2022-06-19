<div>
    <form class="bg-img">
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Primer Nombre *</label>
                <input wire:model.defer="maestro.primerNombre" type="text" class="form-control" placeholder="Jesus">
                @error('maestro.primerNombre')<span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>Segundo Nombre</label>
                <input wire:model.defer="maestro.segundoNombre" type="text" class="form-control" placeholder="Antonio">
                @error('maestro.segundoNombre')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>Apellido Paterno *</label>
                <input wire:model.defer="maestro.apellidoPaterno" type="text" class="form-control"
                    placeholder="Martínez">
                @error('maestro.apellidoPaterno')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>Apellido Materno *</label>
                <input wire:model.defer="maestro.apellidoMaterno" type="text" class="form-control" placeholder="López">
                @error('maestro.apellidoMaterno')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Domicilio *</label>
                <input wire:model.defer="maestro.domicilio" type="text" class="form-control"
                    placeholder="Calle y Número">
                @error('maestro.domicilio')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label>Colonia *</label>
                <select wire:model.defer="maestro.colonia" class="form-control">
                    <option selected>Selecciona...</option>
                    <option>Campamento</option>
                    <option>Campestre</option>
                    <option>Chula Vista I</option>
                    <option>Del Bosque</option>
                    <option>La Grullita</option>
                </select>
                @error('maestro.colonia')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label>Sexo *</label>
                <select wire:model.defer="maestro.sexo" class="form-control">
                    <option selected>Selecciona...</option>
                    <option>Masculino</option>
                    <option>Femenino</option>
                </select>
                @error('maestro.sexo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label>Curp</label>
                <input wire:model.defer="maestro.curp" type="text" class="form-control">
                @error('maestro.curp')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label>Código Postal</label>
                <input wire:model.defer="maestro.zip" type="text" class="form-control">
                @error('maestro.zip')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Télefono Celular *</label>
                <input wire:model.defer="maestro.t_celular" type="text" class="form-control"
                    placeholder="(653) 123 1234">
                @error('maestro.t_celular')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>Télefono Casa </label>
                <input wire:model.defer="maestro.t-casa" type="text" class="form-control" placeholder="(653) 123 1234">
                @error('maestro.t-casa')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>* Fecha Nacimiento <i class="fas fa-calendar input-prefix"></i> </label>
                <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                    <input wire:model.defer="maestro.f_nacimiento" placeholder="Select date" type="text" id="example"
                        class="form-control">
                    @error('maestro.f_nacimiento')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
            </div>
            <div class="form-group col-md-3">
                <label>Nacionalidad *</label>
                <select wire:model.defer="maestro.nacionalidad" class="form-control">
                    <option selected>Mexico</option>
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


        * campos obligatorios
    </form>
</div>
