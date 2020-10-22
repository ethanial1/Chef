<?php
    if(isset($_POST['anadir'])){
        $categoria = $_POST['Nuevacategoria'];
        $descripcionP = $_POST['nuevadescripcion'];
        $imagen = addslashes(file_get_contents($_FILES['archivo']['tmp_name']));

        $consulta = "INSERT INTO Categorias(Categoria, Descripcion, Foto) VALUES ('$categoria','$descripcionP','$imagen')";
        $result = mysqli_query($conex, $consulta);
        
        if($result){
            header("Location: ./Admin/Dashboard.php?op=3");
        }else{
            ?>
            <p>Error</p>
            <script>
                alert('Ocurrio un Error al registrar los datos')
            </script>
            <?php
        }
    }
    echo'hola';
?>