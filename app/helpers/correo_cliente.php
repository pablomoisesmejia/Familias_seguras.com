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
/*$correo = 'fernanxavi58@gmail.com';
$id_cliente = 10;
$tipo_seguro = 2;*/

$cliente_prospecto = new Cliente_Prospecto;

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

$companias = $cliente_prospecto->getCompaniasInteres();

$info_seguro = $cliente_prospecto->getSeguroVidaCliente();


print_r($companias);
print_r($info_seguro);



$correo_osmin = 'Osmin@familiasseguras.com';
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
    if($mail->Send())
    {
        echo 1;
    }
    else
    {
        echo 0;
    }
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
                text-align:center; margin-top: 40px; padding-left: 5%; padding-right: 5%;'>
                    El cliente con nombre $nombres $apellidos hizo una cotización de $seguro y la cantidad de pagos es de $cantidad_pagos, 
                    su fecha de nacimiento es $fecha_nacimiento, su correo electrónico es $correo, su número de telefono es $telefono
                    y lo puedes contactar en el siguiente horario $hora_contacto.
                    <br>
                    Las companias seleccionadas fueron las siguientes: <br>
                    $companias.
                    <br>

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