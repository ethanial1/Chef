<div>
    <div class="fondo fondo_change">
        <div class="home">
            <div class="container" id="pantalla-dividida">
                <section id="pantalla-dividida">
                    <div class="izquierda">
                        <img class="animate__animated animate__headShake" src="assets/svg/once.svg" alt="">
                    </div>
                    <div class="derecha">
                        <h2 class="animate__animated animate__lightSpeedInRight">Animate a compartir recetas con personas de todo el mundo.</h2>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div>
        <div class="container mt-5">
            <section id="food">
                <div class="row">
                    <div class="col">
                        <img class="wow bounceOutUp" width="100" height="100" src="http://keatz.com/wp-content/uploads/2019/10/Illu-2.png">
                    </div>
                    <div class="col">
                        <img class="wow bounceInUp" width="100" height="100" src="http://keatz.com/wp-content/uploads/2019/10/Illu-1.png">
                    </div>
                    <div class="col">
                        <img width="100" height="100" src="http://keatz.com/wp-content/uploads/2019/10/Illu-5.png">
                    </div>
                    <div class="col">
                        <img width="100" height="100" src="http://keatz.com/wp-content/uploads/2019/10/Illustration-Avocado.png">
                    </div>
                    <div class="col">
                        <img width="100" height="100" src="assets/svg/ensalada.svg" alt="">
                  </div>
                </div>
            </section>
        </div>
    </div>
    <div>

    </div>
    <div class="container mt-5 categorias-info">
        <div class="mb-3">
            <h5>Categorias</h5>
            <small>Selecciona la categoria de tu interes y descubre que nuevas recetas puedes aprender hoy.....</small>
        </div>
    </div> 
    <div class="contenedor">
        <?php
            $sql = "SELECT * FROM Categorias";
            $result = $conex->query($sql);
            while ($dat = $result->fetch_assoc()) {  
        ?>
                
                    <div class="carta">
                            <img class="card-img-top" src="data:image/jpg;base64,<?php echo base64_encode($dat['Foto']); ?>" alt="">
                            <h4><a href="index.php?categoria-op-9876tgdjbdjbvjfvjnc=<?php echo $dat['Id']?>&idx=7"><?php echo $dat['Categoria'] ?></a></h4>
                            <p><?php echo $dat['Descripcion'] ?></p>
                    </div>
        <?php                
            }
        ?>
    </div>
    <div class="contenedor">
        <?php
            $sql = "SELECT * FROM Categorias";
            $result = $conex->query($sql);
            while ($dat = $result->fetch_assoc()) {  
        ?>
        <div class="card_cat">
            <img class="card_img" src="data:image/jpg;base64,<?php echo base64_encode($dat['Foto']); ?>" alt="">
            <div class="card_data">
                <h1 class="card_title"><?php echo $dat['Categoria'] ?></h1>
                <p class="card_description"><?php echo $dat['Descripcion'] ?></p>
                <a href="#" class="card_button">más</a>
            </div>

        </div>
        <?php                
            }
        ?>
    </div>
</div>
