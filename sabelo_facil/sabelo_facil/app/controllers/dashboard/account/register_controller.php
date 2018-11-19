<?php
require_once("../../app/models/usuario.class.php");
require_once("../../app/libraries/recaptcha-1.0.0/php/recaptchalib.php");
try{
	$usuario = new Usuario;
	if($usuario->getUsuarios()){
        Page::showMessage(3, "Hay usuarios disponibles", "login.php");
    }else{
        if(isset($_POST['registrar'])){
            $_POST = $usuario->validateForm($_POST);

            $secret = "6LcRq2YUAAAAACxoMymVeFWKRBYgnZUkqY6eNXhK";
        $response = null;
        // comprueba la clave secreta
        $reCaptcha = new ReCaptcha($secret);
       
        if ($_POST["g-recaptcha-response"]) {
            $response = $reCaptcha->verifyResponse(
            $_SERVER["REMOTE_ADDR"],
            $_POST["g-recaptcha-response"]
            );
         }

         if($response != null && $response->success){


            if($usuario->setNombres($_POST['nombres'])){
                if($usuario->setApellidos($_POST['apellidos'])){
                    if($usuario->setCorreo($_POST['correo'])){
                        if($_POST['alias'] != $_POST['clave2']){
                            if($_POST['correo'] != $_POST['clave2']){
                            if($usuario->setAlias($_POST['alias'])){
                                if($_POST['clave1'] == $_POST['clave2']){
                                    if($usuario->setClave2($_POST['clave1'])){
                                        if($usuario->setFechaNac($_POST['fecha_nac'])){
                                            if($usuario->setDireccion($_POST['direccion_admin'])){                            
                                                if($usuario->setDocumento($_POST['documento_admin'])){
                                                    if($usuario->setTipoDocumento($_POST['tipo_documento'])){
                                                        if($usuario->createPrimer_Usuario()){
                                                            Page::showMessage(1, "Usuario registrado", "login.php");
                                                        }else{
                                                            throw new Exception(Database::getException());
                                                            print (e);
                                                        }
                                                    }else{
                                                        throw new Exception("tipo documento");
                                                    }
                                                }else{
                                                    throw new Exception("documento");
                                                } 
                                            }else{
                                                throw new Exception("direccion");
                                            }
                                        }else{
                                            throw new Exception("Fecha incorrecta");
                                        }
                                    }else{
                                        throw new Exception("Clave menor a 8 caracteres debe de llevar una mayus , un numero y un caracter especial");
                                    }
                                }else{
                                    throw new Exception("Claves diferentes");
                                }
                            }else{
                                throw new Exception("Alias incorrecto");
                        }
                        }else{
                            Page::showMessage(3,"Su correo no puede ser su contraseña porfavor cambiarlo", null);

                        }
                    }else{
                        Page::showMessage(3,"Su alias no puede ser su contraseña porfavor cambiarlo", null);
                    }
                    }else{
                        throw new Exception("Correo incorrecto");
                    }
                }else{
                    throw new Exception("Apellidos incorrectos");
                }
            }else{
                throw new Exception("Nombres incorrectos");
            }

        }else {
            // Si el código no es válido, lanzamos mensaje de error al usuario
             throw new Exception("Porfavor llena el reCAPTCHA ");
        }
    }
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/account/register_view.php");
?>