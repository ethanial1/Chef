<div>
    <div class="contenedor">
        <?php
            $sql = "SELECT Recetas.ID, Recetas.Nombre_platillo, Usuarios.Nombre, Recetas.Foto from Recetas
                    inner join Categorias on Recetas.CategoriaP = Categorias.Id
                    inner join Usuarios on Recetas.IDuser = Usuarios.ID where Recetas.CategoriaP = '$categori'";
            
            //$sql = "select Nombre_platillo, IDuser, Foto from Recetas where CategoriaP = 20";
            $result = $conex->query($sql);

            while ($dat = $result->fetch_assoc()) {  
            ?>
            <div class="carta">
                <img class="card-img-top" src="data:image/jpg;base64,<?php echo base64_encode($dat['Foto']); ?>" alt="">
                <h4><a href="index.php?idx=2&recetaid=<?php echo $dat['ID']?>&djfj-ñpojdsk"><?php echo $dat['Nombre_platillo'] ?></a></h4>
                <p>Receta de <?php echo $dat['Nombre'] ?></p>
            </div>
        <?php                
            }
        ?>
    </div>
</div>