<?php
$archivo = $_GET['archivo'];

$ruta = "Wiki/actions/archivos/$archivo";

?>
<div>
    <section id="pantalla-dividida1">
        <div class="izquierda">
            <div >
                <h6><i>Archivo: <?php echo $archivo;?></i></h6>
                <?php
                $file = fopen($ruta,"r");
                    do{
                        echo fgets($file);
                    }while(!feof($file));

                fclose($file);
                ?>
            </div>
            <br>
            <div>
                <small>¿Quieres añadir contenido a este archivo?</small>
                <form action="Wiki/actions/editar.php" method="POST">
                    <div class="form-group">
                        <input hidden type="text" name="nombreArchivo" value="<?php echo $archivo;?>">
                        <input hidden type="text" name="nombreUser" value="<?php echo $nombre;?>">
                        <textarea name="anadirDatos" required class="form-control" rows="5" cols="10" placeholder="Añade información al archivo."></textarea>
                    </div>
                    <input class="btn btn-success" type="submit" value="Guardar" name="btneditarTema">
                </form>
            </div>
        </div>
        <div class="derecha">

        </div>
    </section>
</div>