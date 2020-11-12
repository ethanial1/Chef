<?php
//var_dump($_POST);
    if(isset($_POST['guardar-receta'])){
        $iduser = ($_POST['iduser']);
        $nombre = ($_POST['nombre-platillo']);
        $categoria = ($_POST['categoriaP']);
        $ingredient = ($_POST['ingredient']);
        $procedimiento = ($_POST['procedimiento']);
        $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
        //contamos cuatos elementos tiene el array y lo guardamos en la variable $cuantos
        $cuantos = count($ingredient);

        //Solo como revisión podemos imprimir el valor y saber si es verdad el número
        //echo $cuantos;

        //mediante un ciclo for el cual recorre el array y concatena los elementos de este en una variable
        for ($i = 0; $i < $cuantos; $i++){
            $concatenar .= $ingredient[$i].",";
        }

        //echo $categoria;
        //para revisar imprimimos la variable $concatenar
        //echo $nombre."/".$categoria."/".$concatenar."/".$procedimiento;

        //insertamos en la base de datos
        
        $consulta = "INSERT INTO Recetas(IDuser,Nombre_platillo,CategoriaP,Ingredientes,Procedimiento,Foto) values('$iduser','$nombre','$categoria','$concatenar','$procedimiento','$foto')";
        $result = mysqli_query($conex, $consulta);

        if($result){
            echo 'receta añadida';
        }else{
            ?>
            <p>Error</p>
            <script>
                alert('Ocurrio un Error al registrar los datos')
            </script>
            <?php
        }

    }
?>