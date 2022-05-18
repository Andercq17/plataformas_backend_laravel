<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$cliente->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="{{route('cliente.destroy', $cliente->id)}}" method="post">
    @csrf
    @method('DELETE')
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¡Cuidado!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿ Enserio deseas eliminar a {{$cliente->nombres." ".$cliente->apellidos}} ? :,c
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
      </div>
    </div>
  </form>  
  </div>
</div>