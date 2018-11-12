$(document).ready(function(){

    cargarMarcas();
    function cargarMarcas()
    {
        $.ajax({
            url: '../../app/controllers/public/index/marcas_controller.php',
            dataType:'json',
            success: function(marcas)
            {
                $('#marca_vehiculo').empty();
                $('#marca_vehiculo').append('<option value="" disabled selected>Seleccione una marca</option>');
                if(marcas != '')
                {
                    i = 0;
                    for(i; i<marcas.length; i++)
                    {
                        var option = '';
                        option = option.concat(
                            '<option value="'+marcas[i].PK_id_marca_vehiculo+'">'+marcas[i].marca_vehiculo+'</option>'
                        );
                        $('#marca_vehiculo').append(option);
                    }
                    $('select').material_select();
                }
            }
        });
    }

    $('#marca_vehiculo').on('change', function(){
        id_marca = $('#marca_vehiculo').val();
        $.ajax({
            type:'POST',
            url: '../../app/controllers/public/index/modelos_controller.php',
            data:{id_marca:id_marca},
            dataType: 'json',
            success:function(modelos)
            {
                $('#modelo_vehiculo').empty(); 
                console.log(modelos);

                if(modelos != '')
                {
                    $('#modelo_vehiculo').append('<option value="" selected disabled>Seleccione el modelo del vehiculo</option>');
                    i = 0;
                    for(i; i<modelos.length; i++)
                    {
                        var option = "";
                        option = option.concat(
                            '<option value="'+modelos[i].PK_id_modelo_vehiculo+'">'+modelos[i].modelos_vehiculo+'</option>'
                        );
                        $('#modelo_vehiculo').append(option);
                    }
                    $('select').material_select();
                }
                else
                {
                    $('#modelo_vehiculo').empty();
                    $('#modelo_vehiculo').append('<option value="" disabled selected>No se encontraron modelos para la marca seleccionada</option>'); 
                    $('select').material_select();
                }
            }
        });
    });
});

function Paso1()
{

}