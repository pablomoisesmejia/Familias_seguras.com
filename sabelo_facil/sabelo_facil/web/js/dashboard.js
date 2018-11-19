$(document).ready(function(){
    $('.button-collapse').sideNav();
    $('.dropdown-button').dropdown();
    $('.materialboxed').materialbox();
    $('select').material_select();
    $('.tooltipped').tooltip({delay: 50, position: 'bottom'});
    
    $('.datepicker').pickadate({
        monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mier', 'Jue', 'Vir', 'Sab'],
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year,
        today: 'Hoy',
        max: 'Today',
        clear: 'Limpiar',
        close: 'Aceptar',
        format: 'yyyy/mm/dd',
        formatSubmit: 'yyyy/mm/dd',
        closeOnSelect: false ,// Close upon selecting a date,
        container: undefined, // ex. 'body' will append picker to body
        
      });
});


//Editar el SIDE NAV DE MATERIALIZE
$(document).ready(function(){
  mover_login();
    $(".button-collapse").sideNav();
  $('.button-collapse').sideNav({
      menuWidth: 350, // Default is 300
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true, 
      draggable: true, 
      onOpen: function(el) {  }, 
    }
  );
        
  });

  function mover_login(){
    $('#container2').css({'margin-left':'6%','opacity':'1'});
  }

  function cerrar_sesion(){
    window.location.href='../../dashboard/account/logout.php';
  }

  


  function ocultar_panel_superior(){
  
    $("#menu_plegable").css({'transition':'0.2s','opacity':'0','top':'0px','transform':'scale(0.8)'});


    var veces_rep = 1;
  var x  = setInterval(function ocultar(){
    
    if(veces_rep == 1)
    {
      $("#menu_overlay").css({'opacity':'0'});
      $("#container_block").css({'opacity':'0'});
      veces_rep = veces_rep +1;
    }
    else
    {
     
      $("#menu_overlay").css({'display':'none','opacity':'0','transition':'0.5s'});
    $("#container_block").css({'display':'none','opacity':'0','transition':'0.5s'});
    $("#menu_plegable").css({'display':'none','top':'-200px','opacity':'0','transition':'0.5s','transform':'scale(1)'});
  
      setTimeout(x);
    clearInterval(x);
    }
 
  },500)

  }

  function mostrar_panel_superior(){
    
    $("#menu_overlay").css({'display':'block','opacity':'0','transition':'0.5s'});
    $("#container_block").css({'display':'block','opacity':'0','transition':'0.5s'});
    $("#menu_plegable").css({'display':'block','top':'-200px','opacity':'0','transition':'0.5s'});

    var veces_rep = 1;
  var x  = setInterval(function ocultar(){
    
    if(veces_rep == 1)
    {
      $("#menu_overlay").css({'opacity':'1'});
      $("#container_block").css({'opacity':'1'});
   

      veces_rep = veces_rep +1;
    }
    else
    {
     
      $("#menu_plegable").css({'opacity':'1','top':'0px'});
  
      setTimeout(x);
    clearInterval(x);
    }
 
  },500)

  }

  function animar_panel_superior(){
    
    $("#menu_overlay").css({'opacity':'1'});
    $("#container_block").css({'opacity':'1'});
    $("#menu_plegable").css({'opacity':'1'});

  }
var bal_over =0;
  function show_info_baldosa(){

    if(bal_over == 1)
    {
      document.getElementById('info_baldosita').innerHTML='En la opción de administradores podra ver los trabajadores que se han registrado en el sistema y tener control de su informacion personal y laboral ademas de tener una lista de los usuarios';
    }
    else if(bal_over == 2)
    {
      document.getElementById('info_baldosita').innerHTML='En la opción de Categorias podras administrar los diferentes tipos de productos que pueden haber registrados en el sistema.';
    }
    else if(bal_over == 3)
    {
      document.getElementById('info_baldosita').innerHTML='En la opción de productos podras ver todos los registros de los que han sido registrados por ti o otros administradores de los cuales estaran a la venta en el sitio publico web de sabelofacil';
    }
    else if(bal_over == 4)
    {
      document.getElementById('info_baldosita').innerHTML='En la opción de comercios podras ver los envios de solicitud que los representantes de companias y negocios quieren promocionarse en la pagina web de sabelofacil';
    }
    else if(bal_over == 5)
    {
      document.getElementById('info_baldosita').innerHTML='En la opción de materias podras ver las diferentes asignaturas que se imparten por sabelofacil y ser mostradas al publico en el sitio web';
    }
    else if(bal_over == 6)
    {
      document.getElementById('info_baldosita').innerHTML='En la opción de proveedores podras ver los almacenes o lugares que proveen los productos a la empresa y tener un mejor control de los mismos.';
    }
    else if(bal_over == 7)
    {
      document.getElementById('info_baldosita').innerHTML='En la opción de marcas podras administrar las diferentes identidades de negocios y empresas que se estan mostrando o publicitando en la pagina web';
    }
    
  }

  //VERIFICAR SI ES DE MADRUGADA MAÑANA TARDE O NOCHE
  function bienvenida_al_sistema(){
    
    var hora = $("#horadedia").text();
    var user = $("#name").text();
    
    
    
    if(hora >= 0 && hora <=6 ){
      document.getElementById('welcom_text').innerHTML='Buenos días '+user+' se nota que hoy madrugaste, no te olvides de una taza de café.';
    }
    else if(hora >= 7 && hora < 12){
      document.getElementById('welcom_text').innerHTML='Buenos días '+user+' que tengas una linda mañana laboral.';
    }
    else if(hora == 12){
      document.getElementById('welcom_text').innerHTML='Hola '+user+' vaya ya es mediodía, ten linda tarde y no te olvides de almorzar.';
    }
    else if(hora >= 13 && hora <= 18){
      document.getElementById('welcom_text').innerHTML='Buenas tardes '+user+' que tengas una linda tarde laboral.';
    }
    else if(hora >= 19 && hora <= 24 ){
      document.getElementById('welcom_text').innerHTML='Buenas noches '+user+', trabajo de noche? ten una linda jornada.';
    }
  }