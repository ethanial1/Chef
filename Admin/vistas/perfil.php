<div>
    <div class="saludo">
        <p>Llena los campos para actualizar tu perfil..</p>
    </div>
    <section id="pantalla-dividida">
        <div class="izquierda">
            <form>
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" id="" required value="<?php echo $nombre?>"> 
                </div>
                <div class="form-group">
                    <label for="">Nueva clave</label>
                    <input type="password" class="form-control" id="" required>
                    <small id="" class="">No olvides tu clave ya que esta te ayuda a entrar al sistema...</small>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </section>
</div>


<!-- JQuery, Popper, Js, Bootstrap Js-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>