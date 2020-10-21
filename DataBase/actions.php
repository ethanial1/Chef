<?php
    include('conexion.php'); //conexion a la base de datos

    $objeto = new Conexion();
    $conexion = $objeto->Conectar();

    //declaramos las variable que vamos a recibir por el método post
    $id = (isset($_POST['id'])) ? $_POST['id']: '';
    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre']: '';
    $poblacion = (isset($_POST['poblacion'])) ? $_POST['poblacion']: '';
    $estado = (isset($_POST['estado'])) ? $_POST['estado']: '';
    $pais = (isset($_POST['pais'])) ? $_POST['pais']: '';
    $edad = (isset($_POST['edad'])) ? $_POST['edad']: '';
    $descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion']: '';
    $gustos = (isset($_POST['gustos'])) ? $_POST['gustos']: '';

    echo($id);
    
    //recibimos el id de borrar
    $idb = (isset($_POST['idb'])) ? $_POST['idb']: '';
    echo($idb);
    //recibimos la accion
    $opcion = (isset($_POST['opcion'])) ? $_POST['opcion']: '';
    
    switch($opcion){
        case 1: //editar un usuario
            $consulta = "UPDATE cocineros SET Nombre='$nombre',Poblacion='$poblacion',Estado='$estado',Pais='$pais',Edad='$edad',Descripcion='$descripcion',Gustos='$gustos' WHERE Id = '$id'";
            $result = $conexion->prepare($consulta);
            $result->execute();

            
            $consulta = "SELECT * FROM Cocineros WHERE Id = '$id'";
            $result = $conexion->prepare($consulta);
            $result->execute();
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
        break;
        case 2:
            $consulta = "DELETE FROM Cocineros WHERE ID = '$idb'";
            $result = $conexion->prepare($consulta);
            $result->execute();
        break;
    }
    print json_encode($data, JSON_UNESCAPED_UNICODE);
    $conexion=null;

?>