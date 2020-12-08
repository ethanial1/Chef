<?php
if(isset($_POST['btnGuardarTema'])){
    $nombre = $_POST['tema'];
    $descriptionTema = $_POST['descriptionTema'];

    echo $nombre;

    $archivo = fopen("archivos/$nombre.txt", "a") or die("Error al crear el archivo");

    //insertamos los datos al rchivo
    fwrite($archivo,$nombre);
    fwrite($archivo, "\n");
    fwrite($archivo, $descriptionTema);

    echo 'Se creo correctamente el archivo';
    header("Location: ../../index.php?idx=8");
}


?>