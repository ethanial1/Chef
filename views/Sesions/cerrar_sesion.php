<?php
include('user_sesion.php');
$user_sesion1 = new userSesion();
$user_sesion1->closeSesion();

header('Location: https://poloatlas.herokuapp.com/index.php?idx=1');
die();

?>