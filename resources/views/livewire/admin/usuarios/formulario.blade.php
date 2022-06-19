<div>
    <form class="bg-img">
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Primer Nombre *</label>
                <input wire:model.defer="usuario.primerNombre" type="text" class="form-control" placeholder="Jesus">
                @error('usuario.primerNombre')<span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>Segundo Nombre</label>
                <input wire:model.defer="usuario.segundoNombre" type="text" class="form-control" placeholder="Antonio">
                @error('usuario.segundoNombre')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>Apellido Paterno *</label>
                <input wire:model.defer="usuario.apellidoPaterno" type="text" class="form-control"
                    placeholder="Martínez">
                @error('usuario.apellidoPaterno')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>Apellido Materno *</label>
                <input wire:model.defer="usuario.apellidoMaterno" type="text" class="form-control" placeholder="López">
                @error('usuario.apellidoMaterno')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Domicilio *</label>
                <input wire:model.defer="usuario.domicilio" type="text" class="form-control"
                    placeholder="Calle y Número">
                @error('usuario.domicilio')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label>Colonia *</label>
                <select wire:model.defer="usuario.colonia" class="form-control">
                    <option selected>Selecciona...</option>
                    <option>Campamento</option>
                    <option>Campestre</option>
                    <option>Chula Vista I</option>
                    <option>Del Bosque</option>
                    <option>La Grullita</option>
                </select>
                @error('usuario.colonia')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label>Sexo *</label>
                <select wire:model.defer="usuario.sexo" class="form-control">
                    <option selected>Selecciona...</option>
                    <option>Masculino</option>
                    <option>Femenino</option>
                </select>
                @error('usuario.sexo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label>Curp</label>
                <input wire:model.defer="usuario.curp" type="text" class="form-control">
                @error('usuario.curp')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label>Código Postal</label>
                <input wire:model.defer="usuario.zip" type="text" class="form-control">
                @error('usuario.zip')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Télefono Celular *</label>
                <input wire:model.defer="usuario.t_celular" type="text" class="form-control"
                    placeholder="(653) 123 1234">
                @error('usuario.t_celular')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>Télefono Casa </label>
                <input wire:model.defer="usuario.t-casa" type="text" class="form-control" placeholder="(653) 123 1234">
                @error('usuario.t-casa')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>* Fecha Nacimiento <i class="fas fa-calendar input-prefix"></i> </label>
                <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                    <input wire:model.defer="usuario.f_nacimiento" placeholder="Select date" type="text" id="example"
                        class="form-control">
                    @error('usuario.f_nacimiento')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
            </div>
            <div class="form-group col-md-3">
                <label>Nacionalidad *</label>
                <select wire:model.defer="usuario.nacionalidad" class="form-control">
                    <option selected>Mexico</option>
                    <option>Estados Unidos</option>
                    <option>Guatemala</option>
                    <option>Venezuela</option>
                </select>
                @error('usuario.nacionalidad')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Correo Electronico</label>
                <input wire:model.defer="usuario.email" type="email" class="form-control"
                    placeholder="ejemplo@gmail.com">
                @error('usuario.domicilio')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Contraseña</label>
                <input wire:model.defer="usuario.password" type="password" class="form-control"
                    placeholder="*******">
                @error('usuario.domicilio')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
           
        </div>
        <br>


        * campos obligatorios
    </form>
</div>
