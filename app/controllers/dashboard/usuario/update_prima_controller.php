<?php
require_once("../../app/models/primas.class.php");
try{
    $prima = new Primas;
    if(isset($_GET['id'])){
        if($prima->setIdPrima($_GET['id'])){
            if($prima->readPrima()){
                if(isset($_POST['actualizar'])){
                    $_POST = $prima->validateForm($_POST);
                    if($prima->setIdCuadro($_POST['cuadro'])){
                        if($prima->setPrima($_POST['prima'])){
                            if($prima->updatePrima()){
                                Page::showMessage(1, "Prima actualizada", "index.php");
                            }else{
                                throw new Exception(Database::getException());
                            }
                        }else{
                            throw new Exception("Prima incorrecta");
                        }
                    }else{
                        throw new Exception("Prospecto incorrecto");
                    }
                }
            }else{
                Page::showMessage(2, "prima inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "prima incorrecta", "index.php");
        }
    }else{
        Page::showMessage(2, "prrima incorrecta", "index.php");
    }

}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/empleado/update_prima_view.php");
?>