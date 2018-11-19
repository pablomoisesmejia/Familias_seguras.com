<?php
require_once("../../app/models/materia.class.php");
try{
    if(isset($_GET['id'])){
        $Materia = new Materia;
        if($Materia->setId($_GET['id'])){
            if($Materia->readMaterias()){
                if(isset($_POST['actualizar'])){
                    $_POST = $Materia->validateForm($_POST);
                    if($Materia->setNombre($_POST['nombre'])){
                        if($Materia->setDescripcion($_POST['descripcion'])){
                            if($Materia->setEstado( isset($_POST['estado'])?1:0)){
                            if($Materia->updateMaterias()){
                                Page::showMessage(1, "Matería modificada", "index.php");
                            }else{
                                if($Materia->unsetImagen()){
                                    throw new Exception(Database::getException());
                                }else{            
                                    throw new Exception("Elimine la imagen manualmente");
                                }
                            }
                        }else{
                            throw new Exception("Estado incorrecto");
                        }
                        }else {
                            throw new Exception("Descripcion incorrecta");
                        }                        
                    }else{
                        throw new Exception("Nombre incorrecto");
                    }                    
                }
            }else{
                Page::showMessage(2, "Matería inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Matería incorrecta", "index.php");
        }        
    }else{
        Page::showMessage(3, "Seleccione Matería", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/materia/update_view.php");
?>