/*$(document).ready(function(){
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

    
    $("#guardar-receta").click(function(){
        $.ajax({
            url:"views/Actions/recetas/guardar.php",
            method: "POST",
            data: $('#ingredientes_receta').serialize(),
            success: function(data){
                alert(data);
                $('#add_receta')[0].reset();
            }
        });
    });

    

});*/

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
    });