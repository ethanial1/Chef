<!--Modal de edición -->
<div class="modal fade" id="edition" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" id="formGuardar">
            <div class="modal-body">
                <div class="form-group">
                    <input type="number" id="id" hidden>
                    <label for="" class="col-form-label">Nombre</label>
                    <input type="text" id="nombre" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label for="" class="col-form-label">Cantidad de Productos permitidos:</label>
                    <input type="number" id="cantidad" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Borrar-->
<div class="modal fade" id="borrarUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Borrar al Vendedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" id="borrarusuario">
        <div class="modal-body">
            <label for="">AL borrar al vendedor, se borraran todos los productos relacionados con este.<br> <br> ¿Deseas eliminar al vendedor?</label>
            <input type="number" id="idB" class="form-control" hidden>
            <input type="text" id="nombreB" class="form-control" disabled>
            <input type="text" id="userB" class="form-control" hidden>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Eliminar</button>
        </div>
      </form>
    </div>
  </div>
</div>