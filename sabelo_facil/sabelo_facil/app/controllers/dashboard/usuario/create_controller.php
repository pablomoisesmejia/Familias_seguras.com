<?php
require_once("../../app/models/usuario.class.php");
try{
    $usuario = new Usuario;
    if(isset($_POST['crear'])){
        $_POST = $usuario->validateForm($_POST);
        if($usuario->setNombres($_POST['nombres'])){
            if($usuario->setApellidos($_POST['apellidos'])){
                if($usuario->setCorreo($_POST['correo'])){
                    if($usuario->setAlias($_POST['alias'])){
                        if($_POST['clave1'] == $_POST['clave2']){
                            if($_POST['alias'] != $_POST['clave2']){
                                if($_POST['correo'] != $_POST['clave2']){
                                    if($usuario->setClave2($_POST['clave1'])){
                                        if($usuario->setFechaNac($_POST['fecha_nac'])){
                                            if($usuario->setDireccion($_POST['direccion_admin'])){                            
                                                if($usuario->setDocumento($_POST['documento_admin'])){
                                                    if($usuario->setTipoDocumento($_POST['tipo_documento'])){
                                                        if($usuario->setTipousuario($_POST['tipo_usuario'])){
                                                            if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                                                                if($usuario->setImagen($_FILES['archivo'])){
                                                                    if($usuario->createUsuario()){
                                                                        Page::showMessage(1, "Usuario creado exitosamente ", "index.php");
                                                                        }else{
                                                                            throw new Exception(Database::getException());
                                                                        }
                                                                    }else{
                                                                        throw new Exception($usuario->getImageError());
                                                                    }
                                                                }else {
                                                                    throw new Exception("Imagen incorrecta");
                                                                }
                                                            }else{
                                                                throw new Exception("tipo de ususario incorrecto");
                                                            }
                                                        }else{
                                                            throw new Exception("tipo documento incorrecto");
                                                        }
                                                    }else{
                                                        throw new Exception("documento incorrecto");
                                                    } 
                                                }else{
                                                    throw new Exception("direccion");
                                                }
                                            }else{
                                                throw new Exception("Fecha");
                                            }
                                        }else{
                                            throw new Exception("Clave menor a 8 caracteres recuerda que debe contener una Mayus. un numero y caracter especial");
                                        }
                                }else{
                                    Page::showMessage(3,"Su correo no puede ser su contraseña porfavor cambiarlo", null);

                                }
                            }else{
                                Page::showMessage(3,"Su alias no puede ser su contraseña porfavor cambiarlo", null);
                            }
                            
                            }else{
                                throw new Exception("Claves diferentes");
                            }                        
                        }else{
                            throw new Exception("Alias incorrecto");
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
        }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/usuario/create_view.php");
?>