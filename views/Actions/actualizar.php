<?php
    if(isset($_POST['actualizaru'])){
        $id = $_POST['idu'];
        $clave = $_POST['claveu'];
        $nombre = $_POST['nombreu'];
        $poblacion = $_POST['poblacionu'];
        $estado = $_POST['estadou'];
        $pais = $_POST['paisu'];
        $edad = $_POST['edadu'];
        $descripcion = $_POST['descripcionu'];
        $gustos = $_POST['gustosu'];
        

        echo $nombre;
        $sql  = "UPDATE Cocineros SET Clave = '$clave',Nombre='$nombre',Poblacion='$poblacion',Estado='$estado',Pais='$pais',Edad='$edad',Descripcion='$descripcion',Gustos='$gustos' WHERE Id = '$id'";
        
        $sqlUser = "UPDATE Usuarios Nombre='$nombre' WHERE ID = '$id";
        $conex->query($sqlUser);

        if($conex->query($sql)){
            header('Location: ');
        }else{
            ?>
            <script>
                alert('hui, Nada podria malir sal, pero paso. puedes instentarlo más tarde');
            </script>
            <?php
            }
            
        }
?>