<div>
    <section id="pantalla-dividida1">
        <div class="izquierda">
            <h6><i>Archivos Disponibles</i></h6>
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <?php
                        $folder = "Wiki/actions/archivos";
                        if($handler = opendir($folder)){
                            while (false !== ($file = readdir($handler))){
                                echo "<li class='list-group-item'><a href='././index.php?idx=9&archivofile=$file'>$file</a></li>";
                                //echo "<li></li>";
                            }
                            closedir($handler);
                        }
                        ?>
                    </ul>
                </div>
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