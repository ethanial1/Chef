<?php
//var_dump($_POST);
    if(isset($_POST['guardar-receta'])){
        $nombre = ($_POST['nombre-platillo']);
        $categoria = ($_POST['']);
        $ingredient = ($_POST['ingredient']);
        $procedimiento = ($_POST['procedimiento']);
        //contamos cuatos elementos tiene el array y lo guardamos en la variable $cuantos
        $cuantos = count($ingredient);

        //Solo como revisión podemos imprimir el valor y saber si es verdad el número
        //echo $cuantos;

        //mediante un ciclo for el cual recorre el array y concatena los elementos de este en una variable
        for ($i = 0; $i < $cuantos; $i++){
            $concatenar .= $ingredient[$i].",";
        }

        //para revisar imprimimos la variable $concatenar
        echo $nombre."/".$categoria."/".$concatenar."/".$procedimiento;

        //insertamos en la base de datos
        

        


    }
?>