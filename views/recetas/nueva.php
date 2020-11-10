<div>
    <section id="pantalla-receta">
        <div class="izquierda-receta">
            <form id="add_receta" name="add_receta">
                <div class="form-group">
                    <label for="">Nombre del Platillo.</label>
                    <input type="text" class="form-control" id="" aria-describedby="" >
                    <small id="" class="form-text text-muted">Los nombres son con los que presentamos a tus recetas, asegurate de que sea atractivo...</small>
                </div>
                <div class="form-group">
                    <label for="">Categoria</label>
                    <select name="" id="" class="form-control">
                        <option value="">Helados</option>
                        <option value="">Carnes</option>
                    </select>
                </div>
                <div class="form-group" id="ingredientes_receta">
                    <label for="">Ingredientes</label>
                    <table class="table" id="dynamic_field">
                        <tr>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                    </table>
                    <button type="button" class="btn" name="add" id="add"><i class="icon ion-ios-add"> <small>ingrediente</small></i></button>
                </div>
                <div class="form-group">
                    <label for="">Procedimiento</label>
                    <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Describe el procedimiento a seguir....."></textarea>
                </div>
                <button type="button" id="guardar-receta" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        <div>

        </div>
    </section>
</div>


<!-- JQuery, Popper, Js, Bootstrap Js-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
    var i = 1;
        $('#add').click(function(){
            i++;
            $('#dynamic_field').append('<tr id="row'+i+'">'+
                                        '<td><input type="text" class="form-control"></td>'+
                                        '<td><button type="button" name="btn_remove" id="'+i+'"class="btn btn_remove"><i class="icon ion-md-close"></i></button></td>'+
                                        '</tr>');
        });

        $(document).on('click','.btn_remove', function(){
            var id = $(this).attr('id');

            $('#row'+id).remove();
        });

        $("#guardar-receta").click(function(){
            $.ajax({
                url:"views/recetas/guardar.php",
                method: "POST",
                data: $('#ingredientes_receta').serialize(),
                success: function(data){
                    alert(data);
                    $('#add_receta')[0].reset();
                }
            });
        });


    });
</script>

