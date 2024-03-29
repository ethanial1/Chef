<?php
session_start();
$idx = ($_GET['idx']);
$nombre = $_SESSION['user'];
$id = ($_SESSION['id']);

//archivos
$archi = $_GET['archivofile'];

$idreceta = ($_GET['recetaid']);

$categori = ($_GET['categoria-op-9876tgdjbdjbvjfvjnc']);
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
    <title>Polo Atlas</title>
</head>

<body>
    <?php
    include('navBar.php');
    

    switch ($idx) {
        case 1:
            include('views/home/home.php'); //home muestra las recetas
            break;
        case 2: //recetas
            include('views/home/inforeceta.php');
            break;
            //users-------------
        case 3:
            include('views/users/SignUp.php'); //registrar usuario
            break;
        case 4:
            include('views/users/LogIn.php'); //inicio de sesio
            break;
        case 5:
            include('views/users/perfilUser.php');
            break;
        case 6:
            include('views/recetas/nueva.php'); //pantalla para agregar una nueva receta.
            break;
        case 7:
            include('views/home/categoriasinfo.php');
            break;
        case 8:
            include('Wiki/users.php');
            break;
        case 9:
            include('Wiki/general.php');
            break;
        case 10:
            include('Wiki/actions/ver.php');
            break;
        default:
            echo 'Creo que estas perdido, regresa al home desde <a href="index.php?idx=1">aquí.</a>';
            break;
    }
    ?>



<?php
if ($idx != 6 or $idx != 7){
    ?>
    <footer class="footer">
        <div class="l-footer">
            <img src="assets/svg/diez.svg" alt="">
            <h4>Chef es una comunidad de personas amanter por la cocina</4>
                <div class="social">
                    <a href="">Facebook</a>
                    <a href="">Instagram</a>
                </div>
                <ul class="r-footer">
                    <li>
                        <h2>Información</h2>
                        <ul class="box">
                            <li><a href="https://www.linkedin.com/in/fernandotolentinosa/">Programador - Fernando Tolentino</a></li>
                            <li><a href="#">Universidad Politécnica de Tulancingo Hgo.</a></li>
                            <li><a href="#">Programación de aplicaciones Web</a></li>
                        </ul>
                    </li>
                </ul>
        </div>
    </footer>
    <?php
}
?>

    <script src="https://wowjs.uk/dist//wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>
