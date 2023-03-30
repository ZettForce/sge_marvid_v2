<div>
    <form {{-- wire:submit.prevent="editar" --}}>
        <div class="card">
            <div class="card-header" style="text-align: center;color:white;background-color:maroon">
                Editar Alumno
            </div>
            <div class="card-body">
                @include('livewire.admin.alumnos.formulario')
            </div>
            <div class="card-footer text-muted">
                <button wire:loading.attr="disabled" class="btn btn-primary btn-sm">Actualizar <i
                        class="fa fa-pencil"></i></button>
                <a {{-- href="{{ route('alumnos.index') }}" --}} class="btn btn-danger btn-sm">Cancelar <i class="fa fa-ban"></i></a>
            </div>
        </div>
    </form>
</div>
