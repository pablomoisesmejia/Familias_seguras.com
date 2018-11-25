$(document).ready(function(){
    $('.button-collapse').sideNav();
    $('.slider').slider();
    $('.parallax').parallax();
    $('.modal').modal();
    $('.materialboxed').materialbox();
    $('.tooltipped').tooltip({delay: 50, position: 'bottom'});
});



function opentipscot(){
  
$("#panel_cotis").css({"top":"0px"});
$("#panel_cotis").css({"opacity":"1"});
}
function closetipscot(){
    $("#panel_cotis").css({"top":"-100vh"});
    $("#panel_cotis").css({"opacity":"0"});
  
  }