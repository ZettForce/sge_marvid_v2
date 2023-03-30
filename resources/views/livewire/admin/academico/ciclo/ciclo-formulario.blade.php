<div>

    <form>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Clave</label>
                    <input wire:model.defer="ciclo.clave" pattern="[0-9.-]{6,6}" data-inputmask="'mask': '(999)99' minlength="6" maxlength="6" onkeyup="this.value = this.value.toUpperCase();" placeholder="2022-1" type="text" class="form-control">
                    @error('ciclo.clave')
                        <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label>Descripción</label>
                    <input wire:model.defer="ciclo.descripcion" onkeyup="this.value = this.value.toUpperCase();" placeholder="Descripción" type="text" class="form-control">
                    @error('ciclo.descripcion')
                        <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>* Fecha Inicio</label>
                    <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                        <input wire:model.defer="ciclo.inicia" placeholder="Select date" type="date"
                            id="example" class="form-control">
                        @error('ciclo.inicia')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label>* Fecha Fin</label>
                    <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                        <input wire:model.defer="ciclo.termina" placeholder="Select date" type="date"
                            id="example" class="form-control">
                        @error('ciclo.termina')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                </div>

            </div>

        </div>
    </form>



</div>
