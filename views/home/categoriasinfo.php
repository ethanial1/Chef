<div>
    <div class="contenedor">
        <?php
            $sql = "SELECT * FROM Categorias";
            $result = $conex->query($sql);
            while ($dat = $result->fetch_assoc()) {  
            ?>
                
                    <div class="carta">
                            <img class="card-img-top" src="data:image/jpg;base64,<?php echo base64_encode($dat['Foto']); ?>" alt="">
                            <h4><a href=""><?php echo $dat['Categoria'] ?></a></h4>
                            <p><?php echo $dat['Descripcion'] ?></p>
                    </div>
        <?php                
            }
        ?>
    </div>
</div>