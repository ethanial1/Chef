<?php
    $server = "beirmoae6wnbbif9kpqo-mysql.services.clever-cloud.com";
    $user = "u9dtlbktibcwz5cc";
    $pass = "BAd9l8dQ6cjoIqUTdFbK";
    $database = "beirmoae6wnbbif9kpqo";

    $conex = new mysqli($server,$user,$pass,$database);

    if($conex -> connect_error){
        die("Conexión Fallida. ".$conex -> connect_error);
        
    }else{
        
    }

