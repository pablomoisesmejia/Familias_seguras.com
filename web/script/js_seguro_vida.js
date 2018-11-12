var fecha_nacimiento = "";
var fumador = "";
var suma_asegurada = "";
var cesion_bancaria = "";

var tipo_seguro = 2;

function Paso1()
{  
    //Declaracion de variables
    fecha_nacimiento = $('#fecha_naci_vida').val();
    fumador = $('#fumador').val();
    suma_asegurada = $('#suma_segv').val();
    cesion_bancaria = $('#cesion_bancaria').val();

    if(fecha_nacimiento != '')
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

/*---------------------------------------------------------------------------------------------
  -----------------------FUNCION PARA INSERTAR EN LA TABLA COTIZACIONES_VIDA-----------------
  -------------------------------------------------------------------------------------------*/
  function createCotizacion()
  {
    $.ajax({
        type: 'POST',
        url: '../../app/controllers/public/index/create_seguro_vida.php',
        data:{
            fumador:fumador,
            suma_asegurada:suma_asegurada,
            cesion_bancaria:cesion_bancaria,
            id_cliente_prospecto:id_cliente_prospecto
        },
        dataType: 'json',
        success: function()
        {

        }
    });
  }