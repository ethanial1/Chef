$(document).ready(function(){
    var id, opcion;
    opcion = 5;
    
    adminVendedor = $("#adminVendedor").DataTable({
        "columnDefs":[{
            "targets": -1,
            "data":null,
            "defaultContent": '<div class="text-center"><div class="btn-group"><button type="button" class="btn btn-info btneditar" "><i class="far fa-edit"></i></button><button class="btn btn-outline-danger btnborrar"><i class="fas fa-trash"></i></button></button></div></div>'
        }]
    });

    //botonEditar
    $(document).on("click",".btneditar", function(){
        fila = $(this).closest("tr");

        id = parseInt(fila.find('td:eq(0)').text());
        nombre = fila.find('td:eq(1)').text();
        cantidad = parseInt(fila.find('td:eq(7)').text());

        $('#id').val(id);
        $("#nombre").val(nombre);
        $('#cantidad').val(cantidad)
        $("#edition").modal("show");
    });

    //modalEditar
    $('#formGuardar').submit(function(e){
        opcion = 1;
        //e.preventDefault();//evita el comportamiento normal del sumit
        id = $.trim($('#id').val());
        cantidad = $.trim($('#cantidad').val());

        $.ajax({
            url: "../connection/Admin_Crud.php",
            type: 'Post',
            datatype: 'Json',
            data: {id:id,cantidad:cantidad, opcion:opcion},
            success: function(data){
                adminVendedor.ajax.reload(null,false);
            }
        });
    });

    //botonBorrar
    $(document).on('click','.btnborrar',function(){
        fila = $(this).closest('tr');

        id = parseInt(fila.find('td:eq(0)').text());
        nombre = fila.find('td:eq(1)').text();
        user = fila.find('td:eq(3)').text();
        
        $("#idB").val(id);
        $("#nombreB").val(nombre);
        $('#userB').val(user);
        $('#borrarUser').modal('show');
    })

    $('#borrarusuario').submit(function(e){
        //e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        opcion = 2;
        id = $.trim($('#idB').val());
        usuario = $.trim($('#userB').val());

        $.ajax({
            url: '../connection/Admin_Crud.php',
            type: 'POST',
            datatype:'json',
            data: {id:id,usuario:usuario, opcion:opcion},
            success: function(data){
                tablaProductos.row(fila.parents('tr')).remove().draw(); 
            }
        });
        $('#BorrarModal').modal('hide');
    })
});