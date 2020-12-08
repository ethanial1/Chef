<?php
    if(isset($_POST['btneditarTema'])){
        $aporte = $_POST['anadirDatos'];
        $archivo = $_POST['nombreArchivo'];
        $user = $_POST['nombreUser'];

        $ruta = "archivos/$archivo";

        $files = fopen($ruta, "a");
        $fecha_modificacion = filectime($ruta);

        fwrite($files, "\nUser: $user - ". date("D d M Y", $fecha_modificacion).":: $aporte");
        fclose($files);

        header("Location: ../../index.php?idx=10&archivo=$archivo");
    }

?>