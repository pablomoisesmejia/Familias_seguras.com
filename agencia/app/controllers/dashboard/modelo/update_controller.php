<?php
require_once("../../app/models/modelo.class.php");
try{
    if(isset($_GET['id'])){
        $Marca = new Marca;
        if($Marca->setId($_GET['id'])){
            if($Marca->readModelos()){
                if(isset($_POST['actualizar'])){
                    $_POST = $Marca->validateForm($_POST);
                    if($Marca->setNombre($_POST['nombre'])){
                        if($Marca->setMarca($_POST['marca'])){
                                if($Marca->updateModelo()){
                                    Page::showMessage(1, "Modelo modificada", "index.php");
                                }else{
                                    throw new Exception(Database::getException());
                                }
                            }else{
                                throw new Exception("Marca incorrecto");
                            }
                    }else{
                        throw new Exception("Nombre incorrecto");
                    }                    
                }
            }else{
                Page::showMessage(2, "Modelo inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Modelo incorrecto", "index.php");
        }        
    }else{
        Page::showMessage(3, "Modelo categoría", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/modelo/update_view.php");
?>