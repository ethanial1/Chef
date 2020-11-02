<?php
    $consulta = "SELECT * FROM Cocineros where Id = '$id'";
    $result = $conex->query($consulta);
    while ($dat = $result->fetch_assoc()) { 
?>
<div>
    <section id="pantalla-dividida1">
        <div class="izquierda">
            <form action="" method="POST" class="" id="userActualizar">
                <div class="form-group">
                    <input type="text" value="<?php echo $dat['Id']; ?>"  id="idu" name="idu">
                    <label for="">Clave</label>
                    <input type="text" class="form-control" id="claveu" aria-describedby="" name="claveu" value="<?php echo $dat['Clave']; ?>">
                    <small id="" class="form-text text-muted">Piensa muy bien esta clave ya que sera importante para poder identificarte.</small>
                </div>
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input class="form-control" required type="text" name="nombreu" placeholder="" value="<?php echo $dat['Nombre']; ?>" id="nombreu">
                    <label>Población</label>
                    <input class="form-control" required type="text" name="poblacionu" placeholder="" value="<?php echo $dat['Poblacion']; ?>" id="poblacionu">
                    <label>Estado</label>
                    <input class="form-control" required type="text" name="estadou" placeholder="" value="<?php echo $dat['Estado']; ?>" id="estadou">
                    <label>pais</label>
                    <input class="form-control" required type="text" name="paisu" placeholder="" value="<?php echo $dat['Pais']; ?>" id='paisu'>
                    <label>Edad</label>
                    <input class="form-control" required type="number" name="edadu" placeholder="" value="<?php echo $dat['Edad']; ?>" id="edau">
                    <label>Descripcion</label>
                    <input class="form-control" required type="text" name="descripcionu" placeholder="" value="<?php echo $dat['Descripcion']; ?>" id="descripcionu">
                    <label>Gustos</label>
                    <input class="form-control" required type="text" name="gustosu" placeholder="" value="<?php echo $dat['Gustos']; ?>" id="gustosu">
                </div>
                <button type="submit" class="btn btn-primary" name="actualizaru">Actualizar</button>
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
    
    include('views/Actions/actualizar.php');
?>

