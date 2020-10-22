<?php
    $server = "mysql.webcindario.com";
    $user = "atlas";
    $pass = "qwerty123";
    $database = "atlas";

    $conex = new mysqli($server,$user,$pass,$database);

    if($conex -> connect_error){
        die("Conexión Fallida. ".$conex -> connect_error);
    }else{
        
    }

