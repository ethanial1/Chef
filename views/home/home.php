<div>
    <div class="fondo fondo_change">
        <div class="home">
            <div class="container" id="pantalla-dividida">
                <section id="pantalla-dividida">
                    <div class="izquierda">
                        <img class="animate__animated animate__headShake" src="assets/svg/once.svg" alt="">
                    </div>
                    <div class="derecha">
                        <h2 class="animate__animated animate__lightSpeedInRight">Animate a compartir recetas con personas de todo el mundo.</h2>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div>
        <div class="container mt-5">
            <section id="food">
                <div class="row">
                    <div class="col">
                        <img width="100" height="100" src="assets/svg/ensalada.svg" alt="">
                  </div>
                </div>
            </section>
        </div>
    </div>
    <div>

    </div>
    <div class="container mt-5 categorias-info">
        <div class="mb-3">
            <h5>Categorias</h5>
            <small>Selecciona la categoria de tu interes y descubre que nuevas recetas puedes aprender hoy.....</small>
        </div>
    </div> 
    
    <div class="contenedor">
        <?php
            $sql = "SELECT * FROM Categorias";
            $result = $conex->query($sql);
            while ($dat = $result->fetch_assoc()) {  
        ?>
        <div class="card_cat">
            <img class="card_img" src="data:image/jpg;base64,<?php echo base64_encode($dat['Foto']); ?>" alt="">
            <div class="card_data">
                <h1 class="card_title"><a href="index.php?idx=7&categoria-op-9876tgdjbdjbvjfvjnc=<?php echo $dat['Id'] ?>"><?php echo $dat['Categoria'] ?></a></h1>
                <p class="card_description"><?php echo $dat['Descripcion'] ?></p>
            </div>

        </div>
        <?php                
            }
        ?>
    </div>
    <div class="container mt-5 categorias-info">
        <div class="mb-3">
            <h5>Preguntas...</h5>
            <small>Si tienes alguna duda puedes hacer una pregunta y con gusto la comunidad de chef la respondera.....</small>
        </div>
        <div>
            <div class="shadow-lg p-3 mb-5 bg-white rounded" style="margin-bottom: 7vh;">
                <div class="row">
                    <div class="col">
                        <div class="multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body">
                                <form action="" method="POST">
                                    <div class="form-group row">
                                        <?php
                                            if(isset($_GET['idGen'])){
                                                echo '<h6><i>Todos queremos saber qué piensas</i></h6>';
                                            }else{
                                                echo '<h6><i>¿Tienes alguna duda?</i></h6>';
                                            }
                                        ?>
                                    </div>
                                    <div class="form-group row">
                                        <?php
                                            if(isset($_GET['idGen'])){
                                                echo '<label for="" class="col-sm-2 col-form-label">Responde la Pregunta...</label>';
                                            }else{
                                                echo '<label for="" class="col-sm-2 col-form-label">Haz una pregunta...</label>';
                                            }
                                        ?>
                                        <div class="col-sm-10">
                                            <textarea name="comentario" required class="form-control" rows="6" cols="20" <?php if(isset($_GET['idGen'])){echo 'placeholder="Escribe aquí tu respuesta.....""'; }else{ echo 'placeholder="Escribe aquí tu pregunta....."';} ?> ></textarea>
                                        </div>
                                    </div>
                                    <div class="">
                                        <input class="btn btn-success" type="submit" <?php if(isset($_GET['idGen'])){echo  'name="Responder" value="Responder"'; }else{ echo 'name="enviar" value="enviar"';} ?>>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            if(isset($_POST['enviar'])){
                $query = "INSERT into Preguntas(Pregunta, Fecha, reply) values ('".$_POST['comentario']."', NOW(),1)";
                $result = $conex->query($query);
                if($result){
                    header("Location: receta.php?idx=2&recetaid='$idreceta'&idGen=3");
                    
                }else{
                    header("Location: receta.php?idx=2&recetaid='$idreceta'&idGen=3");
                }
            }

            if(isset($_POST['Responder'])){
                $query = "INSERT into Respuestas(IdPregunta,Respuesta, Fecha) values ('".$_GET['idGen']."','".$_POST['comentario']."', NOW())";
                $result = $conex->query($query);
                header('Location: https://poloatlas.herokuapp.com/index.php?idx=1');
                //header('Location: https://poloatlas.herokuapp.com/index.php?idx=1');
                //die();
                if($result){
                    header('Location: https://poloatlas.herokuapp.com/index.php?idx=1');
                    
                }else{
                    header('Location: https://poloatlas.herokuapp.com/index.php?idx=1');
                }
                header('Location: https://poloatlas.herokuapp.com/index.php?idx=1');
            }

        ?>
        <?php
        //select * from Preguntas where IdReceta = 2;
        $respuestas = "SELECT * from Preguntas where reply = 1";
        $result = $conex->query($respuestas);
        while ($data = $result->fetch_assoc()) { 

        ?>
            <div class="pregunta-principal mb-3">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text"><?php echo $data['Pregunta'] ?></p>
                        <?php
                            if(isset($_SESSION['id'])){
                                ?>
                                <a href="index.php?idx=1&idGen=<?php echo $data['Id'] ?>" class="btn mt-3 mb-3">Responder</a>
                                <?php
                                
                            }
                        ?>
                        <div class="respuestas">
                            <ul class="list-group list-group-flush">

            <?php
                $idPregunta = $data['Id'];
                //echo $idPregunta;
                //SELECT Respuesta from Respuestas where IdPregunta = 11;
                $respuesta = "SELECT Respuesta from Respuestas where IdPregunta = $idPregunta";
                //echo $respuesta;
                $resultado = $conex->query($respuesta);
                while ($datos = $resultado->fetch_assoc()){
            ?>
                                <li class="list-group-item"><?php echo $datos['Respuesta'] ?></li>
            <?php
            }
            ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>

    </div> 
</div>
