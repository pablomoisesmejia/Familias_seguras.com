var date = new Date();
var min = date.getFullYear()+','+(date.getMonth()+1)+','+(date.getDate());//Validacion de fecha minima del datepicker

$(document).ready(function(){
    $('.button-collapse').sideNav();
    $('.dropdown-button').dropdown();
    $('.materialboxed').materialbox();
    $('select').material_select();
    $('.tooltipped').tooltip({delay: 50, position: 'bottom'});

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
});

