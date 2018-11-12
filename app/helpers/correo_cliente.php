<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$correo = $_POST['correo'];
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
?>