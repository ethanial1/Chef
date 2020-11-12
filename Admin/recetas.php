<div>
    <div class="row mb-4">
        <div class="col-8">
            <p>Recetas Disponibles</p>
        </div>
        <div class="col-4">
            <button class="btn btn-info mb-2"><small><i class="icon ion-md-pizza mr-2"></i>Nueva Receta</small></button>
        </div>
    </div>
    <div>
        <table class="table table-hover" id="tabla-recetas">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre User</th>
                <th scope="col">Platillo</th>
                <th scope="col">Categoria</th>
                <th scope="col">Ingredientes</th>
                <th scope="col">Procedimiento</th>
                <th scope="col">Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT Recetas.ID, Usuarios.Nombre, Recetas.Nombre_platillo, Categorias.Categoria, Recetas.Ingredientes, Recetas.Procedimiento, Recetas.Foto from Recetas
                            inner join Usuarios on Recetas.IDuser = Usuarios.ID 
                            inner join Categorias on Recetas.CategoriaP = Categorias.Id";

                    $result = $conex->query($sql);
                    while ($dat = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $dat['ID'] ?></td>
                            <td><?php echo $dat['Nombre'] ?></td>
                            <td><?php echo $dat['Nombre_platillo'] ?></td>
                            <td><?php echo $dat['Categoria'] ?></td>
                            <td><?php echo $dat['Ingredientes'] ?></td>
                            <td><?php echo $dat['Procedimiento'] ?></td>
                            <td class="centrar"><img class="espacio" height="100px" src="data:image/jpg;base64,<?php echo base64_encode($dat['Foto']); ?>" alt=""></td>
                            <td></td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- JQuery, Popper, Js, Bootstrap Js-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


<!-- Datatables js-->
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>