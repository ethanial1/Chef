<div>
    <section id="pantalla-receta">
        <div class="izquierda-receta">
            <form  name="add_receta" id="ingredientes_receta" method="POST" enctype="multipart/form-data">
                <div>
                    <input type="number" name="iduser" value="<?php echo $id ?>" hidden>
                </div>
                <div class="form-group">
                    <label for="">Nombre del Platillo.</label>
                    <input type="text" class="form-control" id="" aria-describedby="" name="nombre-platillo" required>
                    <small id="" class="form-text text-muted">Los nombres son con los que presentamos a tus recetas, asegurate de que sea atractivo...</small>
                </div>
                <div class="form-group">
                    <label for="">Imagen</label>
                    <input type="file" class="form-control" name="foto" id="foto" required>
                </div>
                <div class="form-group">
                    <label for="">Categoria</label>
                    <select name="categoriaP" id="" class="form-control" required>
                        <option value="" disabled selected>Categorias</option>
                        <?php
                            $consulta = "Select Id, Categoria from Categorias";
                            $ejecutar = mysqli_query($conex, $consulta) or die (mysqli_error($conex));
                        ?>
                        <?php foreach($ejecutar as $opciones): ?>
                            <option value="<?php echo $opciones['Id']?>"><?php echo $opciones['Categoria']?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group" >
                    <label for="">Ingredientes</label>
                    <table class="table" id="dynamic_field">
                        <tr>
                            <td><input type="text" class="form-control" name="ingredient[]" required></td>
                        </tr>
                    </table>
                    <button type="button" class="btn" name="add" id="add"><i class="icon ion-ios-add"> <small>ingrediente</small></i></button>
                </div>
                <div class="form-group">
                    <label for="">Procedimiento</label>
                    <textarea class="form-control" name="procedimiento" id="" cols="30" rows="10" placeholder="Describe el procedimiento a seguir....." required></textarea>
                </div>
                <button type="submit" name="guardar-receta" id="guardar-receta" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        <div>

        </div>
    </section>
</div>


<!-- JQuery, Popper, Js, Bootstrap Js-->
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="Js/recetas.js"></script>

<?php
    include("guardar.php");
?>

