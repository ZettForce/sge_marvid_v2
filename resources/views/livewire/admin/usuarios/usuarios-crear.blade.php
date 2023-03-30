<div>

    <form wire:submit.prevent="crear" wire:click="$emit('saved')">
        <div class="card">
            <div class="card-header" style="text-align: center;color:white;background-color:#701630">
                Nuevo usuario
            </div>
            <div class="card-body">
                @include('livewire.admin.usuarios.formulario')
            </div>
            <div class="card-footer text-muted">
                <button wire:loading.attr="disabled" wire:target="foto" class="btn btn-success btn-sm">Agregar <i
                        class="fa fa-save"></i></button>
                <a href="{{ route('usuarios.index') }}" class="btn btn-danger btn-sm">Cancelar <i class="fa fa-ban"></i></a>
            </div>
        </div>

    </form>
</div>
