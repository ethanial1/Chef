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


    //recibir los datos de la categoria
    $idcategoria = (isset($_POST['idcategoria'])) ? $_POST['idcategoria']: '';
    $categoria = (isset($_POST['categoria'])) ? $_POST['categoria']: '';
    $descripcioncategoria = (isset($_POST['descripcioncategoria'])) ? $_POST['descripcioncategoria']: '';

    //formulario
    $archivo = (isset($_FILES['archivo'])) ? $_FILES['archivo']: '';
    $cate = (isset($_POST['Nuevacategoria'])) ? $_POST['Nuevacategoria']: '';
    $des = (isset($_POST['nuevadescripcion'])) ? $_POST['nuevadescripcion']: '';

    echo($id);
    
    //recibimos el id de borrar un usuario
    $idb = (isset($_POST['idb'])) ? $_POST['idb']: '';
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
        case 3://añadir nueva categoria
            $consulta = "INSERT INTO Categorias(Categoria, Descripcion, Foto) VALUES ('$cate','$des','$archivo')";
            $result = $conexion->prepare($consulta);
            $result->execute();
            
        break;
        case 4://actualizar categoria datos
            $consulta = "UPDATE Categorias SET Categoria='$categoria',Descripcion='$descripcioncategoria' WHERE Id ='$idcategoria'";
            $result = $conexion->prepare($consulta);
            $result->execute();

            $consulta = "SELECT * FROM Categorias";
            $result = $conexion->prepare($consulta);
            $result->execute();
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
        break;
        case 5: //actualizar foto de la categoria
        break;
        case 6: //borrar la categoria
            $consulta = "DELETE FROM Categorias WHERE Id = '$idcategoria'";
            $result = $conexion->prepare($consulta);
            $result->execute();
        break;
    }
    print json_encode($data, JSON_UNESCAPED_UNICODE);
    $conexion=null;

?>