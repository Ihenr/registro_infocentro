$(obtener_registros());

function obtener_registros(usuarios){
    $.ajax({
        url: 'buscar.php' ,
        type: 'POST' ,
        dataType: 'html',
        data: {usuarios: usuarios},
    })
        .done(function(resultado){
            $("#tabla_resultado").html(resultado);
        })
        .fail(function(){
            console.log("error");
        });
}


$(document).on('keyup','#busqueda', function(){
    var valorBusqueda = $(this).val();
    if (valorBusqueda != "") {
        obtener_registros(valorBusqueda);
    }else{
        obtener_registros();
    }
});