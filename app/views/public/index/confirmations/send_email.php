<?php
require '../PHPMailer/class.phpmailer.php';
require '../PHPMailer/class.smtp.php';

$mail = new PHPMailer;

$mail->CharSet = 'UTF-8';
if(isset($_POST['cotizar'])){

    $mail->isSMTP();                                      // usamos smtp
    $mail->Host = 'smtp.gmail.com';  // Especificamos el servidor smtp
    $mail->SMTPAuth = true;                               // habilitamos la autenticacion smtp
    $mail->Username = 'gcclassic2018@gmail.com';                 // SMTP usuario
    $mail->Password = 'promodeoro';                           // SMTP conttraseña
    $mail->SMTPSecure = 'ssl';                            // encriptacion ssl
    $mail->Port = 465;  
    //De dirección correo electrónico y el nombre
    $mail->From = "gcclassic2018@gmail.com";
    $mail->FromName = "Sabelo Facil";

    //Dirección de envio y nombre.
    $mail->addAddress($correo);


    //Enviar codigo HTML o texto plano.
    $mail->isHTML(true);

    //Titulo email.
    $mail->Subject = "Recuperacion de contraseña | Sabelo Facil";
    //Cuerpo email con HTML.
    $mail->Body = 
    "
    <head>  
        <style>       
        body { 
            height: 100%; width: 100%; max-width: 100%;
            font-family: 'Tahoma', arial;  
            background-color: #D8D8D8;
            overflow: hidden;
        }   
    
        .wit {
            display: block; position:relative;
            width: 100%; max-width:80%;                             
            background-color: #FFF;         
            left:10%;
        }
    
        .blue { color: #178195; }
        .bold { font-weight: bold; }
        .grey { color: #585858; }
        .padding32 { padding: 32px; }

        </style>
    </head>
    
    <body>
        <div class=wit>
            <div class=padding32>
                <img src='https://lh3.googleusercontent.com/_bl1DvvxMXUYBv_tubEuOT6Y2mQQWppNTfC09SzaxMLJRIvXYqyQbB3keTM8i8Hn2ZVWkJNp5TMkpHFkI2CGR_bl6oKRqU-ZV45v4g3lyUjAKCsU8Zz0DwEmfqWWN_kV83Ga4wS5IPMftbzuOxhQreUZ1s5aJ_sQ4ixU6FC2bCu-Js8ZeODqKD-jIE4IzQ-61AE3YpvkLA36UyOnHb3CJUZHrfXgqgVK_JBoxXwdMYnbUfUEIt1QfvproQAjTKK8-2kVSfQ-EJbLZz32oYuVylYZD8XG0bAJxDnZshkgpqfahpAOtNI6FokEaMyjlY4GS9X1cEvDiXEEt3TTZIWXuHM0mQfJ_n0pvI4IocuuiVoqynxD8cFmPmXyl7hRMqQgjlkMwzHUlnLMZ1-pHPXjvbItdGP_sbsdksXU8fY7kUnCUEWAm3OAYL3xWojaQcNTsUCQdf4trTpGeuQwUOXngLP8j0DUHODKEbz1GnUFGGmix9xc7RsN8gGAN8rXK1yoM2dtB9Qu-DB5cgH_wxOBLsQ0YB5xIdyjkyQkgtKaPB7wX36t4bdVujBBB_9PL5bhh-w62YLppcymHNJ9p4eyIGmqE4fwh1j9SZYDcAVf9Ut-x1sDt8lUsqvuENVYMpcw=w738-h943-no' style='max-width:250px' />
                <h2 class='inline m-L'><b>GC Classic | Recuperacion de contraseña</b></h2>
                <br />
        
                <span class='bold'> $nombreuser</span>, tu contraseña fue modificada, en caso que no fuiste tú, pongase en contacto con sabelofacil2018@gmail.com <br />
                <br />
                Su nueva contraseña es:  <span class='bold'> $pass</span><br />
                <br />
                Le recomendamos que al iniciar sesion cambie su contraseña para mayor seguridad
                <br />
                Modificada el $fecha  alas  $hora
        
                <h4 class=bold>Atentamente:</h4>
                <span class=grey>Equipo de Sabelo Facil </span><br />
                Saludos.<br />  
            </div>
        </div>  
    </body>
    ";  
    
    } 
?>