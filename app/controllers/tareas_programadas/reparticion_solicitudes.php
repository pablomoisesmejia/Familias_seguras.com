<?php
require_once('../../models/database.class.php');
require_once('../../helpers/validator.class.php');
//MODELOS A UTILIZAR
require_once('../../models/solicitudes_procesadas.class.php');
require_once('../../models/empleados.class.php');
require_once('../../models/solicitudes.class.php');
require_once('../../models/solicitudes_atencion_cliente.class.php');
require_once('../../models/cliente_prospectos.class.php');
require_once('../../models/tipos_seguro.class.php');

date_default_timezone_set('America/El_Salvador');
$dias_semana = ['domingo', 'lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado'];
$dia = date('N');
//echo $dias_semana[$dia];

$solicitud_procesada = new Solicitudes_procesadas;
$empleado = new Empleados;
$solicitud = new Solicitudes;
$solicitud_atencion_cliente = new Solicitudes_atencion_cliente;
$cliente_prospecto = new Cliente_Prospecto;
$tipo_seguro = new Tipos_seguro;


$tipos_seguros = $tipo_seguro->getTiposSeguros();
//for($k = 0; $k<count($tipos_seguros); $k++)
//{
    $solicitud_procesada->setIdTipoSeguro($tipos_seguros[1]['PK_id_tipo_seguro']);
    $empleados = $solicitud_procesada->getEmpleadosVentas();//Obtiene los empleados
    if($empleados != null)
    {
        $cliente_prospecto->setIdTipoSeguro($tipos_seguros[1]['PK_id_tipo_seguro']);
        $clientes_prospectos = $cliente_prospecto->getClientesProspectos();//Obtiene los clientes ó prospectos que aun no se han asignado a un empleado para generar el cuadro comparativo de los seguros
        

        $id_empleado = '';
        $contador_empleados = count($empleados);
        $contador_cliente_prospecto = count($clientes_prospectos);
        $contador = 0;

        if($contador_cliente_prospecto > 0)
        {
            for($i = 0; $i<=count($empleados); $i++)
            {
                echo '<br>';
                echo $i.'--empleado';
                echo '<br>';

                $cliente_prospecto->setIdTipoSeguro($tipos_seguros[1]['PK_id_tipo_seguro']);
                $clientes_prospectos = $cliente_prospecto->getClientesProspectos();//Obtiene los clientes ó prospectos que aun no se han asignado a un empleado para generar el cuadro comparativo de los seguros
                $contador_cliente_prospecto = count($clientes_prospectos);

                if($contador_cliente_prospecto != 0)
                {
                    if($i>=count($empleados))
                    {
                        $i = 0;
                    }
                    else
                    {
                        $id_empleado = $empleados[$i]['PK_id_empleado'];//Obtenemos el id del empleado
                        $id_tipo_seguro = $tipos_seguros[1]['PK_id_tipo_seguro'];//Obtiene el id del tipo de seguro
                        $solicitud_procesada->setIdEmpleado($id_empleado);
                        $solicitud_procesada->setIdTipoSeguro($id_tipo_seguro);
                        $solicitudes_dia_empleado = $solicitud_procesada->getDiasxEmpleado($dias_semana[$dia]);//En esta funcion ejecutada obtiene las cantidades de las solicitudes que puede procesar por dia, si el empleado no eligio procesar solicitudes en el dia el valor obtenido será null
                        
                        if($solicitudes_dia_empleado != null)//Si hay empleado tiene disponibilidad aun para asignarle solicitudes
                        {
                            if($empleados[$i]['estado'] === 'Activo')
                            {
                                $cant_pred = $solicitudes_dia_empleado[0][$dias_semana[$dia]];//Obtiene la cantidad de solicitudes predeterminadas(Cantidad cuando se registro) 
                                $cant_dia = $solicitudes_dia_empleado[0]['cant_'.$dias_semana[$dia]];//Obtiene la cantidad de solicitud repartida en el dia
                                if($cant_pred > $cant_dia)
                                {
                                    echo 'Si se puede';
                                    $fecha = date('Y-m-d');
                                    $hora = date('H:i:s');

                                    $solicitud->setIdClienteProspecto($clientes_prospectos[0]['PK_id_cliente_prospecto']);
                                    $solicitud->setIdEmpleado($empleados[$i]['PK_id_empleado']);
                                    $solicitud->setFechaReparticion($fecha);
                                    $solicitud->setHoraReparticion($hora);
                                    $solicitud->setIdEstadoSolicitud(1);
                                    $solicitud->setIdEstadoCorreo(1);
                                    //insert
                                /* for($j = 0; $j<count($clientes_prospectos); $j++)
                                    {
                                        
                                    }*/
                                }
                            }
                        }
                    }
                    
                }
                
            }
        }
    }
    /*else //Con este else se usara para insertar en la tabla de solicitudes para atencion al cliente
    {

    }*/
    
//}

/*if($contador_cliente_prospecto > 0)//
{
    for($i = 0; $i<count($empleados); $i++)
    {
        echo $i.'--empleado';
        echo '<br>';
        $clientes_prospectos = $cliente_prospecto->getClientesProspectos();//Obtiene los clientes ó prospectos que aun no se han asignado a un empleado para generar el cuadro comparativo de los seguros
        $contador_cliente_prospecto = count($clientes_prospectos);
        if($contador_cliente_prospecto == 0)
        {
            for($j = 0; $j<count($clientes_prospectos); $j++)
            {
                echo $j.'soli';
                echo '<br>';
            
                if($clientes_prospectos[$j]['FK_id_tipo_seguro'] == $empleados[$i]['PK_id_tipo_seguro'])
                {
                    break;
                    $id_empleado = $empleados[$i][0];//Obtenemos el id del empleado
                    $id_tipo_seguro = $empleado[$i]['FK_id_tipo_seguro'];
                    $solicitud_procesada->setIdEmpleado($id_empleado);
                    $solicitud_procesada->setIdTipoSeguro($id_tipo_seguro);
                    $solicitudes_dia_empleado = $solicitud_procesada->getDiasxEmpleado($dias_semana[$dia]);//En esta funcion ejecutada obtiene las cantidades de las solicitudes que puede procesar por dia, si el empleado no eligio procesar solicitudes en el dia el valor obtenido será null
                    /*if($solicitudes_dia_empleado != null)//Si hay empleado tiene disponibilidad aun para asignarle solicitudes
                    {
                        $contador = $contador + 1;//Contador de solicitudes que han sido asignadas a un empleado
                        echo $contador;
                        $cant_pred = $solicitudes_dia_empleado[$dias_semana[$dia]];//Obtiene la cantidad de solicitudes predeterminadas(Cantidad cuando se registro) 
                        $cant_dia = $solicitudes_dia_empleado['cant_'.$dias_semana[$dia]];//Obtiene la cantidad de solicitud repartida en el dia
                        if($cant_pred > $cant_dia)
                        {
                            
                        }
                    }*
                }

                /*print($solicitudes_dia_empleado[$dias_semana[$dia]]);
                print($solicitudes_dia_empleado['cant_'.$dias_semana[$dia]]);*

            }
        }
        else
        {
            $i = count($empleados);
            echo $i;
        }
    }
}*/

/*for($i = 0; $i<count($empleados); $i++)
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
    print($solicitudes_dia_empleado['cant_'.$dias_semana[$dia]]);

}*/
?>