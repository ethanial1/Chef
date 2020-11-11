<div>
    <section id="pantalla-receta">
        <div class="izquierda-receta">
            <form  name="add_receta" id="ingredientes_receta" method="POST">
                <div class="form-group">
                    <label for="">Nombre del Platillo.</label>
                    <input type="text" class="form-control" id="" aria-describedby="" name="nombre-platillo">
                    <small id="" class="form-text text-muted">Los nombres son con los que presentamos a tus recetas, asegurate de que sea atractivo...</small>
                </div>
                <div class="form-group">
                    <label for="">Categoria</label>
                    <select name="" id="" class="form-control">
                        <option value="">Helados</option>
                        <option value="">Carnes</option>
                    </select>
                </div>
                <div class="form-group" >
                    <label for="">Ingredientes</label>
                    <table class="table" id="dynamic_field">
                        <tr>
                            <td><input type="text" class="form-control" name="ingredient[]"></td>
                        </tr>
                    </table>
                    <button type="button" class="btn" name="add" id="add"><i class="icon ion-ios-add"> <small>ingrediente</small></i></button>
                </div>
                <div class="form-group">
                    <label for="">Procedimiento</label>
                    <textarea class="form-control" name="procedimiento" id="" cols="30" rows="10" placeholder="Describe el procedimiento a seguir....."></textarea>
                </div>
                <button type="submit" name="guardar-receta" id="guardar-receta" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        <div>

        </div>
    </section>
</div>


<!-- JQuery, Popper, Js, Bootstrap Js-->
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="Js/recetas.js"></script>
<script>
    /*
    $(document).ready(function(){
    var i = 1;
        $('#add').click(function(){
            i++;
            $('#dynamic_field').append('<tr id="row'+i+'">'+
                                        '<td><input type="text" class="form-control" name="ingredient[]"></td>'+
                                        '<td><button type="button" name="btn_remove" id="'+i+'"class="btn btn_remove"><i class="icon ion-md-close"></i></button></td>'+
                                        '</tr>');
        });

        $(document).on('click','.btn_remove', function(){
            var id = $(this).attr('id');

            $('#row'+id).remove();
        });
    });*/
</script>

<?php
    include("guardar.php");
?>

