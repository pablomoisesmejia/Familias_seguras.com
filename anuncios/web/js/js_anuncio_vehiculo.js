var date = new Date();
var min = date.getFullYear()-50//Validacion de fecha minima del datepicker
var max = date.getFullYear()//Validacion de fecha maxima del datepicker


//console.log(min, max);

$(document).ready(function(){

    $('#motor').mask('0.0');
    $('#valor_vehiculo').mask('##,#00', {reverse: true});
    $('#kilometraje').mask('##,#00', {reverse: true});
    
    var marca_vehiculo = '';
    var modelo_vehiculo = '';
    var anio_vehiculo = '';
    var color_vehiculo = '';
    var kilometraje = '';
    var transmision = '';
    var motor = '';
    var valor_vehiculo = '';
    //Variables para los chechbox
    var vidrios_electricos = 'No';
    var espejos_electricos = 'No';
    var aire_acondicionado = 'No';
    var bolsas_aire = 'No';
    var sistema_eco = 'No';
    var mando_timon = 'No';
    var rines_especiales = 'No';
    var camara_trasera = 'No';
    var sensores_parqueo = 'No';
    var bluetooth = 'No';
    var combustible = 'No';
    var sunroof = 'No';
    var luces_xenon = 'No';
    var cruise_control = 'No';
    var mando_distancia = 'No';
    var gps = 'No';
    var tapiceria_cuero = 'No';
    var dvd_trasero = 'No';
    $('#vidrios_electricos').change(function(){
        var checkeado = $(this).prop("checked");
        if(checkeado)
        {
            vidrios_electricos = 'Si';
        }
        else
        {
            vidrios_electricos = 'No';
        }
    });
    
    $('#espejos_electricos').change(function(){
        var checkeado = $(this).prop("checked");
        if(checkeado)
        {
            espejos_electricos = 'Si';
        }
        else
        {
            espejos_electricos = 'No';
        }
    });
    
    $('#aire_acondicionado').change(function(){
        var checkeado = $(this).prop("checked");
        if(checkeado)
        {
            aire_acondicionado = 'Si';
        }
        else
        {
            aire_acondicionado = 'No';
        }
    });
    
    $('#bolsas_aire').change(function(){
        var checkeado = $(this).prop("checked");
        if(checkeado)
        {
            bolsas_aire = 'Si';
        }
        else
        {
            bolsas_aire = 'No';
        }
    });
    
    $('#sistema_eco').change(function(){
        var checkeado = $(this).prop("checked");
        if(checkeado)
        {
            sistema_eco = 'Si';
        }
        else
        {
            sistema_eco = 'No';
        }
    });
    
    $('#mandos_timon').change(function(){
        var checkeado = $(this).prop("checked");
        if(checkeado)
        {
            mandos_timon = 'Si';
        }
        else
        {
            mandos_timon = 'No';
        }
    });
    
    $('#rines_especiales').change(function(){
        var checkeado = $(this).prop("checked");
        if(checkeado)
        {
            rines_especiales = 'Si';
        }
        else
        {
            rines_especiales = 'No';
        }
    });
    
    $('#camara_trasera').change(function(){
        var checkeado = $(this).prop("checked");
        if(checkeado)
        {
            camara_trasera = 'Si';
        }
        else
        {
            camara_trasera = 'No';
        }
    });
    
    $('#sensores_parqueo').change(function(){
        var checkeado = $(this).prop("checked");
        if(checkeado)
        {
            sensores_parqueo = 'Si';
        }
        else
        {
            sensores_parqueo = 'No';
        }
    });
    
    $('#bluetooth').change(function(){
        var checkeado = $(this).prop("checked");
        if(checkeado)
        {
            bluetooth = 'Si';
        }
        else
        {
            bluetooth = 'No';
        }
    });
    
    $('#combustible').change(function(){
        var checkeado = $(this).prop("checked");
        if(checkeado)
        {
            combustible = 'Si';
        }
        else
        {
            combustible = 'No';
        }
    });
    
    $('#sunroof').change(function(){
        var checkeado = $(this).prop("checked");
        if(checkeado)
        {
            sunroof = 'Si';
        }
        else
        {
            sunroof = 'No';
        }
    });
    
    $('#luces_xenon').change(function(){
        var checkeado = $(this).prop("checked");
        if(checkeado)
        {
            luces_xenon = 'Si';
        }
        else
        {
            luces_xenon = 'No';
        }
    });
    
    $('#cruise_control').change(function(){
        var checkeado = $(this).prop("checked");
        if(checkeado)
        {
            cruise_control = 'Si';
        }
        else
        {
            cruise_control = 'No';
        }
    });
    
    $('#mando_distancia').change(function(){
        var checkeado = $(this).prop("checked");
        if(checkeado)
        {
            mando_distancia = 'Si';
        }
        else
        {
            mando_distancia = 'No';
        }
    });
    
    $('#gps').change(function(){
        var checkeado = $(this).prop("checked");
        if(checkeado)
        {
            gps = 'Si';
        }
        else
        {
            gps = 'No';
        }
    });
    
    $('#tapiceria').change(function(){
        var checkeado = $(this).prop("checked");
        if(checkeado)
        {
            tapiceria = 'Si';
        }
        else
        {
            tapiceria = 'No';
        }
    });
    
    $('#dvd_trasero').change(function(){
        var checkeado = $(this).prop("checked");
        if(checkeado)
        {
            dvd_trasero = 'Si';
        }
        else
        {
            dvd_trasero = 'No';
        }
    });

    $('#vehiculos').on('change', function(){
      
        imagenes = document.getElementById('vehiculos').files;
     
        i=0;
        for(i; i<imagenes.length; i++)
        {
            tamaño = imagenes[i].size;
            tipo = imagenes[i].type;
            nombre = imagenes[i].name;
            var reader = new FileReader();
            
            if(tipo == 'image/jpeg' || tipo == 'image/jpg')
            {
                
            }
            else
            {
                AlertaSweet(3, 'El archivo '+nombre+' no es un tipo de imagen(jpg ó jpeg)');
            }
            reader.readAsDataURL(imagenes[i]);
        }
    });

    var id_vehiculo = '';
    
    $('#crear').click(function(){
        marca_vehiculo = $('#marca_vehiculo').val();
        modelo_vehiculo = $('#modelo_vehiculo').val();
        anio_vehiculo = $('#anio_vehiculo').val();
        color_vehiculo = $('#color_vehiculo').val();
        kilometraje = $('#kilometraje').val();
        transmision = $('#transmision').val();
        motor = $('#motor').val();
        valor_vehiculo = $('#valor_vehiculo').val();

        if($('#vehiculos').val() != 0)
        {
            if(marca_vehiculo != null)
            {
                if(modelo_vehiculo != null)
                {
                    if(anio_vehiculo != null)
                    {
                        if(color_vehiculo != '')
                        {
                            if(kilometraje != '')
                            {
                                if(transmision != null)
                                {
                                    if(motor != '')
                                    {
                                        if(valor_vehiculo != '')
                                        {
                                            $('#crear').attr("disabled", "disabled");
                                            createVehiculo();
                                        }
                                        else
                                        {
                                            AlertaSweet(3, 'Ingrese el valor de su vehículo');
                                        }
                                    }
                                    else
                                    {
                                        AlertaSweet(3, 'Ingrese la potencia del motor de su vehículo');
                                    }
                                }
                                else
                                {
                                    AlertaSweet(3, 'Seleccione el tipo de transmision de su vehículo');
                                }
                            }
                            else
                            {
                                AlertaSweet(3, 'Ingrese el kilometraje de su vehículo');
                            }
                        }
                        else
                        {
                            AlertaSweet(3, 'Ingrese el color de su vehículo(mirar tarjeta de circulación)');
                        }
                    }
                    else
                    {
                        AlertaSweet(3, 'Seleccione el año de su vehículo');
                    }
                }
                else
                {
                    AlertaSweet(3, 'Seleccione el modelo de su vehículo');
                }
            }
            else
            {
                AlertaSweet(3, 'Seleccione la marca de su vehículo');
            }
        }
        else
        {
            AlertaSweet(3, 'Seleccione imagenes de su vehículo');
        }
    });


    function createVehiculo()
    {
        datos = {
            marca_vehiculo:marca_vehiculo,
            modelo_vehiculo:modelo_vehiculo,
            anio_vehiculo:anio_vehiculo,
            color_vehiculo:color_vehiculo,
            kilometraje:kilometraje,
            transmision:transmision,
            motor:motor,
            valor_vehiculo:valor_vehiculo,
            vidrios_electricos:vidrios_electricos,
            espejos_electricos:espejos_electricos,
            aire_acondicionado:aire_acondicionado,
            bolsas_aire:bolsas_aire,
            sistema_eco:sistema_eco,
            mando_timon:mando_timon,
            rines_especiales:rines_especiales,
            camara_trasera:camara_trasera,
            sensores_parqueo:sensores_parqueo,
            bluetooth:bluetooth,
            combustible:combustible,
            sunroof:sunroof,
            luces_xenon:luces_xenon,
            cruise_control:cruise_control,
            mando_distancia:mando_distancia,
            gps:gps,
            tapiceria_cuero:tapiceria_cuero,
            dvd_trasero:dvd_trasero,
        }
        
        $.ajax({
            type: 'POST',
            url: '../../app/controllers/dashboard/vehiculos/create_controller.php',
            data: datos,
            dataType: 'json',
            success: function(datos)
            {
                if(datos[0][0] == 1)
                {
                    id_vehiculo = datos[0][1];
                    createImagenVehiculo();
                }
                else
                {
                    $('#crear').removeAttr("disabled");
                    AlertaSweet(3, 'Ocurrio un problema al guardar el vehiculo')
                }
            }
        });
    }

    function createImagenVehiculo()
    {
        var imgVehiculo = new FormData();
        
        imagenes = $('#vehiculos')[0].files;
        i = 0;
        j = 0;
        for(i; i<imagenes.length; i++)
        {
            nombre = imagenes[i].name;
            tipo = imagenes[i].type;

            if(tipo == 'image/jpeg' || tipo == 'image/jpg')
            {
                imgVehiculo.append('archivo['+j+']', imagenes[i]);
                j++;
            }
        }
        imgVehiculo.append('id_vehiculo', id_vehiculo);

        $.ajax({
            type: 'POST',
            url: '../../app/controllers/dashboard/vehiculos/create_img_vehiculo_controller.php',
            data: imgVehiculo,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(datos)
            {
                if(datos[0][0] == 1)
                {
                    location.href = 'index.php'
                }   
            }
        });
        
    }

    for(min; min <= max; min++)
    {
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

function AlertaSweet(icono, texto)
{
  var icon = '';
  var titulo = '';
  if(icono == 1)
  {
    titulo = "Éxito";
    icon = "success";
  }
  if(icono == 2)
  {
    titulo = "Error";
    icon = "error";
  }
  if(icono == 3)
  {
    titulo = "Advertencia";
    icon = "warning";
  }
  if(icono == 4)
  {
    titulo = "Aviso";
    icon = "info";
  }

  swal({
    title: titulo,
    text: texto,
    icon: icon,
    button: 'Aceptar',
    closeOnClickOutside: false,
    closeOnEsc: false
  });
}