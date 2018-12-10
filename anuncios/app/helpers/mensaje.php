<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(); 
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
$mail->Subject = 'Cliente interesado por tu publicación';
$mail->AddAddress($datos_usuario['correo_usuario']);
$mail->MsgHTML("
    <body style='font-family: Arial, Helvetica, sans-serif; margin: 0; padding:0;' >
    <div class='row' style='margin-top: 25px'>
    <h1 style='	color:rgb(0, 93, 180);
                text-align:center;
                margin:0;
                margin-bottom: 18px;
                
                font-size: 2.3em;
                font-family: Calibri; 
                font-weight: 100;
                padding: 0;
                padding-left: 5%;
                padding-right: 5%;'>Un cliente esta interesado sobre tu publicación</h1>

        <div class='row' style='margin-bottom:120px; height: 160px;border-top: 1px solid rgba(128, 128, 128, 0.377);'>
            <div style='float:left; width: 98%; '>
                <h3 style='	color:rgb(78, 78, 78);
                font-weight: 50;
                text-align:center; margin-top: 40px; padding-left: 5%; padding-right: 5%;'>
                El nombre es $_POST[nombres] $_POST[apellidos], su número de teléfono es $_POST[telefono], el correo electrónico es $_POST[correo].
                <p>
                <p>
                El mensaje es el siguiente:
                <p>
                $_POST[mensaje]                
                </h3>
            </div>
            
        </div>

    </div>
    <div class='row' style='text-align:center'>

    </div>

    </section>

    </body>

    ");
$mail->Send();
?>