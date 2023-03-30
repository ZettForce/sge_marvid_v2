<div>

    <div class="card-header">
    </div>


    <form>
        <div class="card-body">
            <div class="form-row" >
                <div class="form-group col-md-6">
                    <label>Clave</label>
                    <input wire:model.defer="asignatura.clave" pattern="[0-9]{3,3}" data-inputmask="'mask': '(999)'" type="text" class="form-control" placeholder="201" >
                    @error('asignatura.clave')
                        <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label>Nombre de la Asignatura</label>
                    <input wire:model.defer="asignatura.descripcion" onkeyup="this.value = this.value.toUpperCase();" type="text" class="form-control" placeholder="Matematicas I" >
                    @error('asignatura.descripcion')
                        <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>

            </div>
        </div>
    </form>



</div>
