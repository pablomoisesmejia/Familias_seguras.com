$(document).ready(function(){

    $('#terreno').mask('##,#00', {reverse: true});
    $('#construccion').mask('##,#00', {reverse: true});
    $('#niveles').mask('00');
    $('#habitaciones').mask('000');
    $('#baños').mask('00');
    $('#cochera').mask('00');
    $('#valor_propiedad').mask('#,#00.00', {reverse: true});

    getTiposPropiedad();
    function getTiposPropiedad()
    {
        $.ajax({
            url: '../../app/controllers/dashboard/propiedades/gettipo_controller.php',
            dataType: 'json',
            success: function(tipos)
            {
                $('#tipo_propiedad').empty();
                $('#tipo_propiedad').append('<option value="" disabled selected>Seleccione el tipo de propiedad</option>');
                if(tipos != '')
                {
                    i = 0;
                    for(i; i<tipos.length; i++)
                    {
                        var option = '';
                        option = option.concat(
                            '<option value="'+tipos[i].PK_id_tipo_propiedad+'">'+tipos[i].tipo_propiedad+'</option>'
                        );
                        $('#tipo_propiedad').append(option);
                    }
                    $('select').material_select();
                }
            }
        });
    }

    getTransaccion();
    function getTransaccion()
    {
        $.ajax({
            url: '../../app/controllers/dashboard/propiedades/get_transaccion_controller.php',
            dataType: 'json',
            success: function(tipo_t)
            {
                $('#transaccion').empty();
                $('#transaccion').append('<option value="" disabled selected>Seleccione el tipo de transacción</option>');
                if(tipo_t != '')
                {
                    i = 0;
                    for(i; i<tipo_t.length; i++)
                    {
                        var option = '';
                        option = option.concat(
                            '<option value="'+tipo_t[i].PK_id_transaccion+'">'+tipo_t[i].transaccion+'</option>'
                        );
                        $('#transaccion').append(option);
                    }
                    $('select').material_select();
                }
            }
        });
    }

    $('#propiedades').on('change', function(){
      
        imagenes = document.getElementById('propiedades').files;
     
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
    
    var tipo_transaccion = '';
    var tipo_propiedad = '';
    var colonia = '';
    var municipio = '';
    var departamento = '';
    var terreno = '';
    var construccion = '';
    var niveles = '';
    var habitaciones = '';
    var banos = '';
    var cochera = '';
    var descripcion = '';
    var amenidades = '';
    var valor = '';
    var id_propiedad = '';

    $('#crear').click(function(){
        imagenes = $('#propiedades').val();
        tipo_transaccion = $('#transaccion').val();
        tipo_propiedad = $('#tipo_propiedad').val();
        colonia = $('#colonia').val();
        municipio = $('#municipio').val();
        departamento = $('#departamento').val();
        terreno = $('#terreno').val();
        construccion = $('#construccion').val();
        niveles = $('#niveles').val();
        habitaciones = $('#habitaciones').val();
        banos = $('#baños').val();
        cochera = $('#cochera').val();
        descripcion = $('#descripcion').val();
        amenidades = $('#amenidades').val();
        valor = $('#valor_propiedad').val();

        if(imagenes != 0)
        {
            if(tipo_transaccion != null)
            {
                if(tipo_propiedad != null)
                {
                    if(colonia != '')
                    {
                        if(municipio != '')
                        {
                            if(departamento != '')
                            {
                                if(terreno != '')
                                {
                                    if(construccion != '')
                                    {
                                        if(niveles != '')
                                        {
                                            if(habitaciones != '')
                                            {
                                                if(banos != '')
                                                {
                                                    if(cochera != '')
                                                    {
                                                        if(valor != '')
                                                        {
                                                            if(descripcion != '')
                                                            {
                                                                if(amenidades != '')
                                                                {
                                                                    $('#crear').attr("disabled", "disabled");
                                                                    creeatePropiedad();
                                                                }
                                                                else
                                                                {
                                                                    AlertaSweet(3, 'Ingrese la amenidades de la propiedad');
                                                                }
                                                            }
                                                            else
                                                            {
                                                                AlertaSweet(3, 'Haga una detallada descripción de la propiedad(plus, defectos, etc)');
                                                            }
                                                        }
                                                        else
                                                        {
                                                            AlertaSweet(3, 'Ingrese el valor de la propiedad');
                                                        }
                                                    }
                                                    else
                                                    {
                                                        AlertaSweet(3, 'Ingrese la capacidad de la cochera en el caso que tenga la propiedad');
                                                    }
                                                }
                                                else
                                                {
                                                    AlertaSweet(3, 'Ingrese la cantidad de baños de la propiedad');
                                                }
                                            }
                                            else
                                            {
                                                AlertaSweet(3, 'Ingrese la cantidad de habitaciones de la propiedad');
                                            }
                                        }
                                        else
                                        {
                                            AlertaSweet(3, 'Ingrese los niveles de la propiedad');
                                        }
                                    }
                                    else
                                    {
                                        AlertaSweet(3, 'Ingrese los metros en los que ha construido');
                                    }
                                }
                                else
                                {
                                    AlertaSweet(3, 'Ingrese cuanto mide el terreno de la propiedad');
                                }
                            }
                            else
                            {
                                AlertaSweet(3, 'Ingrese el departamento donde se encuentra la propiedad');
                            }
                        }
                        else
                        {
                            AlertaSweet(3, 'Ingrese el municipio donde se encuentra la propiedad');
                        }
                    }
                    else
                    {
                        AlertaSweet(3, 'Ingrese la colonia donde se encuentra la propiedad');
                    }
                }
                else
                {
                    AlertaSweet(3, 'Seleccione el tipo de propiedad');
                }
            }
            else
            {
                AlertaSweet(3, 'Seleccione el tipo de transacción que desea');
            }
        }
        else
        {
            AlertaSweet(3, 'Seleccione imagenes de la propiedad');
        }
    });

    function creeatePropiedad()
    {
        datos = {
            tipo_transaccion:tipo_transaccion,
            tipo_propiedad:tipo_propiedad,
            colonia:colonia,
            municipio:municipio,
            departamento:departamento,
            terreno:terreno,
            construccion:construccion,
            niveles:niveles,
            habitaciones:habitaciones,
            banos:banos,
            cochera:cochera,
            descripcion:descripcion,
            amenidades:amenidades,
            valor:valor
        }

        $.ajax({
            type: 'POST',
            url: '../../app/controllers/dashboard/propiedades/create_controller.php',
            data: datos,
            dataType: 'json',
            success: function(propiedad)
            {
                if(propiedad[0][0] == 1)
                {
                    id_propiedad = propiedad[0][1];
                    createImgPropiedad()
                }
                else
                {
                    $('#crear').removeAttr("disabled");
                    AlertaSweet(3, 'Ocurrio un problema al guardar su propiedad');
                }
            }
        });
    }

    function createImgPropiedad()
    {
        var imgPropiedad = new FormData();
        
        imagenes = $('#propiedades')[0].files;
        i = 0;
        j = 0;
        for(i; i<imagenes.length; i++)
        {
            nombre = imagenes[i].name;
            tipo = imagenes[i].type;

            if(tipo == 'image/jpeg' || tipo == 'image/jpg')
            {
                imgPropiedad.append('archivo['+j+']', imagenes[i]);
                j++;
            }
        }
        imgPropiedad.append('id_vehiculo', id_propiedad);

        $.ajax({
            type: 'POST',
            url: '../../app/controllers/dashboard/propiedades/create_img_propiedad_controller.php',
            data: imgPropiedad,
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