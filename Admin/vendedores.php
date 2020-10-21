<?php
include('../DataBase/conect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <title>Administrar Vendedores</title>
</head>

<body>
    <div>
        <table class="table table-hover" id="crud-user">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Clave</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Población</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Gustos</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM cocineros";
                $result = $conex->query($sql);
                while ($dat = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $dat['Id'] ?></td>
                        <td><?php echo $dat['Clave'] ?></td>
                        <td><?php echo $dat['Nombre'] ?></td>
                        <td><?php echo $dat['Poblacion'] ?></td>
                        <td><?php echo $dat['Estado'] ?></td>
                        <td><?php echo $dat['Pais'] ?></td>
                        <td><?php echo $dat['Edad'] ?></td>
                        <td><?php echo $dat['Descripcion'] ?></td>
                        <td><?php echo $dat['Gustos'] ?></td>
                        <td></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php

    include('vistas/accionModal.php')
    ?>


    <!-- JQuery, Popper, Js, Bootstrap Js-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    

    <!-- Datatables js-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
    <script src="Js/main.js"></script>
</body>

</html>