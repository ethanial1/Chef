$(document).ready(function(){

    $('#userActualizar').submit(function(e){   
                             
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página

        id = $.trim($('#idu').val()); 
        clave = $.trim($('#claveu').val()); 
        nombre = $.trim($('#nombreu').val());   
        poblacion = $.trim($('#poblacionu').val());  
        estado = $.trim($('#estadou').val());  
        pais = $.trim($('#paisu').val());  
        edad = $.trim($('#edadu').val());  
        descripcion = $.trim($('#descripcionu').val());
        gustos = $.trim($('#gustosu').val());  
        
        $.ajax({
            url: '../DataBase/actualizar.php',
            type: "POST",
            datatype:"json",    
            data:  {id:id, clave,clave, nombre:nombre, poblacion:poblacion, estado:estado, pais:pais, edad:edad, descripcion:descripcion, gustos:gustos},    
            success: function(data) {
                //crud_user.ajax.reload(null, false);
                location.reload();
            }
        });												     			
    });
});