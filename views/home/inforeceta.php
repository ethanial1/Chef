<div class="container">
        <?php
            $sql = "SELECT Recetas.Foto, Recetas.Nombre_platillo, Categorias.Categoria, Usuarios.Nombre,  Recetas.Ingredientes, Recetas.Procedimiento from Recetas
                    inner join Usuarios on Recetas.IDuser = Usuarios.ID 
                    inner join Categorias on Recetas.CategoriaP = Categorias.Id where Recetas.ID = $idreceta";
            $result = $conex->query($sql);
            while ($dat = $result->fetch_assoc()) {  
        ?>
        <div class="platillo">
            <div class="foto-platillo">
                <img class="" src="data:image/jpg;base64,<?php echo base64_encode($dat['Foto']); ?>" alt="">
            </div>
            <div class="info-platillo">
                <div class="nombre-platillo">
                    <h4 class="platillo-n"><?php echo $dat['Nombre_platillo'] ?></h4>
                </div>
                <div class="categoria-platillo">
                    <small>Categoría: <?php echo $dat['Categoria'] ?></small>
                </div>
                <div class="nombre-cocinero">
                    <h6>Cocinero: <?php echo $dat['Nombre'] ?></h6>
                </div>
            </div>
            <section id="pantalla-dividida-recta">
                <div class="ingredientes-platillo izquierda">
                    <h5>Ingredientes</h5>
                    <p><?php echo $dat['Ingredientes'] ?></p>
                </div>
                <div class="procedimiento-platillo derecha">
                    <h5>Procedimiento</h5>
                    <p><?php echo $dat['Procedimiento'] ?></p>
                </div>
            </section>
        </div>
        <?php                
            }
        ?>
</div>