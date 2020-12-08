<?php
if(isset($_POST['descargartxt'])){
    $nombreArchivo = $_POST['nombreArchivo'];
    $ruta = "archivos/$nombreArchivo";

    echo $ruta;
    
    if(file_exists($ruta)){
        header("Content-Description: File Transer");
        header("Content-Type: text/*");
        header("Content-Disposition: attachment; filename=".basename($ruta));
        header("Content-Transfer-Encoding: binary");
        header("Expires: 0");
        header("Cache-Control: must-revalidate");
        header("Pragma: public");
        header("Content-Length: ".filesize($ruta));
        ob_clean();
        flush();
        readfile($ruta);
        exit;
    }else{
        echo 'Archivo no econtrado';
    }
}
