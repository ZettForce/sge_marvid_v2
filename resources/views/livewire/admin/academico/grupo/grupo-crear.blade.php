<div>
    <form wire:submit.prevent="crear" wire:click="$emit('saved')">
        <div class="card">
            <div class="card-header" style="text-align: center;color:white;background-color:#701630">
                Nuevo Grupo
            </div>
            <div class="card-body">
                @include('livewire.admin.academico.grupo.grupo-formulario')
            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-success btn-sm">Agregar <i class="fa fa-save"></i></button>
                <a href="{{ route('academico.grupo.index') }}"class="btn btn-danger btn-sm">Cancelar <i
                        class="fa fa-ban"></i></a>
            </div>
        </div>

    </form>
</div>
