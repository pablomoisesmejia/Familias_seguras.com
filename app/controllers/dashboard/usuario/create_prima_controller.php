<?php
require_once("../../app/models/primas.class.php");
try{
    $prima = new Primas;
    if(isset($_POST['crear'])){
        $_POST = $prima->validateForm($_POST);
        if($prima->setIdCuadro($_POST['cuadro'])){
            if($prima->setPrima($_POST['prima'])){
                if($prima->createPrima()){
                    Page::showMessage(1, "Prima creada", "index.php");
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

}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/empleado/create_prima_view.php");
?>