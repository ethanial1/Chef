$(document).ready(function(){
    var id, opcion;
    
    tablacategoria = $("#tabla-categoria").DataTable({
        "columnDefs":[{
            "targets": -1,
            "data":null,
            "defaultContent": '<div class="text-center"><div class="btn-group"><button type="button" class="btn btn-outline-primary btneditar1"><i class="icon ion-md-create"></i></button><button type="button" class="btn btn-outline-dark btneditarfoto"><i class="icon ion-md-images"></i></button><button class="btn btn-outline-danger btnborrar1"><i class="fas fa-trash"></i></button></div></div>'
        }]
    });

    //modales------------------

    //modal editar--
    $(document).on("click",".btneditar1", function(){
        fila = $(this).closest("tr");

        id = parseInt(fila.find('td:eq(0)').text());
        categoria = fila.find('td:eq(1)').text();
        descripcion = fila.find('td:eq(2)').text();


        $('#eid').val(id);
        $("#ecategoria").val(categoria);
        $("#edescripcion").val(descripcion);

        $("#editarCategoria").modal("show");
    });

    //modal borrar--
    $(document).on('click','.btnborrar1',function(){
        fila = $(this).closest('tr');
        id = parseInt(fila.find('td:eq(0)').text());
        nombre = fila.find('td:eq(1)').text();

        $("#idcat").val(id);
        $("#nombreCatB").val(nombre);

        $('#borrarCategoria').modal('show');
    });
    

    //modal editar foto--
    $(document).on('click','.btneditarfoto',function(){
        fila = $(this).closest('tr');
        id = parseInt(fila.find('td:eq(0)').text());

        $("#idfoto").val(id);

        $('#editarfoto').modal('show');
    });

    //botones-------------------

    //boton nueva categoria
    /*
    $(function(){
        $('input[name="anadir"]').on("change", function(){
            var formData = new FormData($("#formNuevaCategoria")[0]);
            opcion = 3;
            $.ajax({
                url: '../DataBase/actions.php',
                type: "POST",
                data: {formData, opcion:opcion},
                contentType: false,
                processData: false,
                success: function(datos){
                    location.reload();
                    console.log('creo');
                }
            });
        });
    });*/
    //boton actualizar-
    $('#formEditarCat').submit(function(e){   
        opcion = 4;                      
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página

        idcategoria = $.trim($('#eid').val()); 
        categoria = $.trim($('#ecategoria').val()); 
        descripcioncategoria = $.trim($('#edescripcion').val()); 
        
        $.ajax({
            url: '../DataBase/actions.php',
            type: "POST",
            datatype:"json",    
            data:  {idcategoria:idcategoria, categoria:categoria, descripcioncategoria:descripcioncategoria, opcion:opcion},    
            success: function(data) {
                //crud_user.ajax.reload(null, false);
                location.reload();
            }
            });	
        $('#editarModal').modal('hide');											     			
    });

    //boton actualizar foto


    //boton borrar categoria
    $('#formBorracat').submit(function(e){
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        opcion = 6;
        idcategoria = $.trim($('#idcat').val());
        
        $.ajax({
            url: '../DataBase/actions.php',
            type: 'POST',
            datatype:'json',
            data: {idcategoria:idcategoria, opcion:opcion},
            success: function(data){
                //tablacategoria.row(fila.parents('tr')).remove().draw(); 
                location.reload();
            }
        });
        $('#borrarCategoria').modal('hide');
    });
});