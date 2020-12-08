<div>
    <section id="pantalla-dividida1">
        <div class="izquierda">
            <form action="Wiki/actions/new.php" method="POST">
                <div class="form-group">
                    <label for="">Tema</label>
                    <input type="text" class="form-control" id="" required name="tema">
                    <small id="" class="form-text text-muted">Añade un tema a tua archivo.</small>
                </div>
                <div class="form-group">
                    <label for="">Información</label>
                    <textarea name="descriptionTema" required class="form-control" rows="6" cols="20" placeholder="Ingresa la información aquí para que los demás puedan verla"></textarea>
                </div>
                <input type="submit" value="Guardar" name="btnGuardarTema">
            </form>
        </div>
        <div class="derecha">
            <h5><i>Archivos existentes</i></h5>
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Archivo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $folder = "Wiki/actions/archivos";
                        if($handler = opendir($folder)){
                            while (false !== ($file = readdir($handler))){
                                //echo "<li class='list-group-item'></li>";
                                echo "<tr>";
                                echo "<td><a href='././index.php?idx=10&archivo=$file'>$file</a></td>";
                                echo "</tr>";
                            }
                            closedir($handler);
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>