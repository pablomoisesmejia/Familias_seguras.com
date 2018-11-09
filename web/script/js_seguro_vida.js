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

function paso2()
{
    
}