<div>

    <div class="card-header">
        <label>Ciclo</label>
        <select wire:model.defer="grupo.ciclo_id" type="text" class="form-control">
            <option selected>Selecciona...</option>
            @foreach ($ciclos as $ciclo)
                <option value="{{ $ciclo->id }}">{{ $ciclo->clave }}</option>
            @endforeach


        </select>
        @error('grupo.ciclo_id')
                <span class="text-danger">{{ $message }} </span>
            @enderror
    </div>


    <form>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Clave</label>
                    <input wire:model.defer="grupo.clave" onkeyup="this.value = this.value.toUpperCase();"
                        placeholder="1" type="text" class="form-control">
                    @error('grupo.clave')
                        <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label>Descripción</label>
                    <input wire:model.defer="grupo.descripcion" onkeyup="this.value = this.value.toUpperCase();"
                        placeholder="Descripción" type="text" class="form-control">
                    @error('grupo.descripcion')
                        <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label>Identificador</label>
                    <select wire:model.defer="grupo.identificador" type="text" class="form-control">
                        <option selected>Selecciona...</option>
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                        <option>D</option>
                        <option>E</option>
                        <option>F</option>
                    </select>
                    @error('grupo.identificador')
                        <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label>Grado</label>
                    <select wire:model.defer="grupo.grado_id" type="text" class="form-control">
                        <option selected>Selecciona...</option>
                        @foreach ($grados as $grado)
                            <option value="{{ $grado->id }}">{{ $grado->descripcion }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Turno</label>
                    <select wire:model.defer="grupo.turno" type="text" class="form-control">
                        <option selected>Selecciona...</option>
                        <option>MATUTINO</option>
                        <option>VESPERTINO</option>
                    </select>
                    @error('grupo.turno')
                        <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>

            </div>
        </div>
    </form>



</div>
