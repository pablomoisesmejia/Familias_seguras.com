$(document).ready(function(){

    var date = new Date();
    var min = date.getFullYear()-100+','+(date.getMonth()+1)+','+(date.getDate());//Validacion de fecha minima del datepicker
    var max = date.getFullYear()-18+','+(date.getMonth()+1)+','+(date.getDate());//Validacion de fecha maxima del datepicker
    $('.datepicker').pickadate({
        selectMonths:true,
        selectYears:100,
        today:'Actual',
        clear:'Limpiar',
        close:'Aceptar',
        formatSubmit: 'yyyy-mm-dd',
        closeOnSelect:false,
        container:undefined,
        min: new Date(min),
        max: new Date(max)
    });


    $('#crear').click(function(){
        create();
    });
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

var id_usuario = '';
var id_empleado = '';
var id_cantidad_soli_dias = '';
//VALIDACIONES 
function create()
{
    nombres = $('#nombre_segv').val();
    apellidos = $('#apellido_segv').val();
    telefono = $('#tel_segv').val();
    correo = $('#email_segv').val();
    fecha_nacimiento = $('#fecha_nacimiento').val();
    usuario = $('#usuario').val();
    clave = $('#clave').val();

    if(nombres != '')
    {
        if(apellidos != '')
        {
            if(fecha_nacimiento != '')
            {
                if(telefono != '')
                {
                    if(correo != '')
                    {
                        createCantidadSoli();               
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
                AlertaSweet(3, 'Seleccione la fecha de nacimiento');
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

var Automotores = [];
var Incendios = [];
var Medico = [];
var Vida = [];

var Cantidad = [];
function createCantidadSoli()
{
    Automotores = [];
    Incendios = [];
    Medico = [];
    Vida = [];
    Cantidad = [];
    lunes_A = $('#lunes_A').val();
    lunes_I = $('#lunes_I').val();
    lunes_M = $('#lunes_M').val();
    lunes_V = $('#lunes_V').val();

    martes_A = $('#martes_A').val();
    martes_I = $('#martes_I').val();
    martes_M = $('#martes_M').val();
    martes_V = $('#martes_V').val();

    miercoles_A = $('#miercoles_A').val();
    miercoles_I = $('#miercoles_I').val();
    miercoles_M = $('#miercoles_M').val();
    miercoles_V = $('#miercoles_V').val();

    jueves_A = $('#jueves_A').val();
    jueves_I = $('#jueves_I').val();
    jueves_M = $('#jueves_M').val();
    jueves_V = $('#jueves_V').val();

    viernes_A = $('#viernes_A').val();
    viernes_I = $('#viernes_I').val();
    viernes_M = $('#viernes_M').val();
    viernes_V = $('#viernes_V').val();

    sabado_A = $('#sabado_A').val();
    sabado_I = $('#sabado_I').val();
    sabado_M = $('#sabado_M').val();
    sabado_V = $('#sabado_V').val();

    domingo_A = $('#domingo_A').val();
    domingo_I = $('#domingo_I').val();
    domingo_M = $('#domingo_M').val();
    domingo_V = $('#domingo_V').val();

    if(lunes_A != '' && lunes_A.indexOf('-') != 0)
    {
        if(lunes_I != '' && lunes_I.indexOf('-') != 0)
        {
            if(lunes_M != '' && lunes_M.indexOf('-') != 0)
            {
                if(lunes_V != '' && lunes_V.indexOf('-') != 0)
                {
                    if(martes_A != '' && martes_A.indexOf('-') != 0)
                    {
                        if(martes_I!= '' && martes_I.indexOf('-') != 0)
                        {
                            if(martes_M != '' && martes_M.indexOf('-') != 0)
                            {
                                if(martes_V != '' && martes_V.indexOf('-') != 0)
                                {
                                    if(miercoles_A != '' && miercoles_A.indexOf('-') != 0)
                                    {
                                        if(miercoles_I != '' && miercoles_I.indexOf('-') != 0)
                                        {
                                            if(miercoles_M != '' && miercoles_M.indexOf('-') != 0)
                                            {
                                                if(miercoles_V != '' && miercoles_V.indexOf('-') != 0)
                                                {
                                                    if(jueves_A != '' && jueves_A.indexOf('-') != 0)
                                                    {
                                                        if(jueves_I != '' && jueves_I.indexOf('-') != 0)
                                                        {
                                                            if(jueves_M != '' && jueves_M.indexOf('-') != 0)
                                                            {
                                                                if(jueves_V != '' && jueves_V.indexOf('-') != 0)
                                                                {
                                                                    if(viernes_A != '' && viernes_A.indexOf('-') != 0)
                                                                    {
                                                                        if(viernes_I != '' && viernes_I.indexOf('-') != 0)
                                                                        {
                                                                            if(viernes_M != '' && viernes_M.indexOf('-') != 0)
                                                                            {
                                                                                if(viernes_V != '' && viernes_V.indexOf('-') != 0)
                                                                                {
                                                                                    if(sabado_A != '' && sabado_A.indexOf('-') != 0)
                                                                                    {
                                                                                        if(sabado_I != '' && sabado_I.indexOf('-') != 0)
                                                                                        {
                                                                                            if(sabado_M != '' && sabado_M.indexOf('-') != 0)
                                                                                            {
                                                                                                if(sabado_V != '' && sabado_V.indexOf('-') != 0)
                                                                                                {
                                                                                                    if(domingo_A != '' && domingo_A.indexOf('-') != 0)
                                                                                                    {
                                                                                                        if(domingo_I != '' && domingo_I.indexOf('-') != 0)
                                                                                                        {
                                                                                                            if(domingo_M != '' && domingo_M.indexOf('-') != 0)
                                                                                                            {
                                                                                                                if(domingo_V != '' && domingo_V.indexOf('-') != 0)
                                                                                                                {
                                                                                                                    Automotores.push(lunes_A, martes_A, miercoles_A, jueves_A, viernes_A, sabado_A, domingo_A);
                                                                                                                    Incendios.push(lunes_I, martes_I, miercoles_I, jueves_I, viernes_I, sabado_I, domingo_I);
                                                                                                                    Medico.push(lunes_M, martes_M, miercoles_M, jueves_M, viernes_M, sabado_M, domingo_M);
                                                                                                                    Vida.push(lunes_V, martes_V, miercoles_V, jueves_V, viernes_V, sabado_V, domingo_V)
                                                                                                                    Cantidad.push(Medico, Vida, Incendios, Automotores);
                                                                                                                    console.log(Cantidad);
                                                                                                                    createUsuario();
                                                                                                                }
                                                                                                                else
                                                                                                                {
                                                                                                                    AlertaSweet(3, 'Ingrese cantidades validas');
                                                                                                                }
                                                                                                            }
                                                                                                            else
                                                                                                            {
                                                                                                                AlertaSweet(3, 'Ingrese cantidades validas');
                                                                                                            }
                                                                                                        }
                                                                                                        else
                                                                                                        {
                                                                                                            AlertaSweet(3, 'Ingrese cantidades validas');
                                                                                                        }
                                                                                                    }
                                                                                                    else
                                                                                                    {
                                                                                                        AlertaSweet(3, 'Ingrese cantidades validas');
                                                                                                    }
                                                                                                }
                                                                                                else
                                                                                                {
                                                                                                    AlertaSweet(3, 'Ingrese cantidades validas');
                                                                                                }
                                                                                            }
                                                                                            else
                                                                                            {
                                                                                                AlertaSweet(3, 'Ingrese cantidades validas');
                                                                                            }
                                                                                        }
                                                                                        else
                                                                                        {
                                                                                            AlertaSweet(3, 'Ingrese cantidades validas');
                                                                                        }
                                                                                    }
                                                                                    else
                                                                                    {
                                                                                        AlertaSweet(3, 'Ingrese cantidades validas');
                                                                                    }
                                                                                }
                                                                                else
                                                                                {
                                                                                    AlertaSweet(3, 'Ingrese cantidades validas');
                                                                                }
                                                                            }
                                                                            else
                                                                            {
                                                                                AlertaSweet(3, 'Ingrese cantidades validas');
                                                                            }
                                                                        }
                                                                        else
                                                                        {
                                                                            AlertaSweet(3, 'Ingrese cantidades validas');
                                                                        }
                                                                    }
                                                                    else
                                                                    {
                                                                        AlertaSweet(3, 'Ingrese cantidades validas');
                                                                    }
                                                                }
                                                                else
                                                                {
                                                                    AlertaSweet(3, 'Ingrese cantidades validas');
                                                                }
                                                            }
                                                            else
                                                            {
                                                                AlertaSweet(3, 'Ingrese cantidades validas');
                                                            }
                                                        }
                                                        else
                                                        {
                                                            AlertaSweet(3, 'Ingrese cantidades validas');
                                                        }
                                                    }
                                                    else
                                                    {
                                                        AlertaSweet(3, 'Ingrese cantidades validas');
                                                    }
                                                }
                                                else
                                                {
                                                    AlertaSweet(3, 'Ingrese cantidades validas');
                                                }
                                            }
                                            else
                                            {
                                                AlertaSweet(3, 'Ingrese cantidades validas');
                                            }
                                        }
                                        else
                                        {
                                            AlertaSweet(3, 'Ingrese cantidades validas');
                                        }
                                    }
                                    else
                                    {
                                        AlertaSweet(3, 'Ingrese cantidades validas');
                                    }
                                }
                                else
                                {
                                    AlertaSweet(3, 'Ingrese cantidades validas');
                                }
                            }
                            else
                            {
                                AlertaSweet(3, 'Ingrese cantidades validas');
                            }
                        }
                        else
                        {
                            AlertaSweet(3, 'Ingrese cantidades validas');
                        }
                    }
                    else
                    {
                        AlertaSweet(3, 'Ingrese cantidades validas');
                    }
                }
                else
                {
                    AlertaSweet(3, 'Ingrese cantidades validas');
                }
            }
            else
            {
                AlertaSweet(3, 'Ingrese cantidades validas');
            }
        }
        else
        {
            AlertaSweet(3, 'Ingrese cantidades validas');
        }
    }
    else
    {
        
    }
}

function createUsuario()
{  
    $.ajax({
        type: 'POST',
        url: '../../app/controllers/public/create_usuario/create_usuario_controller.php',
        data:{
            nombres:nombres,
            apellidos:apellidos,
            telefono:telefono,
            correo:correo,
            fecha_nacimiento:fecha_nacimiento,
            usuario:usuario,
            clave:clave
        },
        dataType: 'json',
        success: function(usuario)
        {
          if(usuario[0][0] == 1)
          {
            id_usuario = usuario[0][1];
            createEmpleado();
          }
        }
    });
}

function createEmpleado()
{
    $.ajax({
        type: 'POST',
        url: '../../app/controllers/public/create_usuario/create_empleado_controller.php',
        data:{
            id_usuario:id_usuario
        },
        dataType: 'json',
        success: function(empleado)
        {
          if(empleado[0][0] == 1)
          {
              id_empleado = empleado[0][1];
              createCantidadSoliDias()
          }
        }
    });
}

function createCantidadSoliDias()
{
    $.ajax({
        type: 'POST',
        url: '../../app/controllers/public/create_usuario/create_cant_soli_dia_controller.php',
        data:{
            Cantidad:Cantidad,
            id_empleado:id_empleado
        },
        dataType: 'json',
        success: function(cantidad)
        {
        }
    });
}