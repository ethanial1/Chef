<?php
    $server = "localhost";
    $user = "root";
    $pass = "root";
    $database = "cocina";

    $conex = new mysqli($server,$user,$pass,$database);

    if($conex -> connect_error){
        die("Conexión Fallida. ".$conex -> connect_error);
    }else{
        echo'Exito';
    }

