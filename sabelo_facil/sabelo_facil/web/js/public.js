$(document).ready(function(){
    $('.carousel').carousel();
    $('.carousel.carousel-slider').carousel({
        duration: 200,
        fullWidth: true,
        indicators:true,
      });
    $('.dropdown-trigger').dropdown();
    $('.button-collapse').sideNav();
    $('.slider').slider(
        {
            indicators: false,
            interval:2000,
            
        }
    );
    $('.parallax').parallax();
    $('.modal').modal();
    $('.materialboxed').materialbox();
    $('.tooltipped').tooltip({delay: 50, position: 'bottom'});
    $('select').material_select();
    $('ul.tabs').tabs();
    $('.datepicker').pickadate({
        monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mier', 'Jue', 'Vir', 'Sab'],
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 20, // Creates a dropdown of 15 years to control year,
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