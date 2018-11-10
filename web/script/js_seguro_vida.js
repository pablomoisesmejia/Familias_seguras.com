function Paso1()
{
    //Declaracion de variables
    var fecha_naci_vida = $('#fecha_naci_vida').val();
    var nombre_asegurado_vida = $('#nombre_asegurado_vida').val();
    var fumador = $('#fumador').val();
    var suma_asegurada = $('#suma_segv').val();
    var cesion_bancaria = $('#cesion_bancaria').val();
    
    if(fecha_naci_vida != '')
    {
        if(nombre_asegurado_vida != '')
        {
            if(fumador != null)
            {
                if(suma_asegurada != '')
                {
                    if(cesion_bancaria != null)
                    {
                        siguiente2();
                    }
                    else
                    {
                        AlertaSweet(3, 'Seleccione si el seguro lo necesita para un banco');
                    }
                }
                else
                {
                    AlertaSweet(3, 'Ingrese la suma asegurada');
                }
            }
            else
            {
                AlertaSweet(3, 'Seleccione si se considera fumador');
            }
        }
        else
        {
            AlertaSweet(3, 'Escriba el nombre del asegurado principal');
        }
    }
    else
    {
        AlertaSweet(3, 'Seleccione la fecha de nacimiento');
    }
}

function paso3()
{
    nombres=$('#nombre_segv').val();
    apellidos=$('#apellido_segv').val();
    telefono=$('#tel_segv').val();
    correo=$('#email_segv').val();
    hora_visita=$('#hora').val();
    horario = '';
    if(hora_visita==='manana_1')
    {
      horario = '7:00 - 9:00am';
    }
    if(hora_visita==='manana_2')
    {
      horario = '10:00 - 12:00pm';
    }
    if(hora_visita==='tarde_1')
    {
      horario = '1:00 - 3:00pm'
    }
    if(hora_visita==='tarde_2')
    {
      horario = '4:00 - 7:00pm'
    }

    if(nombres != '')
    {
        if(apellidos != '')
        {
            if(telefono != '')
            {
                if(correo != '')
                {
                    if(hora_visita != '')
                    {
                        
                    }
                    else
                    {
                        AlertaSweet(3, 'Seleccione la hora de visita');
                    }
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
            AlertaSweet(3, 'Escriba sus apellidos completo');
        }
    }
    else
    {
      AlertaSweet(3, 'Escriba su nombre completo');
    }
}