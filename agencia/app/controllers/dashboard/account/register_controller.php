<?php
require_once("../../app/models/usuario.class.php");
try{
	$usuario = new Usuario;
	if($usuario->getUsuarios()){
        Page::showMessage(3, "Hay usuarios disponibles", "login.php");
    }else{
        if(isset($_POST['registrar'])){
            $_POST = $usuario->validateForm($_POST);
            if($usuario->setNombres($_POST['nombres'])){
                if($usuario->setApellidos($_POST['apellidos'])){
                    if($usuario->setCorreo($_POST['correo'])){
                        if($usuario->setAlias($_POST['alias'])){
                            if($_POST['clave1'] == $_POST['clave2']){
                                if($usuario->setClave($_POST['clave1'])){
                                    if($usuario->setFecha_Nac($_POST['fecha_nac'])){
                                        if($usuario->setDireccion($_POST['direccion_admin'])){                            
                                            if($usuario->setDocumento($_POST['documento_admin'])){
                                                if($usuario->setTipoDocumento($_POST['tipo_documento'])){
                                                    if($usuario->createUsuario()){
                                                        Page::showMessage(1, "Usuario registrado", "login.php");
                                                    }else{
                                                        throw new Exception(Database::getException());
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
                                        throw new Exception("Fecha");
                                    }
                                }else{
                                    throw new Exception("Clave menor a 6 caracteres");
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
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/account/register_view.php");
?>