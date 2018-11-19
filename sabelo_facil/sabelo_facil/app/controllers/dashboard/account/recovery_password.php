<?php

require_once("../../app/models/usuario.class.php");
require_once '../../app/libraries/PHPMailer/class.smtp.php';
require_once '../../app/libraries/PHPMailer/class.phpmailer.php';

    try{
        $cliente = new Usuario;
        $mail = new PHPMailer;

        if(isset($_POST['Recuperar'])){
                $_POST = $cliente->validateForm($_POST);

                $cliente->setCorreo($_POST['correo']);
                if($cliente->checkCorreo()){
                    if($cliente->checkNombre()){
                        $correo = $cliente->getCorreo();

                        $nombreuser = $cliente->getNombres();

                        date_default_timezone_set("America/El_Salvador");
                        setlocale(LC_ALL,"es_ES");
                        $hora = date(" g:i a");

                        $fecha = date("j F, Y"); 
                        

                        
                    
                            $caracteres='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!!"#$%&/()=';
                            $largo=8;
                            for($pass='', $n=strlen($caracteres)-1; strlen($pass) < $largo ; ) {
                                $x = rand(0,$n);
                                $pass.= $caracteres[$x];
                                } 
                        
                            //Compones nuestro correo electronico
                            //Nuevo correo electronico.
                        
                            //Caracteres.
                            $mail->CharSet = 'UTF-8';

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
                            
                            ; 

                            //Comprobamos el envio.
                            if(!$mail->send()) {                    
                                Page::showMessage(3, "Ocurrió un error inesperado con él envió del correo electrónico" , null);
                            
                            } else {
                                if($cliente->setClave($pass)){
                                    if($cliente->changePassword()){
                                        Page::showMessage(1, "Se envio correctamente el correo electrónico. $pass" , "login.php");
                                    }else{
                                        Page::showMessage(2,"contraseña incorrecta","recovery.php");
                                    }
                                }
                               
                            }  

                            
                    }else{

                    }
                }else{
                    Page::showMessage(2, "El correo ingresado no existe en nuestros registros." , "recovery.php");
                }
                
        }
    }catch(Exception $error){
        Page::showMessage(2, $error->getMessage(), null);
    }
    require_once("../../app/views/dashboard/account/recovery_password_view.php");
?>