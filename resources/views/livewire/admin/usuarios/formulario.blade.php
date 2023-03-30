<div class="row">

    {{-- Aparece mientras carga la foto --}}
    <div wire:loading wire:target="foto" class="align-items-center">
        <strong>Cargando...</strong>
        <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>
    </div>
    <div class="col-6 mx-auto">

        <div class="form-group">
            <label>Correo electronico</label>
            <input wire:model.defer="usuario.email" type="email" placeholder="usuario@example.com"
                class="form-control">
            @error('usuario.email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label>Password</label>
            <input autocomplete="new-password" wire:model="password" type="password" class="form-control">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label> Confirmar Password</label>
            <input wire:model="confirmar_password" type="password" class="form-control">
            @error('confirmar_password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>


</div>
