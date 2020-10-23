<section id="pantalla-dividida1">
    <div class="izquierda">
        <form action="" method="POST" class="">
            <div class="form-group">
                <label for="">Clave</label>
                <input type="text" class="form-control" id="" aria-describedby="" name="clave">
                <small id="" class="form-text text-muted">Piensa muy bien esta clave ya que sera importante para poder identificarte.</small>
            </div>
            <div class="form-group">
                <label for="">Nombre</label>
                <input class="form-control" required type="text" name="nombre" placeholder="">
                <label>Población</label>
                <input class="form-control" required type="text" name="poblacion" placeholder="">
                <label>Estado</label>
                <input class="form-control" required type="text" name="estado" placeholder="">
                <label>pais</label>
                <input class="form-control" required type="text" name="pais" placeholder="">
                <label>Edad</label>
                <input class="form-control" required type="number" name="edad" placeholder="">
                <label>Descripcion</label>
                <input class="form-control" required type="text" name="descripcion" placeholder="">
                <label>Gustos</label>
                <input class="form-control" required type="text" name="gustos" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary" name="registrarse">Registrar</button>
        </form>
    </div>
    <div class="derecha">
        <div>
            <img class="animate__animated animate__headShake" src="assets/svg/cuatro.svg" alt="">
        </div>
        <h6><i>Registrate para ser parte de esta comunidad de personas amantes por la cocina y del buen gusto</i> </h6>
        <p>
            <small>
                Chef es la plataforma en la que puedes publicar, compartir, mejorar tus recetas y sabores preferidos. No esperes más.
            </small>
        </p>
        <p>
            <small><i>Si ya tienes una cuenta inicia sesión <a href="">aqui</a></i></small>
        </p>
    </div>
</section>
<?php
include('views/Actions/registro.php')
?>
