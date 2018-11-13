<?php
require_once('../../models/database.class.php');
require_once('../../helpers/validator.class.php');
//MODELOS A UTILIZAR
require_once('../../models/solicitudes_procesadas.class.php');
require_once('../../models/empleados.class.php');
require_once('../../models/solicitudes.class.php');
require_once('../../models/solicitudes_atencion_cliente.class.php');
require_once('../../models/cliente_prospectos.class.php');

date_default_timezone_set('America/El_Salvador');
$dias_semana = ['domingo', 'lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado'];
$dia = date('N');
//echo $dias_semana[$dia];

$solicitud_procesada = new Solicitudes_procesadas;
$empleado = new Empleados;
$solicitud = new Solicitudes;
$solicitud_atencion_cliente = new Solicitudes_atencion_cliente;
$cliente_prospecto = new Cliente_Prospecto;


$empleados = $empleado->getEmpleadosVentas();
$clientes_prospectos = $cliente_prospecto->getClientesProspectos();//Obtiene los clientes ó prospectos que aun no se han asignado a un empleado para generar el cuadro comparativo de los seguros

$id_empleado = '';
$contador_empleado = count($empleados);
$contador_cliente_prospecto = count($clientes_prospectos);
$contador = 0;
if($contador_empleado < $contador_cliente_prospecto)//Si las cotizaciones 
{
    echo 'los empleados son menos que las soli';
}
else
{
    echo 'los empleados son mas que las soli';
}
for($j = 0; $j<count($clientes_prospectos); $j++)
{

}
for($i = 0; $i<count($empleados); $i++)
{
    $id_empleado = $empleados[$i][0];//Obtenemos el id del empleado
    $solicitud_procesada->setIdEmpleado($id_empleado);
    $solicitudes_dia_empleado = $solicitud_procesada->getDiasxEmpleado($dias_semana[$dia]);//En esta funcion ejecutada obtiene las cantidades de las solicitudes que puede procesar por dia, si el empleado no eligio procesar solicitudes en el dia el valor obtenido será null
    if($solicitudes_dia_empleado != null)//Si hay empleado tiene disponibilidad aun para asignarle solicitudes
    {
        $contador = $contador + 1;//Contador de solicitudes que han sido asignadas a un empleado
        echo $contador;
        $cant_pred = $solicitudes_dia_empleado[$dias_semana[$dia]];//Obtiene la cantidad de solicitudes predeterminadas(Cantidad cuando se registro) 
        $cant_dia = $solicitudes_dia_empleado['cant_'.$dias_semana[$dia]];//Obtiene la cantidad de solicitud repartida en el dia
        if($cant_pred > $cant_dia)
        {
            
        }
    }
    

    
    /*print($solicitudes_dia_empleado[$dias_semana[$dia]]);
    print($solicitudes_dia_empleado['cant_'.$dias_semana[$dia]]);*/

}
?>