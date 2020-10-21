<!-- Modal Editar usuario-->
<div class="modal fade" id="editarModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formUpdate">
        <div class="modal-body">
          <input type="text" hidden name="id" id="id">
          <label for="">Nombre</label>
          <input class="form-control" required type="text" name="nombre" placeholder="" id="nombre">
          <label>Población</label>
          <input class="form-control" required type="text" name="poblacion" placeholder="" id="poblacion">
          <label>Estado</label>
          <input class="form-control" required type="text" name="estado" placeholder="" id="estado">
          <label>pais</label>
          <input class="form-control" required type="text" name="pais" placeholder="" id="pais">
          <label>Edad</label>
          <input class="form-control" required type="number" name="edad" placeholder="" id="edad">
          <label>Descripción</label>
          <input class="form-control" required type="text" name="descripcion" placeholder="" id="descripcion">
          <label>Gustos</label>
          <input class="form-control" required type="text" name="gustos" placeholder="" id="gustos">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" value="Update">
        </div>
      </form>
    </div>
  </div>
</div>



<!-- Modal Borrar-->
<div class="modal fade" id="BorrarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Borrar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" id="formBorrar">
        <div class="modal-body">
          <label for="">El usuario será eliminado de forma permanente del sistema y ya no podrá ingresar. <br> <br> ¿Eliminar a:?</label>
          <input type="number" id="idB" class="form-control" hidden>
          <input type="text" id="nombreB" class="form-control" disabled>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Eliminar</button>
        </div>
      </form>
    </div>
  </div>
</div>