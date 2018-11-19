<?php
require_once("../../app/models/usuario.class.php");
try{
    $usuario = new Usuario;
    if($usuario->setId($_SESSION['ID_admin'])){
        if($usuario->readUsuario()){
            if(isset($_POST['editar'])){
                $_POST = $usuario->validateForm($_POST);
                if($usuario->setNombres($_POST['nombres'])){
                    if($usuario->setApellidos($_POST['apellidos'])){
                        if($usuario->setCorreo($_POST['correo'])){
                            if($usuario->setAlias($_POST['alias'])){
                                if($usuario->setFechaNac($_POST['fecha_nac'])){
                                    if($usuario->setDireccion($_POST['direccion_admin'])){
                                        if($usuario->setDocumento($_POST['documento_admin'])){
                                            if($usuario->updateUsuario()){
                                                $_SESSION['alias_usuario'] = $usuario->getAlias();
                                                Page::showMessage(1, "Perfil modificado", "index.php");
                                            }else{
                                                throw new Exception(Database::getException());
                                            }
                                        }
                                        else{
                                            throw new Exception("Documento Incorrecto");
                                        }   
                                    }else{
                                        throw new Exception("Direccion Incorrecta");
                                    }    
                                }else{
                                    throw new Exception("Fecha de nacimiento incorrecta");
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
        }else{
            Page::showMessage(2, "Usuario inexistente", "index.php");
        }
    }else{
        Page::showMessage(2, "Usuario incorrecto", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/account/profile_view.php");
?>