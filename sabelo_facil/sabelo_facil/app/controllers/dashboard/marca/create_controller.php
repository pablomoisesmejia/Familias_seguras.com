<?php
require_once("../../app/models/marca.class.php");
try{
    $Marca = new Marca;
    if(isset($_POST['crear'])){
        $_POST = $Marca->validateForm($_POST);
        if($Marca->setNombre($_POST['nombre'])){
            if($Marca->setCorreo($_POST['correo'])){
                if($Marca->setTelefono($_POST['telefono'])){
                    if($Marca->setDireccion($_POST['direccion_admin'])){
                        if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                            if($Marca->setImagen($_FILES['archivo'])){
                                if($Marca->setEstado(isset($_POST['estado'])?1:0)){
                                    if($Marca->createMarcas()){
                                        Page::showMessage(1, "Marca creada", "index.php");
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
                                }else{
                                throw new Exception($Marca->getImageError());
                            }
                            }else {
                                throw new Exception("Imagen incorrecta");
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
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/Marca/create_view.php");
?>