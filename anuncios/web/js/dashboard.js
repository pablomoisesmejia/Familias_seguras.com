var date = new Date();
var min = date.getFullYear()+','+(date.getMonth()+1)+','+(date.getDate());//Validacion de fecha minima del datepicker

$(document).ready(function(){
    $('.button-collapse').sideNav();
    $('.dropdown-button').dropdown();
    $('.materialboxed').materialbox();
    $('select').material_select();
    $('.tooltipped').tooltip({delay: 50, position: 'bottom'});

    IndicadorCitas()
    function IndicadorCitas()
    {
      $.ajax({
        url: '../../app/controllers/dashboard/citas/get_citas_proceso_controller.php',
        dataType: 'json',
        success: function(indicador)
        {
          if(indicador.length > 0)
          {
            $('.indicador_cita').css({'display':'inline'});
            $('.indicador_cita').html(indicador.length);
          }
        }
      });
    }

    $('.datepicker').pickadate({
      selectMonths:true,
      selectYears:100,
      today:'',
      clear:'Limpiar',
      close:'Aceptar',
      formatSubmit: 'yyyy-mm-dd',
      closeOnSelect:false,
      container:undefined,
      min: new Date(min)
    });

    $('.timepicker').pickatime({
      default: 'now', // Set default time: 'now', '1:30AM', '16:30'
      fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
      twelvehour: false, // Use AM/PM or 24-hour format
      donetext: 'OK', // text for done-button
      cleartext: 'Clear', // text for clear-button
      canceltext: 'Cancel', // Text for cancel-button,
      container: undefined, // ex. 'body' will append picker to body
      autoclose: false, // automatic close timepicker
      ampmclickable: true, // make AM PM clickable
      aftershow: function(){} //Function for after opening timepicker
    });

    $('#imagenes').on('change', function(){
      $('#banner_top').html('');
    
      imagenes = document.getElementById('imagenes').files;
   
      i=0;
      for(i; i<imagenes.length; i++)
      {
          tamaño = imagenes[i].size;
          tipo = imagenes[i].type;
          nombre = imagenes[i].name;
          var reader = new FileReader();
          
          if(tipo == 'image/jpeg' || tipo == 'image/jpg')
          {
            reader.onload = function(e)
            {
                $('#banner_top').append('<img id="banner_set" width="100%" height="auto" src="'+e.target.result+'">');
                $('.materialboxed').materialbox();
            }
            reader.readAsDataURL(imagenes[i]);
          }
          else
          {
              AlertaSweet(3, 'El archivo '+nombre+' no es un tipo de imagen(jpg ó jpeg)');
              $('#imagenes').val('');
          }
          
      }
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

