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
});

