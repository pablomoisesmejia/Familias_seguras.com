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
                            if($usuario->setClave($_POST['clave1'])){
                                if($usuario->createUsuario()){
                                    Page::showMessage(1, "Usuario creado", "index.php");
                                }else{
                                    throw new Exception(Database::getException());
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
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/usuario/create_view.php");
?>