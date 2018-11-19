<?php
require_once("../../app/models/materia.class.php");
try{
    $Materia = new Materia;
    if(isset($_POST['crear'])){
        $_POST = $Materia->validateForm($_POST);
        if($Materia->setNombre($_POST['nombre'])){
            if($Materia->setDescripcion($_POST['descripcion'])){
                if($Materia->setEstado(isset($_POST['estado'])?1:0)){
                if($Materia->createMaterias()){
                    Page::showMessage(1, "Matería creada", "index.php");
                }else{
                    throw new Exception(Database::getException());
                }  
            }else{
                throw new Exception("Estado incorrecto");
            }
            }else{
                throw new Exception("Descripcion incorrecta");
            }            
        }else{
            throw new Exception("Nombre incorrecto");
        }        
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/materia/create_view.php");
?>