var fecha_nacimiento = ''
var marca_vehiculo = '';
var modelo_vehiculo = '';
var anio = '';
var origen_vehiculo = '';
var valor_vehiculo = '';
var vehiculos = [];

var tipo_seguro = 4;

function Paso1()
{
    tabla_vehiculo = $('#vehiculos tr').length;
      if(tabla_vehiculo != 0)
      {
        siguiente2();
      }
      else
      {
        AlertaSweet(3, 'Ingrese al menos un vehiculo para seguir con la cotización');
      }
}

$(document).ready(function(){

    $('.modal').modal();
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

    cargarOrigenVehiculo();
    function cargarOrigenVehiculo()
    {
        $.ajax({
            url: '../../app/controllers/public/index/origenes_vehiculo_controller.php',
            dataType: 'json',
            success:  function(origenes)
            {
                $('#origen_vehiculo').empty();
                $('#origen_vehiculo').append('<option value="" disabled selected>Seleccione una opción</option>');
                if(origenes != '')
                {
                    i = 0;
                    for(i; i<origenes.length; i++)
                    {
                        var option = '';
                        option = option.concat(
                            '<option value="'+origenes[i].PK_id_origen_vehiculo+'">'+origenes[i].origen_vehiculo+'</option>'
                        );
                        $('#origen_vehiculo').append(option);
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


    $('#agregar').click(function(){
        marca_vehiculo = $('#marca_vehiculo').val();
        modelo_vehiculo = $('#modelo_vehiculo').val();
        anio = $('#anio').val();
        origen_vehiculo = $('#origen_vehiculo').val();
        valor_vehiculo = $('#valor_vehiculo').val();

        nombre_marca = $('#marca input.select-dropdown').val();
        nombre_modelo = $('#modelo input.select-dropdown').val();
        //console.log(nombre_marca);
        if(vehiculos.length < 5)
        {
            if(marca_vehiculo != null)
            {
                if(modelo_vehiculo != null)
                {
                    if(anio != '')
                    {
                        if(origen_vehiculo != null)
                        {
                            if(valor_vehiculo != '')
                            {
                                var fila_vehiculo = [];
                                fila_vehiculo.push(nombre_marca, nombre_modelo, marca_vehiculo, modelo_vehiculo, anio, origen_vehiculo, valor_vehiculo);
                                vehiculos.push(fila_vehiculo);

                                $('#vehiculos').empty();
                                for(i = 0; i<vehiculos.length; i++)
                                { 
                                    var fila = '';
                                    fila = fila.concat(
                                        '<tr id="'+i+'">',
                                            '<td>'+vehiculos[i][0]+'</td>',
                                            '<td>'+vehiculos[i][1]+'</td>',
                                            '<td>'+vehiculos[i][5]+'</td>',
                                            '<td><a class="btn purple eliminar">Eliminar</a></td>',
                                        '</tr>'
                                    );
                                    $('#vehiculos').append(fila);
                                }
                                $('#anio').val('');
                                $('#valor_vehiculo').val('');
                                cargarMarcas();
                                $('#modelo_vehiculo').empty();
                                $('#modelo_vehiculo').append('<option value="" disabled selected>Seleccione una marca para mostrar los modelos</option>');
                                $('select').material_select();
                                cargarOrigenVehiculo();

                            }
                            else
                            {
                                AlertaSweet(3, 'Ingrese el valor del vehiculo');
                            }
                        }
                        else
                        {
                            AlertaSweet(3, 'Seleccione el origen del vehiculo');
                        }
                    }
                    else
                    {
                        AlertaSweet(3, 'Ingrese el año del vehiculo');
                    }
                }
                else
                {
                    AlertaSweet(3, 'Seleccione el modelo del vehiculo');
                }
            }
            else
            {
                AlertaSweet(3, 'Seleccione la marca del vehiculo');
            }
        }
        else
        {
            AlertaSweet(3, 'Solo puedes agregar hasta 5 vehiculos');
        }
    });

    $('#table_vehiculo').on('click', '#vehiculos .eliminar', function(e){
        e.preventDefault();
        id = $(this).parent().parent().attr('id');
        vehiculos.splice(id, 1);
        $('#vehiculos').empty();
        for(i = 0; i<vehiculos.length; i++)
        { 
            var fila = '';
            fila = fila.concat(
                '<tr id="'+i+'">',
                    '<td>'+vehiculos[i][0]+'</td>',
                    '<td>'+vehiculos[i][1]+'</td>',
                    '<td>'+vehiculos[i][5]+'</td>',
                    '<td><a class="btn purple eliminar">Eliminar</a></td>',
                '</tr>'
            );
            $('#vehiculos').append(fila);
        }
    });
});


function createCotizacion()
{
    $.ajax({
        type: 'POST',
        url: '../../app/controllers/public/index/create_seguro_vehiculo.php',
        data: {
            vehiculos:vehiculos,
            id_cliente_prospecto:id_cliente_prospecto
        },
        dataType: 'json',
        success: function(datos)
        {
            console.log(datos)
        }
    });
}