<?php
require_once("../../app/models/marca.class.php");
try{
    if(isset($_GET['id'])){
        $Marca = new Marca;
        if($Marca->setId($_GET['id'])){
            if($Marca->readMarcas()){
                if(isset($_POST['actualizar'])){
                    $_POST = $Marca->validateForm($_POST);
                    if($Marca->setNombre($_POST['nombre'])){
                        if($Marca->setCorreo($_POST['correo'])){
                            if($Marca->setTelefono($_POST['telefono'])){
                                if($Marca->setDireccion($_POST['direccion_admin'])){
                                    if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                                        if(!$Marca->setImagen($_FILES['archivo'])){
                                            throw new Exception($Marca->getImageError());
                                        }
                                    }
                                        if($Marca->setEstado(isset($_POST['estado'])?1:0)){
                                                if($Marca->updateMarcas()){
                                                    Page::showMessage(1, "Marca modificada", "index.php");
                                                }else{
                                                    if($Marca->unsetImagen()){
                                                        throw new Exception(Database::getException());
                                                    }else{
                                                        throw new Exception("Elimine la imagen manualmente");
                                                    }
                                                }
                                            }else {
                                                throw new Exception("Estado incorrecta");
                                            }
                                        
                                    }else {
                                        throw new Exception("Direccion incorrecta");
                                    }
                            }else {
                                throw new Exception("Telefono incorrecto");
                            } 
                        }else {
                            throw new Exception("Correo incorrecta");
                        }                        
                    }else{
                        throw new Exception("Nombre incorrecto");
                    }                    
                }
            }else{
                Page::showMessage(2, "Marca inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Marca incorrecta", "index.php");
        }        
    }else{
        Page::showMessage(3, "Seleccione Marca", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/Marca/update_view.php");
?>