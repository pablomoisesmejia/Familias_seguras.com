$(document).ready(function(){

    setTimeout(function(){ $('#fecha-label').addClass('active'); }, 1);

    $('.timepicker').pickatime({
        default: 'now', // Set default time: 'now', '1:30AM', '16:30'
        fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
        twelvehour: false, // Use AM/PM or 24-hour format
        donetext: 'OK', // text for done-button
        cleartext: 'Limpiar', // text for clear-button
        canceltext: 'Cancelar', // Text for cancel-button,
        container: undefined, // ex. 'body' will append picker to body
        autoclose: false, // automatic close timepicker
        ampmclickable: true, // make AM PM clickable
        aftershow: function(){} //Function for after opening timepicker
    });
    
    $('#calendario').fullCalendar({
        header:{
            left:'prev,today,next',
            center:'title',
            right:'month,basicWeek,basicDay'
        },
        dayClick:function(date,jsEvent,view){
            console.log(date.format());
            $('#fecha').val(date.format());
            $('#agregar').show(0);
            $('#modalCitas').modal().modal('open');
        },

        //Cargar datos de la base de datos hacia el calendario 
        events:'../app/controllers/dashboard/citas/calendario.php',

        /*eventClick: function(calEvent, jsEvent, view){
            LimpiarInputs();
            $('#titulo').html(calEvent.title);
            
            $('#id').val(calEvent.id);
            $('#descripcionEvento').val(calEvent.descripcion);
            $('#tituloEvento').val(calEvent.title);
            FechaHora = calEvent.start._i.split(" ");
            $('#fecha').val(FechaHora[0]);
            $('#hora').val(FechaHora[1]);

            $('#agregar').hide(0);
            $('#modalEventos').modal().modal('open');
        },

        editable: true,
        eventDrop:function(calEvent)
        {
            $('#id').val(calEvent.id);
            $('#descripcionEvento').val(calEvent.descripcion);
            $('#tituloEvento').val(calEvent.title);

            var FechaHora = calEvent.start.format().split("T");
            $('#fecha').val(FechaHora[0]);
            $('#hora').val(FechaHora[1]);

            Recolectardatos();
            EnviardatosModificar(NuevoEvento, true);
        }*/
    });

});

$('#calendario').on('mouseover', 'td .fc-day', function(){
    $(this).css({"background": "rgb(187, 175, 255)"})
});

$('#calendario').on('mouseover', 'td .fc-day-top', function(){
    $(this).parent().parent().parent().parent().parent().children('.fc-bg').children().children().children().children('td:eq('+this.cellIndex+')').css({"background": "rgb(187, 175, 255)"})
});

$('#calendario').on('mouseout', 'td .fc-day', function(){
    $(this).css({"background": "#fff"})
});

$('#calendario').on('mouseout', 'td .fc-day-top', function(){
    $(this).parent().parent().parent().parent().parent().children('.fc-bg').children().children().children().children('td:eq('+this.cellIndex+')').css({"background": "#fff"})
});