<?php
    if(isset($_POST['registrarse'])){
        $clave = $_POST['clave'];
        $nombre = $_POST['nombre'];
        $poblacion = $_POST['poblacion'];
        $estado = $_POST['estado'];
        $pais = $_POST['pais'];
        $edad = $_POST['edad'];
        $descripcion = $_POST['descripcion'];
        $gustos = $_POST['gustos'];
        $rol = 2;

        $sql = "INSERT INTO cocineros(Clave, Nombre, Poblacion, Estado, Pais, Edad, Descripcion, Gustos, Rol) VALUES ('$clave','$nombre','$poblacion','$estado','$pais','$edad','$descripcion','$gustos',$rol)";
                
        $sqlUser = "INSERT INTO Usuarios (Clave,Nombre, Rol) VALUES ('$clave','$nombre','$rol')";
        $conex->query($sqlUser);

        if($conex->query($sql)){
            ?>
            <script>
                alert('Te has registrado correctamente');
            </script>
            <?php
            
        }else{
            ?>
            <script>
                alert('hui, Nada podria malir sal, pero paso. puedes instentarlo más tarde');
            </script>
            <?php
            }
            
        }
?>
    