<?php
require_once("../../app/models/Comercios.class.php");
try{
    $Comercios = new Comercios;
    if(isset($_POST['crear'])){
        $_POST = $Comercios->validateForm($_POST);
        if($Comercios->setNombre($_POST['nombres'])){
            if($Comercios->setResponsable($_POST['responsable'])){
                    if($Comercios->setCorreo($_POST['correo'])){
                        if($Comercios->setTelefono($_POST['telefono'])){
                            if($Comercios->setEstado($_POST['Estados'])){
                                if($Comercios->createComercio()){
                                Page::showMessage(1, "Categoría creada exitosamente", "index.php");
                              }else{
                                throw new Exception(Database::getException());
                               } 
                        }else{
                            throw new Exception("Estado incorrecto");
                           }         
                        }else{
                            throw new Exception("Telefono incorrecto");
                           }  
                     }else{
                    throw new Exception("Correo incorrecto");
                   } 
            }else{
                throw new Exception("Responsable incorrecto");
               }               
        }else{
         throw new Exception("Nombre incorrecto");
        }        
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/Comercios/create_view.php");
?>