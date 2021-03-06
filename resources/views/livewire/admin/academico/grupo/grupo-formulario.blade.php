<div>

    <div class="card-header">
    </div>


    <form>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Clave</label>
                    <input wire:model.defer="grupo.clave" type="text" class="form-control">
                    @error('grupo.clave')
                        <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label>Descripción</label>
                    <input wire:model.defer="grupo.descripcion" type="text" class="form-control">
                    @error('grupo.descripcion')
                        <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label>Identificador</label>
                    <input wire:model.defer="grupo.identificador" type="text" class="form-control">
                    @error('grupo.identificador')
                        <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label>Grado</label>
                    <select  type="text" class="form-control">
                        <option selected>Selecciona...</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Grado</label>
                    <select wire:model.defer="grupo.turno" type="text" class="form-control">
                        <option selected>Selecciona...</option>
                        <option>Matutino</option>
                        <option>Vespertino</option>
                    </select>
                    @error('grupo.turno')
                        <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>

            </div>
        </div>
    </form>



</div>
