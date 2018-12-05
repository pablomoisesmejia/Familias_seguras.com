<?php
require_once("../../app/models/marca.class.php");
try{
    $Marca = new Marca;
    if(isset($_POST['crear'])){
        $_POST = $Marca->validateForm($_POST);
        if($Marca->setNombre($_POST['nombre'])){
            if($Marca->setCorreo($_POST['correo'])){
                if($Marca->setTelefono($_POST['telefono'])){                  
                     if($Marca->createMarcas()){
                        Page::showMessage(1, "Marca creada", "index.php");   
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
}
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/Marca/create_view.php");
?>