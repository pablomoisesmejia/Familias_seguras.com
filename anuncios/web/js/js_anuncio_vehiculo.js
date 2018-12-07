var date = new Date();
var min = date.getFullYear()-50//Validacion de fecha minima del datepicker
var max = date.getFullYear()//Validacion de fecha maxima del datepicker


//console.log(min, max);

$(document).ready(function(){

    for(min; min <= max; min++)
    {
        console.log(min);
        var option = '';
        option = option.concat(
            '<option value="'+min+'">'+min+'</option>'
        );
        $('#anio_vehiculo').append(option);
    }
    
    cargarMarcas();
    function cargarMarcas()
    {
        $.ajax({
            url: '../../../app/controllers/public/index/marcas_controller.php',
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
            url: '../../../app/controllers/public/index/modelos_controller.php',
            data:{id_marca:id_marca},
            dataType: 'json',
            success:function(modelos)
            {
                $('#modelo_vehiculo').empty();

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