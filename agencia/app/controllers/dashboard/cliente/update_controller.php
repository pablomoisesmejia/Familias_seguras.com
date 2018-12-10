<?php
require_once("../../app/models/cliente.class.php");
try{
    if(isset($_GET['id'])){
        $cliente = new cliente;
        if($cliente->setId($_GET['id'])){
            if($cliente->readcliente()){
                if(isset($_POST['actualizar'])){
                    $_POST = $cliente->validateForm($_POST);
                    if($cliente->setNombres($_POST['nombres'])){
                        if($cliente->setApellidos($_POST['apellidos'])){
                            if($cliente->setCorreo($_POST['correo'])){
                                if($cliente->setAlias($_POST['alias'])){
                                    if($cliente->setTel($_POST['tel'])){
                                        if($cliente->setWha($_POST['wha'])){
                                                if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                                                    if(!$cliente->setImagen($_FILES['archivo'])){
                                                        throw new Exception($cliente->getImageError());
                                                    }
                                                    print($cliente->getImagen());
                                                }
                                                if($cliente->updatecliente()){
                                                    $_SESSION['alias_usuario'] = $cliente->getAlias();
                                                    Page::showMessage(1, "cliente modificado", "index.php");
                                                }else{
                                                    throw new Exception(Database::getException());
                                                }
                                            }else{
                                                throw new Exception("WhatsApp incorrecto");
                                            }
                                        }else{
                                            throw new Exception("Telefono incorrecto");
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
                Page::showMessage(2, "cliente inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "cliente incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione cliente", "index.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/cliente/update_view.php");
?>