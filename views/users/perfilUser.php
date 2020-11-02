<?php
    $consulta = "SELECT * FROM Cocineros where Id = '$id'";
    $result = $conex->query($consulta);
    while ($dat = $result->fetch_assoc()) { 
?>
<div>
    <section id="pantalla-dividida1">
        <div class="izquierda">
            <form action="" method="POST" class="">
                <div class="form-group">
                    <input type="text" value="<?php echo $dat['id']; ?>" hidden>
                    <label for="">Clave</label>
                    <input type="text" class="form-control" id="" aria-describedby="" name="clave" value="<?php echo $dat['Clave']; ?>">
                    <small id="" class="form-text text-muted">Piensa muy bien esta clave ya que sera importante para poder identificarte.</small>
                </div>
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input class="form-control" required type="text" name="nombre" placeholder="" value="<?php echo $dat['Nombre']; ?>">
                    <label>Población</label>
                    <input class="form-control" required type="text" name="poblacion" placeholder="" value="<?php echo $dat['Poblacion']; ?>">
                    <label>Estado</label>
                    <input class="form-control" required type="text" name="estado" placeholder="" value="<?php echo $dat['Estado']; ?>">
                    <label>pais</label>
                    <input class="form-control" required type="text" name="pais" placeholder="" value="<?php echo $dat['Pais']; ?>">
                    <label>Edad</label>
                    <input class="form-control" required type="number" name="edad" placeholder="" value="<?php echo $dat['Edad']; ?>">
                    <label>Descripcion</label>
                    <input class="form-control" required type="text" name="descripcion" placeholder="" value="<?php echo $dat['Descripcion']; ?>">
                    <label>Gustos</label>
                    <input class="form-control" required type="text" name="gustos" placeholder="" value="<?php echo $dat['Gustos']; ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="registrarse">Actualizar</button>
            </form>
        </div>
        <div class="derecha">
            <h6>Edita tu perfil.....</h6>
            <small>Si algo no te gusta puedes cambiarlo incluso si crees que ya es damasiado tarde.....</small>
        </div>
    </section>
</div>
<?php
    }
?>