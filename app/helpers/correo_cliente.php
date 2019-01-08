<?php
require_once('../models/database.class.php');
require_once('validator.class.php');
require_once('../models/cliente_prospectos.class.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


$correo = $_POST['correo'];
$id_cliente = $_POST['id_cliente_prospecto'];
$tipo_seguro = $_POST['tipo_seguro'];

//$correo = 'fernanxavi58@gmail.com';
//$id_cliente = 21;
//$tipo_seguro = 4;

$cliente_prospecto = new Cliente_Prospecto;

//Datos personales del cliente
$cliente_prospecto->setIdClienteProspecto($id_cliente);
$info_cliente = $cliente_prospecto->getClientes();
$nombres = $info_cliente['nombres'];
$apellidos = $info_cliente['apellidos'];
$seguro = $info_cliente['tipo_seguro'];
$cantidad_pagos = $info_cliente['cantidad_pagos'];
$hora_contacto = $info_cliente['hora_contactarle'];
$fecha_nacimiento  = $info_cliente['fecha_nacimiento'];
$telefono = $info_cliente['telefono'];
$whatsapp = $info_cliente['whatsapp'];

if($info_cliente['whatsapp'] != null)
{
    $telefono = $telefono.' Whatsapp es '.$whatsapp;
}

//Obtiene las compañias seleccionadas por el cliente
$companias = $_POST['aseguradoras_select'];
$compañia = '';
for($i = 0; $i<count($companias); $i++)
{
    $companias_selec = ($i+1).'-'.$companias[$i].'<br>';
    $compañia .= $companias_selec;
}

//Declaracion de variables para cada tipo de cotización
$info_seguro = '';
$mensaje = '';

//Variables de Seguro Medico
$nombre_conyugue = '';
$fecha_nacimiento_conyugue = '';
$cantidad_hijos = '';

//Variables de Seguro de vida
$fumador = '';
$suma_asegurada = '';
$cesion_bancaria = '';

//Variables de seguro de incendios
$tipo_inmueble = '';
$direccion = '';
$asegurado_calidad = '';
$valor_construccion = '';
$valor_contenido = '';

//Variables de seguro de vehiculos
$tabla_vehiculos = '';

if($tipo_seguro == 1)
{
    $info_seguro = $cliente_prospecto->getSeguroMedicoCliente();
    $nombre_conyugue = $info_seguro[1];
    $fecha_nacimiento_conyugue = $info_seguro[2];
    $cantidad_hijos = $info_seguro[3];

    $mensaje = 'El nombre del conyugue es '.$nombre_conyugue.' <br> la fecha de nacimiento del conyugue es '.$fecha_nacimiento_conyugue.'<br> y la cantidad de hijos es de '.$cantidad_hijos.'.';
}
if($tipo_seguro == 2)
{
    $info_seguro = $cliente_prospecto->getSeguroVidaCliente();
    $fumador = $info_seguro[1];
    $suma_asegurada = $info_seguro[2];
    $cesion_bancaria = $info_seguro[3];

    $mensaje = 'El cliente '.$fumador.' se considera fumador <br> la suma asegurada es de '.$suma_asegurada.'<br> y '.$cesion_bancaria.' la necesita para un banco.';
}
if($tipo_seguro == 3)
{
    $info_seguro = $cliente_prospecto->getSeguroIncendioCliente();
    $tipo_inmueble = $info_seguro[1];
    $direccion = $info_seguro[2];
    $asegurado_calidad = $info_seguro[3];
    $valor_construccion = $info_seguro[4];
    $valor_contenido = $info_seguro[5];

    $mensaje = 'El tipo de inmueble es '.$tipo_inmueble.'<br> la dirección es '.$direccion.' <br> la calidad de asegurar el inmueble es '.$asegurado_calidad.'<br> 
    el valor de las construcciones sin el terreno es '.$valor_construccion.'<br> y el valor del contenido es de'.$valor_contenido.'.';
}
if($tipo_seguro == 4)
{
    $info_seguro = $cliente_prospecto->getSeguroVehiculosCliente();
    $tabla_vehiculos .= "
    <table style='text-align: center; border-collapse: collapse; font-size: 1em;
    font-family: Calibri; 
    font-weight: 0;'>
        <thead>
            <tr style='border-bottom: 1px solid #d0d0d0;'>
                <th style='padding: 10px 8px; border-radius: 2px;'>Marca</th>
                <th style='padding: 10px 8px; border-radius: 2px;'>Modelo</th>
                <th style='padding: 10px 8px; border-radius: 2px;'>Año</th>
                <th style='padding: 10px 8px; border-radius: 2px;'>Origen</th>
                <th style='padding: 10px 8px; border-radius: 2px;'>Valor</th>
            </tr>
        </thead>
        <tbody>";
        for($i = 0; $i<count($info_seguro); $i++)
        {
            $tabla_vehiculos .=
            "<tr style='border-bottom: 1px solid #d0d0d0;'>
                <td style='padding: 10px 8px; border-radius: 2px;'>".$info_seguro[$i][0]."</td>
                <td style='padding: 10px 8px; border-radius: 2px;'>".$info_seguro[$i][1]."</td>
                <td style='padding: 10px 8px; border-radius: 2px;'>".$info_seguro[$i][2]."</td>
                <td style='padding: 10px 8px; border-radius: 2px;'>".$info_seguro[$i][3]."</td>
                <td style='padding: 10px 8px; border-radius: 2px;'>".$info_seguro[$i][4]."</td>
            </tr>";
        };
        $tabla_vehiculos .=
        "
        </tbody>
    </table>
    ";
    $mensaje = $tabla_vehiculos;
}


//$correo_osmin = 'Osmin@familiasseguras.com';
$correo_osmin = 'fernanxavi58@gmail.com';
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
if($correo)
{
    $mail->Subject = 'Gracias por cotizar con nosotros';
    $mail->AddAddress($correo);
    $mail->MsgHTML("
    <body style='font-family: Arial, Helvetica, sans-serif; margin: 0; padding:0;' >
    <div class='row' style='margin-top: 25px'>

        <center><img  src='http://familiasseguras.com/web/img/logo/logo_only_b.png'
        style='text-align:center;
        
        '>
        </center>
    <h1 style='	color:rgb(0, 93, 180);
                text-align:center;
                margin:0;
                margin-bottom: 18px;
                
                font-size: 2.3em;
                font-family: Calibri; 
                font-weight: 100;
                padding: 0;
                padding-left: 5%;
                padding-right: 5%;'>Gracias por confiar en nosotros</h1>

        <div class='row' style='margin-bottom:120px; height: 160px;border-top: 1px solid rgba(128, 128, 128, 0.377);'>
            <div style='float:left; width: 80%; '>
                <h3 style='	color:rgb(78, 78, 78);
                font-weight: 50;
                text-align:center; margin-top: 40px; padding-left: 5%; padding-right: 5%;'>
                Dentro de un momento nos pondremos en contacto contigo, <br> 
                para poder hablar acerca de nuestros servicios.
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
    $mail->Send();
}
if($correo_osmin)
{
    $mail->Subject = 'Nueva contización';
    $mail->AddAddress($correo_osmin);
    $mail->MsgHTML("
    <body style='font-family: Arial, Helvetica, sans-serif; margin: 0; padding:0;' >
    <div class='row' style='margin-top: 25px'>

        <center><img  src='http://familiasseguras.com/web/img/logo/logo_only_b.png'
        style='text-align:center;
        
        '>
        </center>
    <h1 style='	color:rgb(0, 93, 180);
                text-align:center;
                margin:0;
                margin-bottom: 18px;
                
                font-size: 2.3em;
                font-family: Calibri; 
                font-weight: 100;
                padding: 0;
                padding-left: 5%;
                padding-right: 5%;'>Nueva solicitud de oferta</h1>

        <div class='row' style='margin-bottom:120px; height: 160px;border-top: 1px solid rgba(128, 128, 128, 0.377);'>
            <div style='float:left; width: 80%; '>
                <h3 style='	color:rgb(78, 78, 78);
                font-weight: 50;
                margin-top: 40px; padding-left: 5%; padding-right: 4%;'>
                    El cliente con nombre $nombres $apellidos hizo una cotización de $seguro y la cantidad de pagos es de $cantidad_pagos, 
                    su fecha de nacimiento es $fecha_nacimiento, su correo electrónico es $correo, su número de telefono es $telefono 
                    y lo puedes contactar en el siguiente horario $hora_contacto.
                    <br>
                    <br>
                    Las compañias seleccionadas fueron las siguientes: <br>
                    $compañia
                    <br>
                    <br>
                    Información sobre la cotización
                    <br>
                    <br>
                    $mensaje
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
        echo 1;
    }
    else
    {
        echo 0;
    }
}

?>