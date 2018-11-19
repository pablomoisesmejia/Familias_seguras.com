<?php
require_once("../../app/models/proveedor.class.php");
try{
    if(isset($_GET['id'])){
        $Proveedor = new Proveedor;
        if($Proveedor->setId($_GET['id'])){
            if($Proveedor->readProveedor()){
                if(isset($_POST['actualizar'])){
                    $_POST = $Proveedor->validateForm($_POST);
                    if($Proveedor->setNombre($_POST['nombre'])){
                        if($Proveedor->setCorreo($_POST['correo'])){
                            if($Proveedor->setTelefono($_POST['telefono'])){
                                if($Proveedor->setDireccion($_POST['direccion'])){
                                    if($Proveedor->setEstado(isset($_POST['estado'])?1:0)){
                                    if($Proveedor->updateProveedor()){
                                        Page::showMessage(1, "Proveedor actualizado", "index.php");
                                    }else{
                                        throw new Exception(Database::getException());
                                    }
                                }else {
                                    throw new Exception("Estado incorrecto");
                                }
                                }else {
                                    throw new Exception("Direccion incorrecta");
                                }

                            }else{
                                throw new Exception("Telefono incorrecto");
                            }
                        }else{
                            throw new Exception("Correo incorrecto");
                        }            
                    }else{
                        throw new Exception("Nombre incorrecto");
                    }
                }
            }else{
                Page::showMessage(2, "Proveedor inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Proveedor incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione proveedor", "index.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/proveedor/update_view.php");
?>