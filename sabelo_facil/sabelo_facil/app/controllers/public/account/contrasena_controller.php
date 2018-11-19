<?php
require_once("../../app/models/cliente.class.php");
try{
    if(isset($_POST['cambiar'])){
        $cliente = new Cliente;
        $_POST = $cliente->validateForm($_POST);
        if($cliente->setId($_SESSION['id_cliente'])){
            if($_POST['clave_actual_1'] == $_POST['clave_actual_2']){
                if($_POST['clave_actual_1'] != $_POST['clave_nueva_2']){
                    $email = $cliente->getCorreo();
                    $alias =  $cliente->getAlias();
                    if($email != $_POST['clave_nueva_2']){
                        if($alias != $_POST['clave_nueva_2']){
                            if($cliente->setClave2($_POST['clave_nueva_1'])){
                                 if($cliente->changePassword()){
                                    Page::showMessage(1, "Clave cambiada", "perfil.php");
                                 }else{
                                    throw new Exception(Database::getException());
                                 }
                                        }else{
                                throw new Exception("Clave nueva menor a 8 caracteres recuerda que debe contener una Mayus. un numero y caracter especial");
                            }
                        }else{
                            throw new Exception("Su nueva clave no puede ser su nombre de usuario");
                        }
                    }else{
                        throw new Exception("Su nueva clave no puede ser su correo");
                    }
                }else{
                    throw new Exception("Ambas contraseñas son identicas");
                }  
            }else{
                throw new Exception("Claves actuales diferentes");
            }
        }else{
            Page::showMessage(2, "Usuario incorrecto", "index.php");
        }
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/public/account/cambio_view.php");

?>