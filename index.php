<?php
    $idx = ($_GET['idx']);
    $nombre = ($_GET['p']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Polo Atlas</title>
</head>
<body>
    <?php
    include('navBar.php');
    include('DataBase/conect.php');
    
        switch($idx){
            case 1: //home
            break;
            case 2: //
            break;
            //users-------------
            case 3: include('views/users/SignUp.php'); //registrar usuario
            break;
            //inicio de sesio
            case 4:
            break;

            //admin-------------
            case 5:
            break;
        }
    ?>
    
</body>
</html>