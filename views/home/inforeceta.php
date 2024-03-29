<div class="container">
        <?php
            $sql = "SELECT Recetas.Foto, Recetas.Nombre_platillo, Categorias.Categoria, Usuarios.Nombre,  Recetas.Ingredientes, Recetas.Procedimiento from Recetas
                    inner join Usuarios on Recetas.IDuser = Usuarios.ID 
                    inner join Categorias on Recetas.CategoriaP = Categorias.Id where Recetas.ID = $idreceta";
            $result = $conex->query($sql);
            while ($dat = $result->fetch_assoc()) {  
        ?>
        <div class="platillo">
            <div class="foto-platillo">
                <img class="" src="data:image/jpg;base64,<?php echo base64_encode($dat['Foto']); ?>" alt="">
            </div>
            <div class="info-platillo">
                <div class="nombre-platillo">
                    <h4 class="platillo-n"><?php echo $dat['Nombre_platillo'] ?></h4>
                </div>
                <div class="categoria-platillo">
                    <small>Categoría: <?php echo $dat['Categoria'] ?></small>
                </div>
                <div class="nombre-cocinero">
                    <h6>Cocinero: <?php echo $dat['Nombre'] ?></h6>
                </div>
            </div>
            <section id="pantalla-dividida-recta">
                <div class="ingredientes-platillo izquierda">
                    <h5>Ingredientes</h5>
                    <p><?php echo $dat['Ingredientes'] ?></p>
                </div>
                <div class="procedimiento-platillo derecha">
                    <h5>Procedimiento</h5>
                    <p><?php echo $dat['Procedimiento'] ?></p>
                </div>
            </section>
        </div>
        <?php                
            }
        ?>
        <div class="shadow-lg p-3 mb-5 bg-white rounded" style="margin-bottom: 7vh;">
            <div class="row">
                <div class="col">
                    <div class="multi-collapse" id="multiCollapseExample1">
                        <div class="card card-body">
                            <form action="" method="POST">
                                <div>
                                    <input type="number" name="id" id="comId">
                                    <input type="text" name="producto" id="comUser">
                                    <input type="text" name="dirigido" id="comProduct">
                                </div>
                                <div class="form-group row">
                                    <?php
                                        if(isset($_GET['idPre'])){
                                            echo '<h6><i>Todos queremos saber qué piensas</i></h6>';
                                        }else{
                                            echo '<h6><i>¿Tienes alguna duda?</i></h6>';
                                        }
                                    ?>
                                </div>
                                <div class="form-group row">
                                    <?php
                                        if(isset($_GET['idPre'])){
                                            echo '<label for="" class="col-sm-2 col-form-label">Responde la Pregunta...</label>';
                                        }else{
                                            echo '<label for="" class="col-sm-2 col-form-label">Haz una pregunta...</label>';
                                        }
                                    ?>
                                    <div class="col-sm-10">
                                        <textarea name="comentario" required class="form-control" rows="6" cols="20" <?php if(isset($_GET['idPre'])){echo 'placeholder="Escribe aquí tu respuesta.....""'; }else{ echo 'placeholder="Escribe aquí tu pregunta....."';} ?> ></textarea>
                                    </div>
                                </div>
                                <div class="">
                                    <input class="btn btn-success" type="submit" <?php if(isset($_GET['idPre'])){echo  'name="Responder" value="Responder"'; }else{ echo 'name="enviar" value="enviar"';} ?>>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pregunta-principal mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary mt-3 mb-3">Responder</a>
                    <div class="respuestas">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php
            if(isset($_POST['enviar'])){
                $query = "INSERT into Preguntas(Pregunta, Fecha, IdReceta) values ('".$_POST['comentario'].", NOW(),'$idreceta')";
                if($query){
                    header("Location: index.php?idx=2&recetaid='$idreceta'&idPre=3");
                    echo 'ff';
                }else{
                    header("Location: index.php?idx=2&recetaid='$idreceta'");
                }
            }

            if(isset($_POST['Responder'])){
                $query = "INSERT into Preguntas(IdPregunta,Respuesta, Fecha) values ('".$_POST['d'].",".$_POST['comentario'].", NOW(),'$idreceta')";
                if($query){
                    header("Location: index.php?idx=2&recetaid='$idreceta'");
                    echo 'ff';
                }else{
                    header("Location: index.php?idx=2&recetaid='$idreceta'");
                }
            }

        ?>
</div>