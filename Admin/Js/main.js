$(document).ready(function(){
    var id, opcion;
    
    crud_user = $("#crud-user").DataTable({
        "columnDefs":[{
            "targets": -1,
            "data":null,
            "defaultContent": '<div class="text-center"><div class="btn-group"><button type="button" class="btn btn-info btneditar" "><i class="far fa-edit"></i></button><button class="btn btn-outline-danger btnborrar"><i class="fas fa-trash"></i></button></div></div>'
        }]
    });

    var fila; //va a capturar la fila

    //Modales --------------------
    //editar
    $(document).on("click",".btneditar", function(){
        fila = $(this).closest("tr");
        id = parseInt(fila.find('td:eq(0)').text());
        clave = fila.find('td:eq(1)').text();
        nombre = fila.find('td:eq(2)').text();
        poblacion= fila.find('td:eq(3)').text();
        estado = fila.find('td:eq(4)').text();
        pais = fila.find('td:eq(5)').text();
        edad = parseInt(fila.find('td:eq(6)').text());
        descripcion = fila.find('td:eq(7)').text();
        gustos= fila.find('td:eq(8)').text();


        $('#id').val(id);
        $("#nombre").val(nombre);
        $("#poblacion").val(poblacion);
        $("#estado").val(estado);
        $("#pais").val(pais);
        $("#edad").val(edad);
        $("#descripcion").val(descripcion);
        $("#gustos").val(gustos);

        $("#editarModal").modal("show");
    });

    //borrarModal
    $(document).on('click','.btnborrar',function(){
        fila = $(this).closest('tr');
        id = parseInt(fila.find('td:eq(0)').text());
        nombre = fila.find('td:eq(2)').text();

        console.log(nombre);
        $("#idB").val(id);
        $("#nombreB").val(nombre);

        $('#BorrarModal').modal('show');
    });

    //Botones de los modales-------------------------
    //submit para Actualización
    $('#formUpdate').submit(function(e){   
        opcion = 1;                      
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página

        id = $.trim($('#id').val()); 
        nombre = $.trim($('#nombre').val());   
        poblacion = $.trim($('#poblacion').val());  
        estado = $.trim($('#estado').val());  
        pais = $.trim($('#pais').val());  
        edad = $.trim($('#edad').val());  
        descripcion = $.trim($('#descripcion').val());
        gustos = $.trim($('#gustos').val());  
        
        $.ajax({
            url: '../DataBase/actions.php',
            type: "POST",
            datatype:"json",    
            data:  {id:id, nombre:nombre, poblacion:poblacion, estado:estado, pais:pais, edad:edad, descripcion:descripcion, gustos:gustos, opcion:opcion},    
            success: function(data) {
                //crud_user.ajax.reload(null, false);
                location.reload();
            }
            });	
        $('#editarModal').modal('hide');											     			
    });


    //borrar
    $('#formBorrar').submit(function(e){
        //e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        opcion = 2;
        idb = $.trim($('#idB').val());
        
        $.ajax({
            url: '../DataBase/actions.php',
            type: 'POST',
            datatype:'json',
            data: {idb:idb, opcion:opcion},
            success: function(data){
                crud_user.row(fila.parents('tr')).remove().draw(); 
            }
        });
        $('#BorrarModal').modal('hide');
    })

});