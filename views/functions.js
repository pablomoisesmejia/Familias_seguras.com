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


    $(".icon_container_"+seg).css({"background-color":"rgba(35, 99, 219,0.6)"});
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

$( document ).ready(function(){
     
     verificar_telefono_o_pc();
  show_info_section();
  $("select").material_select();
  $('.datepicker').pickadate({
    selectMonths:true,
    selectYears:15,
    today:'Actual',
    clear:'Limpiar',
    close:'Aceptar',
    closeOnSelect:false,
    container:undefined,
    min: new Date(1940,1,1),
    max: new Date(2000,1,22)

  })
    $("#blackground_walls").fadeIn(600).delay(4000).fadeOut(1000);
    cambiar_fondo();

})

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
        $("#blackground_walls").css({"background-image":"url('public/img/background/2.jpg')"});
       
        img_sec =2;
      }
      else if(img_sec==2){
        $("#blackground_walls").css({"background-image":"url('public/img/background/3.jpg')"});
        img_sec =3;
      }
      else if(img_sec==3){
        $("#blackground_walls").css({"background-image":"url('public/img/background/4.jpg')"});
        img_sec =4;
      }
      else if(img_sec==4){
        $("#blackground_walls").css({"background-image":"url('public/img/background/1.jpg')"});
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

//AQUI EMPIEZA MI PENDEJEZ HUMANA (F. Pablo)
function enviar(){
  correo=$('#email_segv').val();
  if(correo != '')
  {
    $.ajax({
      type:'POST', 
      url:'resources/views/insert_datos.php?action=enviar',
      data:{correo:correo},
      success:function(dato){
        console.log(dato);
      
        if(dato == 1)
        {
        
          new_frm=3;
          next_frm();
        }
      }
    });
  }
  else
  {
    alert('Ingrese correo');
  }
};