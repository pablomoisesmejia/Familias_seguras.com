<?php
require_once("../../app/models/modelo.class.php");
try{
    $Marca = new Marca;
    if(isset($_POST['crear'])){
        $_POST = $Marca->validateForm($_POST);
        if($Marca->setNombre($_POST['nombre'])){  
            if($Marca->setMarca($_POST['marca'])){                 
                     if($Marca->createModelo()){
                        Page::showMessage(1, "Modelo creado", "index.php");                          
                    }else{
                        throw new Exception("Modelo incorrecta");
                    }   
        }else{
            throw new Exception("Nombre incorrecto");
        }                        
    }
}
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/modelo/create_view.php");
?>