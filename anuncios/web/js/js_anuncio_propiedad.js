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

    getColonias();
    function getColonias()
    {
        $.ajax({
            url: '../../app/controllers/dashboard/propiedades/get_colonias_controller.php',
            dataType: 'json',
            success: function(colonias)
            {
                $('#colonia').empty();
                $('#colonia').append('<option value="" disabled selected>Seleccione la colonia</option>');
                if(colonias != '')
                {
                    i = 0;
                    for(i; i<colonias.length; i++)
                    {
                        var option = '';
                        option = option.concat(
                            '<option value="'+colonias[i].PK_id_colonia+'">'+colonias[i].colonia+'</option>'
                        );
                        $('#colonia').append(option);
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
    var valor = '';
    var id_propiedad = '';

    /*Amenidades*/
    var comunidad_privada = '0';
    var piscina = '0';
    var cancha_basketball = '0';
    var cancha_tennis = '0';
    var cancha_futbol = '0';
    var gimnasio = '0';
    var spa_sauna = '0';
    var barbacoa = '0';
    var deck = '0';
    var sistema_riego = '0';
    var ac_central = '0';
    var ac_independiente = '0';
    var atico = '0';
    var portico = '0';
    var sotano = '0';
    var bodega = '0';
    var estudio = '0';
    var area_sevicio = '0';
    var pantrie = '0';
    var closets = '0';
    var walking_closet = '0';
    var cocina_isla = '0';
    var desayunador = '0';
    var terraza_nivel_inferior = '0';
    var terraza_nivel_superior = '0';
    var sala_nivel_superior = '0';
    var calentador_agua = '0';
    var cisterna = '0';
    var triturador_basura = '0';
    var lavadora_platos = '0';
    var sistema_gas = '0';
    var conexion = '0';
    var paneles_solares = '0';
    var ventiladores_techo = '0';
    var acceso_discapacitados = '0';
    var ascensor = '0';

    $('input[type="checkbox"]').on('change', function(e){
        if(this.checked)
        {
            variable = $(e.currentTarget).attr('id');
            $('#'+variable+'').val(1);

        }
        else
        {
            variable = $(e.currentTarget).attr('id');
            $('#'+variable+'').val(0);
        }
    });

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
        valor = $('#valor_propiedad').val();

        comunidad_privada = $('#comunidad_privada').val();
        piscina = $('#piscina').val();
        cancha_basketball = $('#cancha_basketball').val();
        cancha_tennis = $('#cancha_tennis').val();
        cancha_futbol = $('#cancha_futbol').val();
        gimnasio = $('#gimnasio').val();
        spa_sauna = $('#spa_sauna').val();
        barbacoa = $('#barbacoa').val();
        deck = $('#deck').val();
        sistema_riego = $('#sistema_riego').val();
        ac_central = $('#ac_central').val();
        ac_independiente = $('#ac_independiente').val();
        atico = $('#atico').val();
        portico = $('#portico').val();
        sotano = $('#sotano').val();
        bodega = $('#bodega').val();
        estudio = $('#estudio').val();
        area_sevicio = $('#area_sevicio').val();
        pantrie = $('#pantrie').val();
        closets = $('#closets').val();
        walking_closet = $('#walking_closet').val();
        cocina_isla = $('#cocina_isla').val();
        desayunador = $('#desayunador').val();
        terraza_nivel_inferior = $('#terraza_nivel_inferior').val();
        terraza_nivel_superior = $('#terraza_nivel_superior').val();
        sala_nivel_superior = $('#sala_nivel_superior').val();
        calentador_agua = $('#calentador_agua').val();
        cisterna = $('#cisterna').val();
        triturador_basura = $('#triturador_basura').val();
        lavadora_platos = $('#lavadora_platos').val();
        sistema_gas = $('#sistema_gas').val();
        conexion = $('#conexion').val();
        paneles_solares = $('#paneles_solares').val();
        ventiladores_techo = $('#ventiladores_techo').val();
        acceso_discapacitados = $('#acceso_discapacitados').val();
        ascensor = $('#ascensor').val();

        if(imagenes != 0)
        {
            if(tipo_transaccion != null)
            {
                if(tipo_propiedad != null)
                {
                    if(colonia != null)
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
                                                                $('#crear').attr("disabled", "disabled");
                                                                creeatePropiedad();
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
            valor:valor,
            comunidad_privada:comunidad_privada,
            piscina:piscina,
            cancha_basketball:cancha_basketball,
            cancha_tennis:cancha_tennis,
            cancha_futbol:cancha_futbol,
            gimnasio:gimnasio,
            spa_sauna:spa_sauna,
            barbacoa:barbacoa,
            deck:deck,
            sistema_riego:sistema_riego,
            ac_central:ac_central,
            ac_independiente:ac_independiente,
            atico:atico,
            portico:portico,
            sotano:sotano,
            bodega:bodega,
            estudio:estudio,
            area_sevicio:area_sevicio,
            pantrie:pantrie,
            closets:closets,
            walking_closet:walking_closet,
            cocina_isla:cocina_isla,
            desayunador:desayunador,
            terraza_nivel_inferior:terraza_nivel_inferior,
            terraza_nivel_superior:terraza_nivel_superior,
            sala_nivel_superior:sala_nivel_superior,
            calentador_agua:calentador_agua,
            cisterna:cisterna,
            triturador_basura:triturador_basura,
            lavadora_platos:lavadora_platos,
            sistema_gas:sistema_gas,
            conexion:conexion,
            paneles_solares:paneles_solares,
            ventiladores_techo:ventiladores_techo,
            acceso_discapacitados:acceso_discapacitados,
            ascensor:ascensor
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