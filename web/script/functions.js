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

//VALIDACIONES PARA EL PASO 2
function paso2()
{ 
    cantidad_pagos = $('#cantidad_pagos').val();

    console.log(aseguradoras);
    
    if(aseguradoras != null)
    {
        if(cantidad_pagos != null)
        {
            siguiente3();
        }
        else
        {
            AlertaSweet(3, 'Seleccione la cantidad de pagos que desee pagar tú seguro');
        }
    }
    else
    {
        AlertaSweet(3, 'Seleccione una o varias aseguradoras con las cuales desee cotizar');
    }
}

//VALIDACIONES PARA EL PASO 3
function paso3()
{
    nombres = $('#nombre_segv').val();
    apellidos = $('#apellido_segv').val();
    telefono = $('#tel_segv').val();
    whatsapp = $('#what_segv').val();
    correo = $('#email_segv').val();
    hora_visita = $('#hora_contacto').val();
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
                    createUsuario();
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

//DECLARACION DE VARIABLES A UTILIZAR
var id_usuario = '';
var id_cliente_prospecto = '';
var nombres = '';
var apellidos = '';
var telefono = '';
var correo = '';
var hora_visita = '';
var horario = '';
var cantidad_pagos = '';

/*-------------------------------------------------------------------------------------------
  -----------------------FUNCION PARA INSERTAR EN LA TABLA USUARIOS--------------------------
  -------------------------------------------------------------------------------------------*/

function createUsuario()
{  
    $.ajax({
        type: 'POST',
        url: '../../app/controllers/public/index/create_usuario_controller.php',
        data:{
            nombres:nombres,
            apellidos:apellidos,
            telefono:telefono,
            correo:correo,
            fecha_nacimiento:fecha_nacimiento,
            whatsapp:whatsapp
        },
        dataType: 'json',
        success: function(usuario)
        {
          if(usuario[0][0] == 1)
          {
            id_usuario = usuario[0][1];
            createClienteProspecto();
          }
        }
    });
}

/*---------------------------------------------------------------------------------------------
  -----------------------FUNCION PARA INSERTAR EN LA TABLA CLIENTES_PROSPECTOS-----------------
  -------------------------------------------------------------------------------------------*/

function createClienteProspecto()
{
  $.ajax({
    type: 'POST',
    url: '../../app/controllers/public/index/create_cliente_prospecto_controller.php',
    data:
    {
      id_usuario:id_usuario,
      tipo_seguro:tipo_seguro,
      horario:horario,
      cantidad_pagos:cantidad_pagos
    },
    dataType: 'json',
    success: function(cliente)
    {
      console.log(cliente);
      if(cliente[0][0] == 1)
      {
        id_cliente_prospecto = cliente[0][1]
        createCotizacion();
        createCompaniasInteres();
        enviarCorreo()
      }
    }
  });
}

/*---------------------------------------------------------------------------------------------
  -----------------------FUNCION PARA INSERTAR EN LA TABLA COMPANIAS_INTERES-------------------
  -------------------------------------------------------------------------------------------*/
  
function createCompaniasInteres()
{
  $.ajax({
    type: 'POST',
    url: '../../app/controllers/public/index/create_compania_interes_controller.php',
    data:{
      aseguradoras_select:aseguradoras_select,
      id_cliente_prospecto:id_cliente_prospecto
    },
    dataType: 'json',
    success: function()
    {

    }
  });
}

function enviarCorreo()
{
  $.ajax({
    type: 'POST',
    url:'../../app/helpers/correo_cliente.php',
    data:{correo:correo,
    id_cliente_prospecto:id_cliente_prospecto,
    tipo_seguro:tipo_seguro,
    aseguradoras_select:aseguradoras_select},
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
  verificar_telefono_o_pc();
  show_info_section();
  $("select").material_select();
  
  $("#blackground_walls").fadeIn(600).delay(4000).fadeOut(1000);
  cambiar_fondo();

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
    if(id_cliente_prospecto == '')
    {
      paso3();
    }
    else
    {
      enviarCorreo();
    }
    
  });

});



//VARIABLES DE METODOS
var seg=0;
var section_selected=1;
function change_etiquete(){
/*
    $(".icon_container_1").css({"background-color":"rgba(255, 255, 255, 0.411)"});
    $(".seguro_ico_1").css({"filter":"brightness(1)"});
    $(".icon_container_2").css({"background-color":"rgba(255, 255, 255, 0.411)"});
    $(".seguro_ico_2").css({"filter":"brightness(1)"});
    $(".icon_container_3").css({"background-color":"rgba(255, 255, 255, 0.411)"});
    $(".seguro_ico_3").css({"filter":"brightness(1)"}); */


    $(".icon_container_"+seg).css({"background-color":"rgba(173, 50, 191, 0.60)"});
    $(".seguro_ico_"+seg).css({"filter":"brightness(10)"});
   


}
function change_etiquete_back(){
    $(".icon_container_"+seg).css({"background-color":"rgba(255, 255, 255, 0.411)"});
    $(".seguro_ico_"+seg).css({"filter":"brightness(1)"});
}

function show_info_section(){
  limpiar_progress_bar();

  $("#view_email_send").css({"display":"none"});

    $(".info_block_1").css({"display":"none"});
    $(".info_block_2").css({"display":"none"});
    $(".info_block_3").css({"display":"none"});
    $(".info_block_4").css({"display":"none"});

    $(".info_block_"+section_selected).css({"display":"block"});
}

function limpiar_progress_bar(){
  $("#paso_1").css({"background-color":"rgb(35, 109, 158)"});
  $("#paso_2").css({"background-color":"rgba(69, 92, 92, 0.618)"});
}
function llenar_progress_bar(){
  if(new_frm==1){
    $("#paso_1").css({"background-color":"rgb(35, 109, 158)"});
  }
  else if(new_frm ==2){
    $("#paso_2").css({"background-color":"rgb(35, 109, 158)"});
  }
  
}


var formulario = 0;
var seguro_frm=0;
function abrir_form(){
  if(seguro_frm>0){
    verificar_form();
    $("#main_publico").css({"opacity":"0"});
    $("#main_publico").css({"transform":"scale(0.95)"});
      var x = setInterval(function repeat(){
        if(seguro_frm>0){
        $("#main_publico").css({"display":"none"});
        $("#main_publico_forms").css({"display":"block","opacity":"0"});
      
        }
        var x = setInterval(function repeat(){
          if(seguro_frm>0){
          $("main").css({"margin-left":"0"});
          $("#main_publico_forms").css({"display":"block","opacity":"1"});
          formulario = seguro_frm;
          seguro_frm=0;
          
          }
        },500)
         
      },500)
      
  }
}

function verificar_form(){
  $("#frm_seg_de_vida").css({"display":"none"});
  $("#frm_seg_de_incendio").css({"display":"none"});
  $("#frm_seg_medico").css({"display":"none"});
  $("#frm_seg_de_auto").css({"display":"none"});
 

    
 

  if(seguro_frm==1){
    $("#frm_seg_medico").css({"display":"block"});
    $("#form_coti_medico").css({"display":"block"});
  }
  else if(seguro_frm==2){
      $("#frm_seg_de_vida").css({"display":"block"});
      $("#form_coti_vida").css({"display":"block"});
  }

  else if(seguro_frm==3){
    $("#frm_seg_de_incendio").css({"display":"block"});
    $("#form_coti_incendio").css({"display":"block"});
  }

  else if(seguro_frm==4){
    $("#frm_seg_de_auto").css({"display":"block"});
    $("#form_coti_auto").css({"display":"block"});
  }
}




var img_sec=1
function cambiar_fondo(){
    var x = setInterval(function repeat(){
     $("#blackground_walls").fadeIn(600).delay(5000).fadeOut(600);
     
  
      if(img_sec==1){
        $("#blackground_walls").css({"background-image":"url('../../web/img/background/2.jpg')"});
       
        img_sec =2;
      }
      else if(img_sec==2){
        $("#blackground_walls").css({"background-image":"url('../../web/img/background/3.jpg')"});
        img_sec =3;
      }
      else if(img_sec==3){
        $("#blackground_walls").css({"background-image":"url('../../web/img/background/4.jpg')"});
        img_sec =4;
      }
      else if(img_sec==4){
        $("#blackground_walls").css({"background-image":"url('../../web/img/background/1.jpg')"});
        img_sec =1;
      }
    },6200)
  }




var new_frm=1;
function next_frm(){
  
  $("#form_coti_vida").css({"display":"none"});
  $("#form_coti_medico").css({"display":"none"});
  $("#form_coti_incendio").css({"display":"none"});
  $("#form_coti_personal").css({"display":"none"});
  $("#form_coti_auto").css({"display":"none"});
  $("#view_email_send").css({"display":"none"});
    
    

  if(new_frm==1){
      llenar_progress_bar();
    $("#form_coti_vida").css({"display":"block"});
    $("#form_coti_medico").css({"display":"block"});
    $("#form_coti_incendio").css({"display":"block"});
    $("#form_coti_auto").css({"display":"block"});
  }
  else if(new_frm==2){
    llenar_progress_bar();
    $("#form_coti_personal").css({"display":"block"});
  }
  else if(new_frm==3){
  $("#view_email_send").css({"display":"block"});
  }
  
   else if(new_frm==0 || new_frm== null){
  regresar_a_inicio();
  }

}



function regresar_a_inicio(){
 
    $("#main_publico_forms").css({"display":"none"});
    $("#view_email_send").css({"display":"none"});
    $("#main_publico").css({"display":"block"});
    $("#main_publico").css({"opacity":"1"});
  show_info_section();
}


function verificar_telefono_o_pc(){


var isMobile = {
  mobilecheck : function() {
  return (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino|android|ipad|playbook|silk/i.test(navigator.userAgent||navigator.vendor||window.opera)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test((navigator.userAgent||navigator.vendor||window.opera).substr(0,4)))
  }
  }
  
  

  if(isMobile.mobilecheck() == true){
 
  }
  else{
  
    $("#tel_btn").css({"display":"none"});
    $("#wha_btn").css({"display":"none"});
    $("#tel_btn_header").css({"display":"none"});
    $("#wha_btn_header").css({"display":"none"});
    $("#tel_btn_lateral").css({"display":"none"});
    $("#wha_btn_lateral").css({"display":"none"});
  }
}

//DAR TIEMPO DE CARGA A LA PAGINA WEB
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 1400);
}

function showPage() {
  $("#loader").fadeOut("fast");
}

//regresar paso anterior
function regresar_un_paso(){
   limpiar_progress_bar();
  next_frm();
    
}

//AQUI EMPIEZA 
function enviar()
{
  if(formulario == 1)
  {
    datos = {
      formulario:formulario,
      fecha_naci_medico:fecha_naci_medico,
      nombre_conyugue:nombre_conyugue,
      nombre_asegurado_medico:nombre_asegurado_medico,
      fecha_naci_conyugue:fecha_naci_conyugue,
      cantidad_hijo:cantidad_hijo,
      cobertura:cobertura,
      nombre:nombre,
      telefono:telefono,
      correo:correo
    }
  }
  else if(formulario == 2)
  {
    datos = {
      formulario:formulario,
      fecha_naci_vida:fecha_naci_vida,
      nombre_asegurado_vida:nombre_asegurado_vida,
      fumador:fumador,
      suma_asegurada:suma_asegurada,
      cesion_bancaria:cesion_bancaria,
      nombre:nombre,
      telefono:telefono,
      correo:correo
    }
  }
  else if(formulario == 3)
  {
    datos = {
      formulario:formulario,
      fecha_naci_medico:fecha_naci_medico,
      nombre_conyugue:nombre_conyugue,
      nombre_asegurado_medico:nombre_asegurado_medico,
      fecha_naci_conyugue:fecha_naci_conyugue,
      cantidad_hijo:cantidad_hijo,
      cobertura:cobertura,
      nombre:nombre,
      telefono:telefono,
      correo:correo
    }
  }
  else if(formulario == 4)
  {
    datos = {
      formulario:formulario,
      numero_licencia:numero_licencia,
      nombre:nombre,
      telefono:telefono,
      correo:correo
    }
  }
  $.ajax({
    type:'POST', 
    url:'../../app/helpers/insert_datos.php?action=enviar',
    data:datos,
    success:function(dato)
    {
      console.log(dato);
    
      if(dato == 1)
      {
      
        new_frm=3;
        next_frm();
      }
      else
      {
        AlertaSweet(3, 'Ocurrio un problema al enviar el correo, dar clic de nuevo al boton "Solicitar Cotizacion"');
      }
    }

  });
}


/*-------------------------------------------------------------------------------------------------------------------
-------------------------------FUNCION PARA LOS MENSAJES DE SWEETALERT-----------------------------------------------
---------------------------------------------------------------------------------------------------------------------*/
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

//NUEVAS FUNCIONES NZ
function form_contactanos_open(){
  $("#info_block_noinputs").css({"display":"none","opacity":"1"});
  $("#info_block_forminputs").css({"display":"block","opacity":"1"});
}
function form_contactanos_close(){
  $("#info_block_forminputs").css({"display":"none","opacity":"1"});
  $("#info_block_noinputs").css({"display":"block","opacity":"1"});
  
}
//contador de cuantos seguros se han tomado
var nseguros_tomados=0;
function stop_select_segs(){
  aseguradoras=null;
  aseguradoras_select=0;
    $("#asegurador input.select-dropdown").removeAttr('disabled');
    $("#reset_btn_segs").css({"display":"none","opacity":"1"});


    $('#asegurador input.select-dropdown').val("Seleccione una o varias opciones");

    $('#aseguradoras option[value="ACSA"]').prop('selected', false);
    $("#aseguradoras option:selected").removeAttr("selected");
}