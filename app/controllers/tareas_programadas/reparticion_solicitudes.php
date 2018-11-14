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
//echo $dias_semana[$dia]; UPDATE `clientes_prospectos` SET `asignacion`= 0

$solicitud_procesada = new Solicitudes_procesadas;
$empleado = new Empleados;
$solicitud = new Solicitudes;
$solicitud_atencion_cliente = new Solicitudes_atencion_cliente;
$cliente_prospecto = new Cliente_Prospecto;
$tipo_seguro = new Tipos_seguro;


$tipos_seguros = $tipo_seguro->getTiposSeguros();
for($k = 0; $k<count($tipos_seguros); $k++)
{
   // echo $k.' tipo seguro';
    echo '<br>';
    $solicitud_procesada->setIdTipoSeguro($tipos_seguros[$k]['PK_id_tipo_seguro']);
    $empleados = $solicitud_procesada->getEmpleadosVentas($dias_semana[$dia]);//Obtiene los empleados

    $cliente_prospecto->setIdTipoSeguro($tipos_seguros[$k]['PK_id_tipo_seguro']);
    $clientes_prospectos = $cliente_prospecto->getClientesProspectos();//Obtiene los clientes ó prospectos que aun no se han asignado a un empleado para generar el cuadro comparativo de los seguros
    

    $id_empleado = '';
    $contador_empleados = count($empleados);
    $contador_cliente_prospecto = count($clientes_prospectos);
    $contador = 0;

    if($contador_cliente_prospecto > 0)
    {
        if($contador_empleados > 0)
        {
            for($i = 0; $i<count($empleados); $i++)
            {
                echo '<br>';
                echo $i.'--empleado';
                echo '<br>';
                $empleados_disponibles = $solicitud_procesada->getEmpleadosDisponibles($dias_semana[$dia]);
                echo count($empleados_disponibles);

                $cliente_prospecto->setIdTipoSeguro($tipos_seguros[$k]['PK_id_tipo_seguro']);
                $clientes_prospectos = $cliente_prospecto->getClientesProspectos();//Obtiene los clientes ó prospectos que aun no se han asignado a un empleado para generar el cuadro comparativo de los seguros
                $contador_cliente_prospecto = count($clientes_prospectos);

                if($empleados_disponibles > 0)
                {
                    for($n = 0; $n < count($empleados_disponibles); $n++)
                    {
                        echo $n.'---empleado disponible';
                        echo '<br>';
                        
                        $cliente_prospecto->setIdTipoSeguro($tipos_seguros[$k]['PK_id_tipo_seguro']);
                        $clientes_prospectos = $cliente_prospecto->getClientesProspectos();//Obtiene los clientes ó prospectos que aun no se han asignado a un empleado para generar el cuadro comparativo de los seguros
                        $contador_cliente_prospecto = count($clientes_prospectos);

                                      
                        if($contador_cliente_prospecto > 0)
                        {
                            if(count($empleados_disponibles) != 0)
                            {
                                $id_cantidad_dia = $empleados_disponibles[$n]['PK_id_cantidad_solicitud_dias'];
                                if($empleados_disponibles[$n]['estado'] === 'Activo')//Se comprueba el estado del empleado
                                {
                                    $cant_pred = $empleados_disponibles[$n][$dias_semana[$dia]];//Obtiene la cantidad de solicitudes predeterminadas(Cantidad cuando se registro) 
                                    $cant_dia = $empleados_disponibles[$n]['cant_'.$dias_semana[$dia]];//Obtiene la cantidad de solicitud repartida en el dia

                                    if($cant_pred > $cant_dia)//Comprobar si tiene disponibilidad para solicitudes                          
                                    {
                                        //echo 'tiene disponible';
                                        $fecha = date('Y-m-d');
                                        $hora = date('H:i:s');

                                        $solicitud->setIdClienteProspecto($clientes_prospectos[0]['PK_id_cliente_prospecto']);
                                        $solicitud->setIdEmpleado($empleados_disponibles[$n]['PK_id_empleado']);
                                        $solicitud->setFechaReparticion($fecha);
                                        $solicitud->setHoraReparticion($hora);
                                        $solicitud->setIdEstadoSolicitud(1);
                                        $solicitud->setIdEstadoCorreo(1);
                                        if($solicitud->createSolicitud())
                                        {
                                            $cliente_prospecto->setAsignacion(1);
                                            $cliente_prospecto->setIdClienteProspecto($clientes_prospectos[0]['PK_id_cliente_prospecto']);
                                            if($cliente_prospecto->updateAsignacion())
                                            {
                                                $cant_dia = $cant_dia + 1;
                                                $solicitud_procesada->setIdCantidad($id_cantidad_dia);
                                                if($solicitud_procesada->updateCantidadEstadoA($dias_semana[$dia], $cant_dia))
                                                {
                                                    $empleados_dispo = $solicitud_procesada->getEmpleadosDisponibles($dias_semana[$dia]);

                                                    $cliente_prospecto->setIdTipoSeguro($tipos_seguros[$k]['PK_id_tipo_seguro']);
                                                    $clientes_prospectos = $cliente_prospecto->getClientesProspectos();//Obtiene los clientes ó prospectos que aun no se han asignado a un empleado para generar el cuadro comparativo de los seguros
                                                    $contador_cliente_prospecto = count($clientes_prospectos);
                                                    if($contador_cliente_prospecto > 0 && count($empleados_dispo) == 0)
                                                    {
                                                        
                                                        for($j = 0; $j<count($clientes_prospectos); $j++)
                                                        {
                                                            $fecha = date('Y-m-d');
                                                            $hora = date('H:i:s');
                                                            $solicitud_atencion_cliente->setIdClienteProspecto($clientes_prospectos[$j]['PK_id_cliente_prospecto']);
                                                            $solicitud_atencion_cliente->setFechaReparticion($fecha);
                                                            $solicitud_atencion_cliente->setHoraReparticion($hora);
                                                            $solicitud_atencion_cliente->setIdEstadoCorreo(1);
                                                            $solicitud_atencion_cliente->setIdEstadoSolicitud(1);
                                                            if($solicitud_atencion_cliente->createSolicitudAtencionCliente())
                                                            {
                                                                $cliente_prospecto->setAsignacion(1);
                                                                $cliente_prospecto->setIdClienteProspecto($clientes_prospectos[$j]['PK_id_cliente_prospecto']);
                                                                if($cliente_prospecto->updateAsignacion())
                                                                {

                                                                }
                                                                else
                                                                {
                                                                    print('atencion al cliente cliente_prospecto '.Database::getException());
                                                                }
                                                            }
                                                            else
                                                            {
                                                                print('solicitud_atencion_cliente '.Database::getException());
                                                            }
                                                        }
                                                    }
                                                }
                                                else
                                                {
                                                    print('solicitud_procesada '.Database::getException());
                                                }
                                            }
                                            else
                                            {
                                                print('cliente_prospecto '.Database::getException());
                                            }
                                        }
                                        else
                                        {
                                            print('solicitud '.Database::getException());
                                        }
                                    }
                                    else
                                    {
                                        $contador = $contador + 1;//Cada vez que el empleado no tenga disponibilidad para solicitud se sumara 1
                                        echo 'no tiene disponible';
                                    }
                                }
                                else if($empleados_disponibles[$n]['estado'] === 'Suspendido')//Se comprueba el estado del empleado
                                {
                                    if($empleados_disponibles[$n]['cant_castigo_'.$dias_semana[$dia]] > $empleados_disponibles[$n]['cant_'.$dias_semana[$dia]])//Comprobar si tiene disponibilidad para solicitudes                         
                                    {
                                        
                                    }
                                }
                            }
                            else
                            {
                                for($j = 0; $j<count($clientes_prospectos); $j++)
                                {
                                    $fecha = date('Y-m-d');
                                    $hora = date('H:i:s');
                                    $solicitud_atencion_cliente->setIdClienteProspecto($clientes_prospectos[$j]['PK_id_cliente_prospecto']);
                                    $solicitud_atencion_cliente->setFechaReparticion($fecha);
                                    $solicitud_atencion_cliente->setHoraReparticion($hora);
                                    $solicitud_atencion_cliente->setIdEstadoCorreo(1);
                                    $solicitud_atencion_cliente->setIdEstadoSolicitud(1);
                                    if($solicitud_atencion_cliente->createSolicitudAtencionCliente())
                                    {
                                        $cliente_prospecto->setAsignacion(1);
                                        $cliente_prospecto->setIdClienteProspecto($clientes_prospectos[$j]['PK_id_cliente_prospecto']);
                                        if($cliente_prospecto->updateAsignacion())
                                        {

                                        }
                                        else
                                        {
                                            print('atencion al cliente cliente_prospecto '.Database::getException());
                                        }
                                    }
                                    else
                                    {
                                        print('solicitud_atencion_cliente '.Database::getException());
                                    }
                                }
                            }
                        }
                    }
                }
                else
                {
                    for($j = 0; $j<count($clientes_prospectos); $j++)
                    {
                        $fecha = date('Y-m-d');
                        $hora = date('H:i:s');
                        $solicitud_atencion_cliente->setIdClienteProspecto($clientes_prospectos[$j]['PK_id_cliente_prospecto']);
                        $solicitud_atencion_cliente->setFechaReparticion($fecha);
                        $solicitud_atencion_cliente->setHoraReparticion($hora);
                        $solicitud_atencion_cliente->setIdEstadoCorreo(1);
                        $solicitud_atencion_cliente->setIdEstadoSolicitud(1);
                        if($solicitud_atencion_cliente->createSolicitudAtencionCliente())
                        {
                            $cliente_prospecto->setAsignacion(1);
                            $cliente_prospecto->setIdClienteProspecto($clientes_prospectos[$j]['PK_id_cliente_prospecto']);
                            if($cliente_prospecto->updateAsignacion())
                            {

                            }
                            else
                            {
                                print('atencion al cliente cliente_prospecto '.Database::getException());
                            }
                        }
                        else
                        {
                            print('solicitud_atencion_cliente '.Database::getException());
                        }
                    }
                }
            }
        }
        else
        {
            for($j = 0; $j<count($clientes_prospectos); $j++)
            {
                $fecha = date('Y-m-d');
                $hora = date('H:i:s');
                $solicitud_atencion_cliente->setIdClienteProspecto($clientes_prospectos[$j]['PK_id_cliente_prospecto']);
                $solicitud_atencion_cliente->setFechaReparticion($fecha);
                $solicitud_atencion_cliente->setHoraReparticion($hora);
                $solicitud_atencion_cliente->setIdEstadoCorreo(1);
                $solicitud_atencion_cliente->setIdEstadoSolicitud(1);
                if($solicitud_atencion_cliente->createSolicitudAtencionCliente())
                {
                    $cliente_prospecto->setAsignacion(1);
                    $cliente_prospecto->setIdClienteProspecto($clientes_prospectos[$j]['PK_id_cliente_prospecto']);
                    if($cliente_prospecto->updateAsignacion())
                    {

                    }
                    else
                    {
                        print('atencion al cliente cliente_prospecto '.Database::getException());
                    }
                }
                else
                {
                    print('solicitud_atencion_cliente '.Database::getException());
                }
            }
        }
    }   
}
/*
if($contador >= count($empleados))//Si el contador es mayor o igual a la cantidad de empleados que inserta los clientes_prospectos a la tabla de solicitud atencion al cliente
{
    //codigo para inserta en la tabla solicitudes atencion al cliente
    echo 'insertar en atencion al cliente';
    for($j = 0; $j<count($clientes_prospectos); $j++)
    {
        $fecha = date('Y-m-d');
        $hora = date('H:i:s');
        $solicitud_atencion_cliente->setIdClienteProspecto($clientes_prospectos[$j]['PK_id_cliente_prospecto']);
        $solicitud_atencion_cliente->setFechaReparticion($fecha);
        $solicitud_atencion_cliente->setHoraReparticion($hora);
        $solicitud_atencion_cliente->setIdEstadoCorreo(1);
        $solicitud_atencion_cliente->setIdEstadoSolicitud(1);
        if($solicitud_atencion_cliente->createSolicitudAtencionCliente())
        {
            $cliente_prospecto->setAsignacion(1);
            $cliente_prospecto->setIdClienteProspecto($clientes_prospectos[$j]['PK_id_cliente_prospecto']);
            if($cliente_prospecto->updateAsignacion())
            {

            }
            else
            {
                print('atencion al cliente cliente_prospecto '.Database::getException());
            }
        }
        else
        {
            print('solicitud_atencion_cliente '.Database::getException());
        }
    }
    
}

/* if($contador_cliente_prospecto != 0)
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
                    
                }
            }
        }
    }
    
}*/
                
?>