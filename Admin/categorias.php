<div>
    <div class="row mb-4">
        <div class="col-lg-8">
            <p>Categorias disponibles para las recetas</p>
        </div>
        <div class="col">
            <button type="button" data-toggle="modal" data-target="#staticBackdrop" class="btn btn-info mb-2"><small><i class="icon ion-md-add mr-2"></i>Nueva Categoria</small></button>
        </div>
    </div>
    <div>
        <table class="table table-hover" id="tabla-categoria">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Categoria</th>
                <th scope="col">Descripción</th>
                <th scope="col">Foto</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM Categorias";
                    $result = $conex->query($sql);
                    while ($dat = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $dat['Id'] ?></td>
                            <td><?php echo $dat['Categoria'] ?></td>
                            <td><?php echo $dat['Descripcion'] ?></td>
                            <td class="centrar"><img class="espacio" height="100px" src="data:image/jpg;base64,<?php echo base64_encode($dat['Foto']); ?>" alt=""></td>
                            <td></td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal nueva categoria-->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Nueva Categoria</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="" method="POST" id="formNuevaCategoria" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Categoria</label>
                    <input type="text" required class="form-control" name="Nuevacategoria" aria-describedby="" id="Nuevacategoria">
                    <small id="" class="form-text text-muted">Añade una nueva categoria con la que se podran clasificar las recetas.</small>
                </div>
                <div class="form-group">
                    <label for="">Descripcion</label>
                    <input type="text" required class="form-control" name="nuevadescripcion" id="nuevadescripcion">
                </div>
                <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" required class="form-control" name="archivo" id="nuevaFoto">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="anadir" id="anadir">Añadir</button>
            </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal editar categoria-->
<div class="modal fade" id="editarCategoria" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Editar Categoria</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="" id="formEditarCat">
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" hidden id="eid">
                    <label for="">Categoria</label>
                    <input type="text" required class="form-control" id="ecategoria" aria-describedby="">
                    <small id="" class="form-text text-muted">Añade una nueva categoria con la que se podran clasificar las recetas.</small>
                </div>
                <div class="form-group">
                    <label for="">Descripcion</label>
                    <input type="text" required class="form-control" id="edescripcion">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Borrar-->
<div class="modal fade" id="borrarCategoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Borrar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" id="formBorracat">
        <div class="modal-body">
          <label for="">La categoria se borrará así como todas las recetas que esten relacionadas con esta categoria. <br> <br>¿Seguro de eliminar la categoria?</label>
          <input type="number" id="idcat" class="form-control" hidden>
          <input type="text" id="nombreCatB" class="form-control" disabled>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Eliminar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal editar foto-->
<div class="modal fade" id="editarfoto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar foto de la Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" id="formBorrar">
        <div class="modal-body">
            <input type="text" name="" hidden id="idfoto">
            <div class="form-group">
                <label for="">Nueva Foto</label>
                <input type="file" required class="form-control" id="">
            </div>
            <div class="form-group">
                <small>La categoria no puede quedarse sin una foto, por lo tanto no es posible eliminar la foto actual, solo se puede actualizar.</small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
include('vistas/regiCat.php');
?>



<!-- JQuery, Popper, Js, Bootstrap Js-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


<!-- Datatables js-->
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
<script src="Js/cate.js"></script>