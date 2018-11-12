
var fecha_nacimiento = '';
var nombre_conyugue = '';
var fecha_nacimiento_conyugue = '';
var cantidad_hijos = '';

var tipo_seguro = 1;

function Paso1()
{
    fecha_nacimiento = $('#fecha_naci').val();
    nombre_conyugue = $('#nombre_conyugue_medico').val();
    fecha_nacimiento_conyugue = $('#fecha_naci_conyugue').val();
    cantidad_hijos = $('#hijos_cantidad_medico').val();

    if(fecha_nacimiento != '')
    {
    if(nombre_conyugue != '')
    {
        if(fecha_nacimiento_conyugue != '')
        {
            if(cantidad_hijos != '')
            {
            if(cantidad_hijos.indexOf("-") != 0)
            {
                siguiente2();
            }
            else
            {
                AlertaSweet(3, 'La cantidad de hijos no puede ser negativa');
            }
            }
            else
            {
            AlertaSweet(3, 'ingrese la cantidad de hijos');
            }
        }
        else
        {
            AlertaSweet(3, 'Seleccione la fecha de nacimiento del conyugue');
        }
    }
    else
    {
        AlertaSweet(3, 'Escriba el nombre del conyugue');
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
        url: '../../app/controllers/public/index/create_seguro_medico.php',
        data:{
          nombre_conyugue:nombre_conyugue,
          fecha_nacimiento_conyugue:fecha_nacimiento_conyugue,
          cantidad_hijos:cantidad_hijos,
          id_cliente_prospecto:id_cliente_prospecto
        },
        dataType: 'json',
        success: function()
        {

        }
      })
  }