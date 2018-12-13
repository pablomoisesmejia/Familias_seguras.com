$(document).ready(function(){

    var fecha = '';
    var hora = '';
    var nombres = '';
    var correo = '';
    var lugar_reunion = '';
    var asunto = '';

    getUrlVars();
    var categoria = 0;
    var id = 0;
    categoria = decodeURI(getUrlVars()['cat']);
    id = decodeURI(getUrlVars()['id']);


    setTimeout(function(){ $('#fecha-label').addClass('active'); }, 1);//Para activar el label de los input

    //para el reloj
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
    
    //Para cargar las citas del usuario
    var citas = '';
    getCitas();
    function getCitas()
    {
        $.ajax({
            type: 'POST',
            url: '../app/controllers/public/agregados/get_cita_controller.php',
            data: {categoria:categoria,
                id:id},
            dataType: 'json',
            success: function(eventos)
            {
                if(eventos)
                {
                    citas = eventos
                    CargarCalendario();
                }
                else
                {
                    CargarCalendario();
                }
            }
        });
    }
    

    //funcion para inicializar el calendario 
    function CargarCalendario()
    {
        $('#calendario').fullCalendar({
            header:{
                left:'prev,today,next',
                center:'title',
                right:'month,basicWeek,basicDay'
            },
            dayClick:function(date,jsEvent,view){
                console.log(date.format());
                fecha = $('#fecha').val(date.format());
                if(fecha != '')
                {
                    $('#modalCitas').modal().modal('open');
                }
                else
                {
                    AlertaSweet(3, 'Ocurrio un problema para programar la cita, contacte al administrador');
                }
            },
    
            //Cargar datos de la base de datos hacia el calendario 
            events:citas,
        });
    }
    

    $('#agregar').click(function(){
        emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;//validar correo
        fecha = $('#fecha').val();
        hora = $('#hora').val();
        nombres = $('#nombres').val();
        correo = $('#correo').val();
        lugar_reunion = $('#lugar_reunion').val();
        asunto = $('#asunto').val();

        if(fecha != '')
        {
            if(hora != '')
            {
                if(nombres != '')
                {
                    if(correo != '')
                    {
                        if(emailRegex.test(correo))
                        {
                            if(lugar_reunion != '')
                            {
                                if(asunto != '')
                                {
                                    createCita();
                                }
                                else
                                {
                                    AlertaSweet(3, 'Ingrese el asusnto de la cita');
                                }
                            }
                            else
                            {
                                AlertaSweet(3, 'Ingrese un lugar de reunión');
                            }
                        }
                        else
                        {
                            AlertaSweet(3, 'Ingrese un correo electrónico valido (Juan123@gmail.com)');
                        }
                    }
                    else
                    {
                        AlertaSweet(3, 'Ingrese su correo electrónico');
                    }
                }
                else
                {
                    AlertaSweet(3, 'Ingrese su nombre completo');
                }
            }
            else
            {
                AlertaSweet(3, 'Seleccione la hora de la cita');
            }
        }
        else
        {
            AlertaSweet(3, 'Seleccione una fecha en el calendario');
            $('#modalCitas').modal('close');
        }
    });

    //Funcion para obtener las variables del url
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
    

    //Funcion para crear la cita
    function createCita()
    {
        $.ajax({
            type: 'POST',
            url: '../app/controllers/public/agregados/create_cita_controller.php',
            data: {
                fecha:fecha,
                hora:hora,
                nombres:nombres,
                correo:correo,
                lugar_reunion:lugar_reunion,
                asunto:asunto,
                categoria:categoria,
                id:id},
            dataType: 'json',
            success: function(cita)
            {
                if(cita == 1)
                {
                    $('#modalCitas').modal('close');
                    LimpiarInputs();
                    getCitas();
                }
                else
                {
                    AlertaSweet(3, 'Ocurrio un error al programar la cita');
                }
            }
        });
    }

    //Funcion para limpiar los inputs
    function LimpiarInputs()
    {
        $('#fecha').val('');
        $('#hora').val('');
        $('#nombres').val('');
        $('#correo').val('');
        $('#lugar_reunion').val('');
        $('#asunto').val('');
    }
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