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

                                if($Marca->updateMarcas()){
                                    Page::showMessage(1, "Marca modificada", "index.php");
                                }else{
                                    throw new Exception(Database::getException());
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
        Page::showMessage(3, "Marca categoría", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/marca/update_view.php");
?>