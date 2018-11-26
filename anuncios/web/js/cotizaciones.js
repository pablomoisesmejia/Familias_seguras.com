var date = new Date();
var min = date.getFullYear()-100+','+(date.getMonth()+1)+','+(date.getDate());//Validacion de fecha minima del datepicker
var max = date.getFullYear()-18+','+(date.getMonth()+1)+','+(date.getDate());//Validacion de fecha maxima del datepicker

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

function siguiente3()
{
    $('#frm3').addClass('active');
    $('#frm2').removeClass('active');

    $('#paso3').addClass('active');
    $('#paso2').removeClass('active');

    $('#paso2').css({"display":"none"});
    $('#paso3').css({"display":"block"});

    $('.indicator').removeAttr('style');
    $('.indicator').css({"right": "469px", "left": "-21px","transform":"translate(469px, 0px)", "transition": "transform .5s"});
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

function anterior2()
{
  $('#frm2').addClass('active');
  $('#frm3').removeClass('active');

  $('#paso2').addClass('active');
  $('#paso3').removeClass('active');

  $('#paso3').css({"display":"none"});
  $('#paso2').css({"display":"block"});

  $('.indicator').removeAttr('style');
  $('.indicator').css({"right": "470px", "left": "-12px","transform":"translate(235px, 0px)", "transition": "transform .5s"});
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
    document.getElementById("frm3").disabled = true;
  
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
    $('#paso3').css({"display":"none"});
  
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
    
  
    $('#siguiente3').click(function(){
      paso2();    
    });
  
    $('#anterior1').click(function(){
      anterior1()
    });
  
    $('#anterior2').click(function(){
      anterior2();
    });
  
    $('#cotizar').click(function(){
      paso3();
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