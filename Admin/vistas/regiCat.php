<?php
    if(isset($_POST['anadir'])){
        $categoria = $_POST['Nuevacategoria'];
        $descripcionP = $_POST['nuevadescripcion'];
        $imagen = addslashes(file_get_contents($_FILES['archivo']['tmp_name']));

        $consulta = "INSERT INTO Categorias(Categoria, Descripcion, Foto) VALUES ('$categoria','$descripcionP','$imagen')";
        $result = $conex->query($sql);
        $result->execute();

        
        if($result){
            ?>
            <p>Producto Guardado</p>
            <script>
                alert('Producto Guardad.');
            </script>
            <?php
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