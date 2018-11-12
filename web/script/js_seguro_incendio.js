//DECLARACION DE VARIABLES
var tipo_inmueble = '';
var direccion_inmueble = '';
var asegurado_calidad = '';
var valor_construccion = '';
var valor_contenido = '';
var fecha_nacimiento = '';

var tipo_seguro = 3;

function Paso1()
{
    tipo_inmueble = $('#tipo_inmueble').val();
    direccion_inmueble = $('#direccion_inmueble').val();
    asegurado_calidad = $('#asegurado_calidad').val();
    valor_construccion = $('#valor_construccion').val();
    valor_contenido = $('#valor_contenido').val();

    if(tipo_inmueble != null)
    {
        if(direccion_inmueble != '')
        {
            if(asegurado_calidad != null)
            {
                if(valor_contenido != '')
                {
                    if(valor_construccion != '')
                    {
                        siguiente2();
                    }
                    else
                    {
                        AlertaSweet(3, 'Ingrese el valor de la construcción sin el terreno');
                    }
                }
                else
                {
                    AlertaSweet(3, 'Ingrese el valor de contenido'); 
                }
            }
            else
            {
                AlertaSweet(3, 'Seleccione la calidad del inmueble');
            }
        }
        else
        {
            AlertaSweet(3, 'Ingrese la dirección del inmueble');
        }
    }
    else
    {
        AlertaSweet(3, 'Seleccione el tipo de inmueble');
    }
}

/*---------------------------------------------------------------------------------------------
  -----------------------FUNCION PARA INSERTAR EN LA TABLA COTIZACIONES_INCENDIO-----------------
  -------------------------------------------------------------------------------------------*/
function createCotizacion()
{
    $.ajax({
        type: 'POST',
        url: '../../app/controllers/public/index/create_seguro_incendio.php',
        data:{
            tipo_inmueble:tipo_inmueble,
            direccion_inmueble:direccion_inmueble,
            asegurado_calidad:asegurado_calidad,
            valor_construccion:valor_construccion,
            valor_contenido:valor_contenido,
            id_cliente_prospecto:id_cliente_prospecto
        },
        dataType: 'json',
        success: function()
        {

        }
    });
}