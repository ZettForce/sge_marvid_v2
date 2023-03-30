<div>
    <div class="card mx-auto" style="width: 18rem;">
          <div class="card-body">
            <p class="card-text">{{$ciclo->clave}}</p>
            <button wire:click="eliminar" class="btn btn-danger btn-sm">Confirmar <i class="fa fa-trash" aria-hidden="true"></i></button>
            <a href="{{route('ciclo.index')}}" class="btn btn-primary btn-sm">Cancelar <i class="fa fa-save" aria-hidden="true"></i></a>
          </div>
        </div>
</div>
