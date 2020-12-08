<div>
    <section id="pantalla-dividida1">
        <div class="izquierda">
            <h6><i>Archivos Disponibles</i></h6>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Archivo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $folder = "Wiki/actions/archivos";
                    if($handler = opendir($folder)){
                        while (false !== ($file = readdir($handler))){
                                //echo "<li class='list-group-item'></li>";
                            echo "<tr>";
                            echo "<td><a href='././index.php?idx=9&archivofile=$file'>$file</a></td>";
                            echo "<td>
                            <form action='Wiki/actions/descargar.php' method='POST'>
                                <input type='text' hidden value='$file' name='nombreArchivo'>
                                <button name='descargartxt' class='btn btn-info'><i class='icon ion-md-download'></i></button>
                            </form>
                                 </td>";
                            echo "</tr>";
                        }
                        closedir($handler);
                    }
                    ?>
                </tbody>
            </table>   
            
        </div>
        <div class="derecha">
            <div>
                <?php
                $ruta = "Wiki/actions/archivos/$archi";
                $file = fopen($ruta,"r");
                    do{
                        $linea =  fgets($file);

                            echo nl2br($linea);
                    }while(!feof($file));

                    fclose($file);
                ?>
            </div>
        </div>
    </section>
</div>