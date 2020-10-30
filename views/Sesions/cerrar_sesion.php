<?php
include('user_sesion.php');
$user_sesion1 = new userSesion();
$user_sesion1->closeSesion();

header('Location: http://localhost:8888/Recetario/index.php?idx=1');
die();

?>