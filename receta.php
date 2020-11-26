<?php
session_start();
$idreceta = ($_GET['recetaid']);
include('DataBase/conect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Indie+Flower&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <?php
        include('navBar.php');
    ?>
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
        <?php
            if(isset($_POST['enviar'])){
                $query = "INSERT into Preguntas(Pregunta, Fecha, IdReceta) values ('".$_POST['comentario']."', NOW(),'$idreceta')";
                $result = $conex->query($query);
                if($result){
                    header("Location: receta.php?idx=2&recetaid='$idreceta'&idPre=3");
                    echo 'ff';
                }else{
                    header("Location: receta.php?idx=2&recetaid='$idreceta'&idPre=3");
                }
            }

            if(isset($_POST['Responder'])){
                $query = "INSERT into Respuestas(IdPregunta,Respuesta, Fecha) values ('".$_GET['idPre']."','".$_POST['comentario']."', NOW())";
                $result = $conex->query($query);
                if($result){
                    header("Location: index.php?idx=2&recetaid=$idreceta");
                    
                }else{
                    header("Location: index.php?idx=2&recetaid='$idreceta'");
                }
            }

        ?>
        <?php
        //select * from Preguntas where IdReceta = 2;
        $respuestas = "SELECT * from Preguntas where IdReceta = $idreceta";
        $result = $conex->query($respuestas);
        while ($data = $result->fetch_assoc()) { 

        ?>
            <div class="pregunta-principal mb-3">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text"><?php echo $data['Pregunta'] ?></p>
                        <a href="receta.php?recetaid=<?php echo $_GET['recetaid'] ?>&idPre=<?php echo $data['Id'] ?>" class="btn mt-3 mb-3">Responder</a>
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
</body>
</html>