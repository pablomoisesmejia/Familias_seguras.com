$(document).ready(function(){
    $('.button-collapse').sideNav();
    $('.slider').slider();
    $('.parallax').parallax();
    $('.modal').modal();
    $('.materialboxed').materialbox();
    $('.tooltipped').tooltip({delay: 50, position: 'bottom'});
    $('select').material_select();
    CargarAnuncios();
});

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
var categoria = 0;
var filename = location.pathname.substr(location.pathname.lastIndexOf("/")+1);
if(filename == 'vehiculos_detalle_v.php')
{
  categoria = 1;
}
if(filename == 'pagina.php')
{
  categoria = 2;
}
if(filename == 'pagina.php')
{
  document.amenidades.cbx1.disabled=true;
}

$('#enviar_mensaje').click(function(){
  id = decodeURI(getUrlVars()['id']);
  location.href =  'enviar_mensaje.php?id='+id+'&cat='+categoria+'';
});

$('#cita').click(function(){
  id = decodeURI(getUrlVars()['id']);
  location.href =  'citas.php?id='+id+'&cat='+categoria+'';
});

function llamada(numero)
{
  location.href ='tel:+503'+numero+'';
}

function whatsapp(numero)
{
  location.href ='whatsapp://send/?phone=503'+numero+'';
}

//Aqui empieza el ajax
var seccion = 0;//La seccion 1  es de propiedades en venta y la seccion 2 es de propiedade en alquiler, para vehiculos no se ocupa esta variable
var filtro = '';
var ordenar = '';
var anuncios = '';
var url = '';
var cantidad = '';

$('#ordenar').change(function(){
  ordenar = $('#ordenar').val();
  CargarAnuncios();
});

$('#cantidad').change(function(){
  cantidad = $('#cantidad').val();
  Paginacion(anuncios, cantidad);
});

function Paginacion(anuncios, cantidad)
{
  for(i = 0; i<anuncios.length; i++)
  {
    console.log(anuncios[i])
  }
  $('#paginacion').pagination({
    dataSource: anuncios,
    pageSize: cantidad,
    callback: function(anuncios, pagination)
    {
      if(filename == 'productos.php')
      {
        $('#anuncios').empty();
        for(i = 0; i<anuncios.length; i++)
        {
          var card = '';
          card = card.concat(
            '<div class="col s12 m4 l3">',
              '<a href="detalle_producto.php?id='+anuncios[i].id_anuncio+'">',
                  '<div class="card hoverable">',
                      '<div class="card-image">',
                          '<img href="detalle_producto.php?id='+anuncios[i].id_anuncio+'" src="../web/img/productos/'+anuncios[i].imagen_producto+'" class="">',
                          '<a href="detalle_producto.php?id='+anuncios[i].id_anuncio+'" class="btn-floating halfway-fab waves-effect waves-light purple tooltipped" data-tooltip="Ver detalle"><i class="material-icons">add</i></a>',
                      '</div>',
                      '<div style="color:white;" class="card-content purple darken-3" href="detalle_producto.php?id='+anuncios[i].id_anuncio+'">',
                          '<span style="font-size:1.2em;" class="card-title">'+anuncios[i].nombre_anuncio+'</span>',
                      '</div>',
                  '</div>',
                '</a>',
            '</div>'
          );
          $('#anuncios').append(card);
        }
      }
      if(filename == 'vehiculos_v.php')
      {
        $('#anuncios').empty();
        for(i = 0; i<anuncios.length; i++)
        {
          var card = '';
          card = card.concat(
            '<div class="col s12 m12 l4">',
                '<a href="vehiculos_detalle_v.php?id='+anuncios[i].PK_id_vehiculo+'">',
                    '<div class="card hoverable">',
                        '<div class="card-image waves-effect waves-block waves-light">',
                          '<img class="activator" src="../web/img/vehiculos/'+anuncios[i].nombre_imagen+'">',
                        '</div>',
                        '<div class="purple darken-3">',
                            '<a style="color:white; height:80px;" href="vehiculos_detalle_v.php?id='+anuncios[i].PK_id_vehiculo+'">',
                                '<div class="col s7" id="previnfo_vehi">',
                                    '<div class="row" style="padding:0; margin:0;  font-size:1em">'+anuncios[i].modelos_vehiculo+'</div>',
                                    '<div class="row" style="padding:0; margin:0; font-size:0.8em">'+anuncios[i].marca_vehiculo+'-'+anuncios[i].anio+'</div>',
                                '</div>',
                                '<div class="">',
                                    '<div class="row" style="text-align:center; font-size:1.2em; padding-top:12px;">$ '+anuncios[i].valor+'</div>',
                                '</div>',
                            '</a>',
                        '</div>',
                    '</div>',
                '</a>',
            '</div>'
          );
          $('#anuncios').append(card);
        }
      }
      if(filename == 'propiedades_v.php' || filename == 'propiedades_alqui.php')
      {
        $('#anuncios').empty();
        for(i = 0; i<anuncios.length; i++)
        {
          var card = '';
          card = card.concat(
            '<div class="col s12 m12 l4">',
              '<a href="pagina.php?id='+anuncios[i].PK_id_propiedad+'">',
                  '<div class="card hoverable">',
                      '<div class="card-image waves-effect waves-block waves-light">',
                      '<img class="activator" src="../web/img/propiedades/'+anuncios[i].nombre_imagen_prop+'"> ',
                      '</div>',
                    
                      '<div class="purple darken-3 lop">',
                          '<a style="color:white; height:80px;" href="pagina.php?id='+anuncios[i].PK_id_propiedad+'">',
                              '<div class="col s7" id="previnfo_vehi">',
                                  '<div class="row" style="padding:0; margin:0;  font-size:1em">CA-201811_0002</div>',
                                  '<div class="row" id="name_dir_style" style="padding:0; margin:0; font-size:0.8em">Colonia '+anuncios[i].colonia+'</div>',
                              '</div>',
                              '<div class="">',
                                  '<div class="row" style="text-align:center; font-size:1.2em; padding-top:12px;">$ '+anuncios[i].valor+'</div>',
                              '</div>',
                          '</a>',
                      '</div>',
                      '<div class="block_proper">',
                          '<div class=" icon_prop"><img class="proper_ico" src="../web/img/ico/garage.png"><span class="proper_ico_txt">'+anuncios[i].cochera+'</span></div>',
                          '<div class="icon_prop"><img class="proper_ico" src="../web/img/ico/banera.png"><span class="proper_ico_txt">'+anuncios[i].baños+'</span></div>',
                          '<div class="icon_prop"><img class="proper_ico" src="../web/img/ico/bed.png"><span class="proper_ico_txt">'+anuncios[i].habitaciones+'</span></div>',
                      '</div> ',
                  '</div>',
                '</a>',
            '</div>'
          );
          $('#anuncios').append(card);
        }
      }
    }
  });
}

function CargarAnuncios()
{
  if(cantidad == '')
  {
    cantidad = 3;
  }
  else
  {
    cantidad = $('#cantidad').val();
  }
  /********************************************************************************************************************************************************
  ***********************************************PARA DIRECTORIO********************************************************************************************
  *********************************************************************************************************************************************************/
  if(filename == 'productos.php')
  {
    id = decodeURI(getUrlVars()['id']);
    url = '../app/controllers/public/producto/productos_controller.php?id='+id+'';
    getDatos();
    if(anuncios != '')
    {
      Paginacion(anuncios, cantidad);
    }
    else
    {
      AlertaSweet(2, 'No se encontraron anuncios en esta seccion');
    }
  }

  /********************************************************************************************************************************************************
  ***********************************************PARA VEHICULOS********************************************************************************************
  *********************************************************************************************************************************************************/
  if(filename == 'vehiculos_v.php')
  {
    url = '../app/controllers/public/vehiculos/index_controller.php';
    getDatos();
    if(anuncios != '')
    {
      Paginacion(anuncios, cantidad);
    }
    else
    {
      AlertaSweet(2, 'No se encontraron anuncios en esta seccion');
    }
  }

  /********************************************************************************************************************************************************
  ***********************************************PARA PROPIEDADES********************************************************************************************
  *********************************************************************************************************************************************************/
  if(filename == 'propiedades_v.php' || filename == 'propiedades_alqui.php')
  {
    if(filename == 'propiedades_v.php')
    {
      seccion = 1;
    }
    if(filename == 'propiedades_alqui.php')
    {
      seccion = 2;
    }
    url = '../app/controllers/public/propiedades/index_controller.php'
    getDatos();
    if(anuncios != '')
    {
      Paginacion(anuncios, cantidad);
    }
    else
    {
      AlertaSweet(2, 'No se encontraron anuncios en esta seccion');
    }
  }
}



function getDatos()
{
  if(ordenar != '')
  {
    datos = {ordenar:ordenar,
      seccion:seccion};
  }
  else
  {
    datos = {seccion:seccion}; 
  }
  $.ajax({
    async: false,
    type: 'POST',
    url: url,
    data: datos,
    dataType: 'json',
    success: function(datos)
    {
      anuncios = datos;
    }
  });
}

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
//Aqui termina el ajax


function opentipscot(){
  
$("#panel_cotis").css({"top":"0px"});
$("#panel_cotis").css({"opacity":"1"});
}
function closetipscot(){
    $("#panel_cotis").css({"top":"-100vh"});
    $("#panel_cotis").css({"opacity":"0"});
  
  }

  function verificar_telefono_o_pc(){
    
    
    var isMobile = {
      mobilecheck : function() {
      return (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino|android|ipad|playbook|silk/i.test(navigator.userAgent||navigator.vendor||window.opera)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test((navigator.userAgent||navigator.vendor||window.opera).substr(0,4)))
      }
      }
      
      
    
      if(isMobile.mobilecheck() == true){
        $("#colco").css({"margin-top":"120px"});
      }
      else{
      
        $("#wha_btn_s").css({"display":"none"});
        $("#wha_vehiprop_btn").css({"display":"none"});
        $("#tel_btn").css({"display":"none"});
        
        $("#colco").css({"margin-top":"48px"});
        
        
      }
    }
    function showhide_advance_filter(){
      if($("#btn_advance").text() == 'Avanzado'){
        $("#btn_advance").text('Basico');
        $("#advanced_div").css({"max-height":"600px", "border":" 1px solid #5B2C60"});
      }
      else{
        $("#btn_advance").text('Avanzado');
        $("#advanced_div").css({"max-height":"0px", "border":" 1px solid #FFFFFF"});
      }
      
    }
    