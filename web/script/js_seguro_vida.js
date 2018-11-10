//Declaracion de variables
var fecha_naci_vida = $('#fecha_naci_vida').val();
var fumador = $('#fumador').val();
var suma_asegurada = $('#suma_segv').val();
var cesion_bancaria = $('#cesion_bancaria').val();

function Paso1()
{  
    if(fecha_naci_vida != '')
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
        AlertaSweet(3, 'Seleccione la fecha de nacimiento');
    }
}

function createUsuario()
{
    console.log(fecha_naci_vida);
    
    $.ajax({
        type: 'POST',
        url: '',
        data:{},
        dataType: 'json',
        success:function()
        {

        }
    });
}