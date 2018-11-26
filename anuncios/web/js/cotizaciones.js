var date = new Date();
var min = date.getFullYear()-100+','+(date.getMonth()+1)+','+(date.getDate());//Validacion de fecha minima del datepicker
var max = date.getFullYear()-18+','+(date.getMonth()+1)+','+(date.getDate());//Validacion de fecha maxima del datepicker

//FUNCION PARA OBTENER LAS VARIABLES GET
function getUrlVars() 
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for (var i = 0; i < hashes.length; i++) 
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

getUrlVars();
correo_anunciante = decodeURI(getUrlVars()['correo']);
id = decodeURI(getUrlVars()['id']);
if(id != '')
{
  if(correo_anunciante == '')
  {
    swal({
      title: 'Aviso',
      text: 'Seleccione un anunciante para realizar una cotizacion',
      icon: 'warning',
      button: 'aceptar'
    }).then(value =>
      {
        location.href = 'detalle_producto.php?id='+id+'';
      });
  }
}
else
{
  swal({
    title: 'Aviso',
    text: 'No ha seleccionado ningun anunciante',
    icon: 'warning',
    button: 'aceptar'
  }).then(value =>
    {
      location.href = 'index.php';
    });
}

//FUNCIONES PARA CAMBIAR AL SIGUIENTE PASO
function siguiente2()
{
    $('#frm2').addClass('active');
    $('#frm1').removeClass('active');

    $('#paso2').addClass('active');
    $('#paso1').removeClass('active');

    $('#paso1').css({"display":"none"});
    $('#paso2').css({"display":"block"});

    $('.indicator').removeAttr('style');
    $('.indicator').css({"right": "458px", "left": "-12px","transform":"translate(235px, 0px)", "transition": "transform .5s"});
}

//FUNCIONES PARA CAMBIAR AL ANTERIOR CASO
function anterior1()
{
  $('#frm1').addClass('active');
  $('#frm2').removeClass('active');

  $('#paso1').addClass('active');
  $('#paso2').removeClass('active');

  $('#paso2').css({"display":"none"});
  $('#paso1').css({"display":"block"});

  $('.indicator').removeAttr('style');
  $('.indicator').css({"right": "445px", "left": "0px","transform":"translate(0px, 0px)", "transition": "transform .5s"});
}

//VALIDACIONES PARA EL PASO 2
function paso2()
{
    if(tipo_seguro == 3 || tipo_seguro == 4)
    {
      fecha_nacimiento = $('#fecha_nacimiento').val();
    }
    nombres=$('#nombre_segv').val();
    apellidos=$('#apellido_segv').val();
    telefono=$('#tel_segv').val();
    correo=$('#email_segv').val();
    hora_visita=$('#hora_contacto').val();
    if(hora_visita==='manana_1')
    {
      horario = '7:00 - 9:00am';
    }
    if(hora_visita==='manana_2')
    {
      horario = '10:00 - 12:00pm';
    }
    if(hora_visita==='tarde_1')
    {
      horario = '1:00 - 3:00pm'
    }
    if(hora_visita==='tarde_2')
    {
      horario = '4:00 - 7:00pm'
    }

    if(tipo_seguro == 3 || tipo_seguro == 4)
    {
      if(fecha_nacimiento == '')
      {
        AlertaSweet(3, 'Seleccione la fecha de nacimiento');
      }
    }

    if(nombres != '')
    {
        if(apellidos != '')
        {
          
          if(telefono != '')
          {
            if(correo != '')
            {
                if(hora_visita != null)
                {
                    enviarCorreo();
                }
                else
                {
                    AlertaSweet(3, 'Seleccione la hora de visita');
                }
            }
            else
            {
            AlertaSweet(3, 'Escriba su correo electrónico');
            }
          }
          else
          {
              AlertaSweet(3, 'Escriba su número de teléfono');
          }
        }
        else
        {
            AlertaSweet(3, 'Escriba sus apellidos completo');
        }
    }
    else
    {
      AlertaSweet(3, 'Escriba su nombre completo');
    }
}

datos = {};


function enviarCorreo()
{
    if(tipo_seguro == 1)
    {
        datos = {
            nombre_conyugue:nombre_conyugue,
            fecha_nacimiento_conyugue:fecha_nacimiento_conyugue,
            cantidad_hijos:cantidad_hijos,
            nombres:nombres,
            apellidos:apellidos,
            telefono:telefono,
            correo:correo,
            fecha_nacimiento:fecha_nacimiento,
            horario:horario,
            tipo_seguro:tipo_seguro,
            correo_anunciante:correo_anunciante
        }
    }
    if(tipo_seguro == 2)
    {
        datos = {
            fumador:fumador,
            suma_asegurada:suma_asegurada,
            cesion_bancaria:cesion_bancaria,
            nombres:nombres,
            apellidos:apellidos,
            telefono:telefono,
            correo:correo,
            fecha_nacimiento:fecha_nacimiento,
            horario:horario,
            tipo_seguro:tipo_seguro,
            correo_anunciante:correo_anunciante
        }
    }
    if(tipo_seguro == 3)
    {
        datos = {
            tipo_inmueble:tipo_inmueble,
            direccion_inmueble:direccion_inmueble,
            asegurado_calidad:asegurado_calidad,
            valor_construccion:valor_construccion,
            valor_contenido:valor_contenido,
            nombres:nombres,
            apellidos:apellidos,
            telefono:telefono,
            correo:correo,
            fecha_nacimiento:fecha_nacimiento,
            horario:horario,
            tipo_seguro:tipo_seguro,
            correo_anunciante:correo_anunciante
        }
    }
    if(tipo_seguro == 4)
    {
        datos = {
            vehiculos:vehiculos,
            nombres:nombres,
            apellidos:apellidos,
            telefono:telefono,
            correo:correo,
            fecha_nacimiento:fecha_nacimiento,
            horario:horario,
            tipo_seguro:tipo_seguro,
            correo_anunciante:correo_anunciante
        }
    }
  $.ajax({
    type: 'POST',
    url:'../app/helpers/correo_anuncio.php',
    data:datos,
    success:function(dato)
    {
      console.log(dato);
    
      if(dato == 1)
      {
        $("#view_email_send").show(0);
      }
      else
      {
        AlertaSweet(3, 'Ocurrio un problema al enviar el correo, dar clic de nuevo al boton "Solicitar Cotizacion"');
      }
    }
  });
}

$(document).ready(function(){
     
    $("#view_email_send").hide(0);
    $("select").material_select();

  
    $('.datepicker').pickadate({
      selectMonths:true,
      selectYears:100,
      today:'',
      clear:'Limpiar',
      close:'Aceptar',
      formatSubmit: 'yyyy-mm-dd',
      closeOnSelect:false,
      container:undefined,
      min: new Date(min),
      max: new Date(max)
    });
    
    //Desactivar los tabs por estetica
    document.getElementById("frm1").disabled = true;
    document.getElementById("frm2").disabled = true;
  
    //PARA EL ORDEN QUE SELECCIONO LAS ASEGURADORAS
    aseguradoras = null;
    aseguradoras_select = 0;
    $('#aseguradoras').change(function(){
   
      aseguradoras = $('#asegurador input.select-dropdown').val();
      if(aseguradoras == 'Seleccione una o varias opciones')
      {
        aseguradoras = null;
        aseguradoras_select = aseguradoras
      }  
  
      if(aseguradoras != null)
      {
        aseguradoras = aseguradoras.split(", ");
    
        for(i = 0; i<aseguradoras.length; i++)
        {
          if(aseguradoras.length <= 5)
          {
            aseguradoras_select = aseguradoras
            if(aseguradoras.length == 5)
              {
                $("#asegurador input.select-dropdown").attr('disabled','disabled')
                $("#reset_btn_segs").css({"display":"block","opacity":"1"});
                AlertaSweet(3, 'Solo puede seleccionar 5 aseguradoras como maximo');
               
              }
          }
          else
          {
            AlertaSweet(3, 'Solo puede seleccionar 5 aseguradoras como maximo');
            $('#asegurador input.select-dropdown').val(aseguradoras_select.toString());
        
            //nombre de la ultima aseguradora
            aseguradoras[aseguradoras.length-1]
          }
        }
      }
      console.log(aseguradoras_select); 
    });
  
    //Mostrar solo el formulario del paso 1 y los demas ocultarlos
    $('#paso1').css({"display":"block"});
    $('#paso2').css({"display":"none"});
  
    if(tipo_seguro != 4)
    {
      $('#siguiente2').click(function(){
        Paso1();
      });
    }
    else
    {
      $('#siguiente2').click(function(){
        tabla_vehiculo = $('#vehiculos tr').length;
        if(tabla_vehiculo != 0)
        {
          siguiente2();
        }
        else
        {
          AlertaSweet(3, 'Ingrese al menos un vehiculo para seguir con la cotización');
        }
      });
    }
  
    $('#anterior1').click(function(){
      anterior1()
    });
  
    $('#cotizar').click(function(){
      paso2();
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