<?php
include('conexion.php'); //conexion a la base de datos

    $objeto = new Conexion();
    $conexion = $objeto->Conectar();

    $id = (isset($_POST['id'])) ? $_POST['id']: '';
    $clave = (isset($_POST['clave'])) ? $_POST['clave']: '';
    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre']: '';
    $poblacion = (isset($_POST['poblacion'])) ? $_POST['poblacion']: '';
    $estado = (isset($_POST['estado'])) ? $_POST['estado']: '';
    $pais = (isset($_POST['pais'])) ? $_POST['pais']: '';
    $edad = (isset($_POST['edad'])) ? $_POST['edad']: '';
    $descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion']: '';
    $gustos = (isset($_POST['gustos'])) ? $_POST['gustos']: '';


    echo $id;
    $consulta = "UPDATE Cocineros SET Clave = '$clave',Nombre='$nombre',Poblacion='$poblacion',Estado='$estado',Pais='$pais',Edad='$edad',Descripcion='$descripcion',Gustos='$gustos' WHERE Id = '$id'";
    $result = $conexion->prepare($consulta);
    $result->execute();

    $consulta = "UPDATE Usuarios Nombre='$nombre' WHERE ID = '$id";
    $result = $conexion->prepare($consulta);
    $result->execute();


    print json_encode($data, JSON_UNESCAPED_UNICODE);
    $conexion=null;