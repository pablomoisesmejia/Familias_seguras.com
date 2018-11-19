<?php
require_once("../../app/models/comercios.class.php");
try{
    if(isset($_GET['id'])){
        $Comercios = new Comercios;
        if($Comercios->setId($_GET['id'])){
            if($Comercios->readComercio()){
                if(isset($_POST['actualizar'])){
                    $_POST = $Comercios->validateForm($_POST);
                    if($Comercios->setNombre($_POST['nombres'])){
                        if($Comercios->setResponsable($_POST['responsable'])){
                                if($Comercios->setCorreo($_POST['correo'])){
                                    if($Comercios->setTelefono($_POST['telefono'])){
                                        if($Comercios->setEstado($_POST['Estados']))
                                        {
                                            if($Comercios->updateComercio()){
                                            Page::showMessage(1, "Comercio modificada exitosamente", "index.php");
                                            
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

            }else{
                Page::showMessage(2, "Comercio inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Comercio incorrecto", "index.php");
        }        
    }else{
        Page::showMessage(3, "Seleccione Comercio", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/comercios/update_view.php");
?>