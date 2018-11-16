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

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../helpers/PHPMailer/Exception.php';
require '../../helpers/PHPMailer/PHPMailer.php';
require '../../helpers/PHPMailer/SMTP.php';

date_default_timezone_set('America/El_Salvador');
$dias_semana = ['domingo', 'lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado'];
$dia = date('N');//Se obtiene el dia pero en numero entero (0 es para domingo y 6 es sabado)
//echo $dias_semana[$dia]; UPDATE `clientes_prospectos` SET `asignacion`= 0

$solicitud_procesada = new Solicitudes_procesadas;
$empleado = new Empleados;
$solicitud = new Solicitudes;
$solicitud_atencion_cliente = new Solicitudes_atencion_cliente;
$cliente_prospecto = new Cliente_Prospecto;
$tipo_seguro = new Tipos_seguro;


$tipos_seguros = $tipo_seguro->getTiposSeguros();//Se obtienen todos los tipos de seguro
for($k = 0; $k<count($tipos_seguros); $k++)
{
    echo '<br>';
    echo $k.' tipo seguro';
    echo '<br>';
    $solicitud_procesada->setIdTipoSeguro($tipos_seguros[$k]['PK_id_tipo_seguro']);
    $empleados = $solicitud_procesada->getEmpleadosVentas($dias_semana[$dia]);//Obtiene los empleados

    $cliente_prospecto->setIdTipoSeguro($tipos_seguros[$k]['PK_id_tipo_seguro']);
    $clientes_prospectos = $cliente_prospecto->getClientesProspectos();//Obtiene los clientes ó prospectos que aun no se han asignado a un empleado para generar el cuadro comparativo de los seguros
    
    $contador_empleados = count($empleados);
    $contador_cliente_prospecto = count($clientes_prospectos);
    $contador = 0;

    if($contador_cliente_prospecto > 0)//Se comprueba que aun existan clientes o prospectos sin asignacion
    {
        if($contador_empleados > 0)//Se comprueba que aun existan empleados disponibles con el dia actual
        {
            for($i = 0; $i<count($empleados); $i++)
            {
                $empleados_disponibles = $solicitud_procesada->getEmpleadosDisponibles($dias_semana[$dia]);//Obtiene los empleados con disponiblidad 

                $cliente_prospecto->setIdTipoSeguro($tipos_seguros[$k]['PK_id_tipo_seguro']);
                $clientes_prospectos = $cliente_prospecto->getClientesProspectos();//Obtiene los clientes ó prospectos que aun no se han asignado a un empleado para generar el cuadro comparativo de los seguros
                $contador_cliente_prospecto = count($clientes_prospectos);

                if(count($empleados_disponibles) > 0)//Se comprueba que aun existan empleados disponibles
                {
                    for($n = 0; $n < count($empleados_disponibles); $n++)
                    {                        
                        $cliente_prospecto->setIdTipoSeguro($tipos_seguros[$k]['PK_id_tipo_seguro']);
                        $clientes_prospectos = $cliente_prospecto->getClientesProspectos();//Obtiene los clientes ó prospectos que aun no se han asignado a un empleado para generar el cuadro comparativo de los seguros
                        $contador_cliente_prospecto = count($clientes_prospectos);

                                      
                        if($contador_cliente_prospecto > 0)//Se comprueba que aun existan clientes o prospectos sin asignacion
                        {
                            if(count($empleados_disponibles) != 0)//Se comprueba que aun existan empleados disponibles
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

                                        //Se cargar los metodos SET para hacer el insert a la tabla
                                        $solicitud->setIdClienteProspecto($clientes_prospectos[0]['PK_id_cliente_prospecto']);
                                        $solicitud->setIdEmpleado($empleados_disponibles[$n]['PK_id_empleado']);
                                        $solicitud->setFechaReparticion($fecha);
                                        $solicitud->setHoraReparticion($hora);
                                        $solicitud->setIdEstadoSolicitud(1);
                                        $solicitud->setIdEstadoCorreo(1);
                                        if(!$solicitud->createSolicitud())
                                        {
                                            $email = $empleados_disponibles[$n]['correo'];
                                            echo $email;
                                            $id_solicitud = $solicitud->getIdSolicitud();
                                            echo $id_solicitud;
                                            enviarCorreo($email, $id_solicitud);
                                            //Se cargar los metodos SET para hacer el update a la tabla
                                            $cliente_prospecto->setAsignacion(1);
                                            $cliente_prospecto->setIdClienteProspecto($clientes_prospectos[0]['PK_id_cliente_prospecto']);
                                            if($cliente_prospecto->updateAsignacion())
                                            {
                                                //Se cargar los metodos SET para hacer el update a la tabla
                                                $cant_dia = $cant_dia + 1;
                                                $solicitud_procesada->setIdCantidad($id_cantidad_dia);
                                                if($solicitud_procesada->updateCantidadEstadoA($dias_semana[$dia], $cant_dia))
                                                {
                                                    $empleados_dispo = $solicitud_procesada->getEmpleadosDisponibles($dias_semana[$dia]);//Obtiene los empleados con disponiblidad 

                                                    $cliente_prospecto->setIdTipoSeguro($tipos_seguros[$k]['PK_id_tipo_seguro']);
                                                    $clientes_prospectos = $cliente_prospecto->getClientesProspectos();//Obtiene los clientes ó prospectos que aun no se han asignado a un empleado para generar el cuadro comparativo de los seguros
                                                    $contador_cliente_prospecto = count($clientes_prospectos);
                                                    if($contador_cliente_prospecto > 0 && count($empleados_dispo) == 0)
                                                    {
                                                        //Cuando ya no hay empleados disponibles y aun sobre clientes o prospecto sin asignacion se guardaran en la tabla de solicitudes atencion al cliente
                                                        for($j = 0; $j<count($clientes_prospectos); $j++)
                                                        {
                                                            //Se obtiene la fecha y hora actual
                                                            $fecha = date('Y-m-d');
                                                            $hora = date('H:i:s');
                                                            //Se cargar los metodos SET para hacer el insert a la tabla
                                                            $solicitud_atencion_cliente->setIdClienteProspecto($clientes_prospectos[$j]['PK_id_cliente_prospecto']);
                                                            $solicitud_atencion_cliente->setFechaReparticion($fecha);
                                                            $solicitud_atencion_cliente->setHoraReparticion($hora);
                                                            $solicitud_atencion_cliente->setIdEstadoCorreo(1);
                                                            $solicitud_atencion_cliente->setIdEstadoSolicitud(1);
                                                            if($solicitud_atencion_cliente->createSolicitudAtencionCliente())
                                                            {
                                                                //Se cargar los metodos SET para hacer el update a la tabla
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
                                //Cuando ya no hay empleados disponibles y aun sobre clientes o prospecto sin asignacion se guardaran en la tabla de solicitudes atencion al cliente
                                for($j = 0; $j<count($clientes_prospectos); $j++)
                                {
                                    //Se obtiene la fecha y hora actual
                                    $fecha = date('Y-m-d');
                                    $hora = date('H:i:s');
                                    //Se cargar los metodos SET para hacer el insert a la tabla
                                    $solicitud_atencion_cliente->setIdClienteProspecto($clientes_prospectos[$j]['PK_id_cliente_prospecto']);
                                    $solicitud_atencion_cliente->setFechaReparticion($fecha);
                                    $solicitud_atencion_cliente->setHoraReparticion($hora);
                                    $solicitud_atencion_cliente->setIdEstadoCorreo(1);
                                    $solicitud_atencion_cliente->setIdEstadoSolicitud(1);
                                    if($solicitud_atencion_cliente->createSolicitudAtencionCliente())
                                    {
                                        //Se cargar los metodos SET para hacer el update a la tabla
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
                    //Cuando ya no hay empleados disponibles y aun sobre clientes o prospecto sin asignacion se guardaran en la tabla de solicitudes atencion al cliente
                    for($j = 0; $j<count($clientes_prospectos); $j++)
                    {
                        //Se obtiene la fecha y hora actual
                        $fecha = date('Y-m-d');
                        $hora = date('H:i:s');
                        //Se cargar los metodos SET para hacer el insert a la tabla
                        $solicitud_atencion_cliente->setIdClienteProspecto($clientes_prospectos[$j]['PK_id_cliente_prospecto']);
                        $solicitud_atencion_cliente->setFechaReparticion($fecha);
                        $solicitud_atencion_cliente->setHoraReparticion($hora);
                        $solicitud_atencion_cliente->setIdEstadoCorreo(1);
                        $solicitud_atencion_cliente->setIdEstadoSolicitud(1);
                        if($solicitud_atencion_cliente->createSolicitudAtencionCliente())
                        {
                            //Se cargar los metodos SET para hacer el update a la tabla
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
            //Cuando ya no hay empleados disponibles y aun sobre clientes o prospecto sin asignacion se guardaran en la tabla de solicitudes atencion al cliente
            for($j = 0; $j<count($clientes_prospectos); $j++)
            {
                //Se obtiene la fecha y hora actual
                $fecha = date('Y-m-d');
                $hora = date('H:i:s');
                //Se cargar los metodos SET para hacer el insert a la tabla
                $solicitud_atencion_cliente->setIdClienteProspecto($clientes_prospectos[$j]['PK_id_cliente_prospecto']);
                $solicitud_atencion_cliente->setFechaReparticion($fecha);
                $solicitud_atencion_cliente->setHoraReparticion($hora);
                $solicitud_atencion_cliente->setIdEstadoCorreo(1);
                $solicitud_atencion_cliente->setIdEstadoSolicitud(1);
                if($solicitud_atencion_cliente->createSolicitudAtencionCliente())
                {
                    //Se cargar los metodos SET para hacer el update a la tabla
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

function enviarCorreo($correo, $id)
{
    $fecha_corta = date('ymd');
    $mail = new PHPMailer();                              // Passing `true` enables exceptions
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = '	mail.familiasseguras.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                        // Enable SMTP authentication
    $mail->Username = 'support@familiasseguras.com';                 // SMTP username
    $mail->Password = 'peka2101';    
    $mail->SetFrom('support@familiasseguras.comm', 'Familias Seguras');
    $mail->AddReplyTo('support@familiasseguras.com', 'Familias Seguras');                       // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;      
    $mail->Subject = 'Nueva solicitud de oferta';
    $mail->AddAddress($correo);
    $mail->MsgHTML("
        <body style='font-family: Arial, Helvetica, sans-serif; margin: 0; padding:0;' >
        <div class='row' style='margin-top: 25px'>

            <center>
                <img  src='http://familiasseguras.com/web/img/logo/logo_only_b.png' style='text-align:center;'>
            </center>

            <div class='row' style='margin-bottom:120px; height: 160px;border-top: 1px solid rgba(128, 128, 128, 0.377);'>
                <div style='float:left; width: 80%; '>
                    <h3 style='	color:rgb(78, 78, 78);
                    font-weight: 50;
                    text-align:center; margin-top: 40px; padding-left: 5%; padding-right: 5%;'>
                    Acabas de recibir la solicitud de oferta No. $fecha_corta - $id de parte de: NOMBRE CLIENTE <br> 
                    por medio del sitio de familiasseguras.com, para poder procesar debes de ingresar a nuestro portal,<br>
                     haciendo click <a href='http://familiasseguras.com/dashboard/empleado/login.php'>AQUI</a> y al entrar al sitio no olvides ingresar tú correo y contraseña.
                    </h3>
                </div>
                <div style='opacity:0.8; filter: brightness(0.6); float:left; background-color:mediumvioletred; width: 20%; height: 100%; background-image: url(http://familiasseguras.com/web/img/logo/maili.jpg);background-size: cover;background-position-x: -80px' >

                </div>
                
            </div>

        </div>
        <div class='row' style='text-align:center'>

        </div>

        </section>

        </body>

        ");
    if($mail->Send())
    {
        echo 'si';
    }
    else
    {
        'no';
    }
}
?>