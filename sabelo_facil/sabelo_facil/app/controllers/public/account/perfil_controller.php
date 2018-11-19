<?php
require_once("../../app/models/cliente.class.php");
try{
    $usuario = new Cliente;
    if($usuario->setId($_SESSION['id_cliente'])){
        if($usuario->readCliente()){
            if(isset($_POST['editar'])){
                $_POST = $usuario->validateForm($_POST);
                if($usuario->setNombres($_POST['nombres'])){
                    if($usuario->setApellidos($_POST['apellidos'])){
                        if($usuario->setCorreo($_POST['correo'])){
                            if($usuario->setDocumento($_POST['documento'])){

                                if($usuario->setAlias($_POST['username'])){
                                    if($usuario->setDireccion($_POST['direccion'])){
                                        if($usuario->updateCliente()){
                                            $_SESSION['correo'] = $usuario->getCorreo();
                                            Page::showMessage(1, "Perfil modificado", "../productos/index.php");
                                        }else{
                                            throw new Exception(Database::getException());
                                        }
                                    }else{
                                        throw new Exception("Direccion incorrecta");
                                    }
                                }else{
                                    throw new Exception("Nombre de usuario incorrecto");
                                }
                                
                            }else{
                                throw new Exception("Documento incorrecto");
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
require_once("../../app/views/public/account/perfil_view.php");
?>