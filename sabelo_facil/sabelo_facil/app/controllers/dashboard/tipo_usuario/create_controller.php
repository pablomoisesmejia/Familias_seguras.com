<?php
require_once("../../app/models/Tipo_usuario.class.php");
try{
    $Tipo_usuario = new Tipo_usuario;
    if(isset($_POST['crear'])){
        $_POST = $Tipo_usuario->validateForm($_POST);
        if($Tipo_usuario->setNombre($_POST['nombre'])){
            
                if($Tipo_usuario->createTipo_usuarios()){
                    Page::showMessage(1, "Categoria creada", "index.php");
                }else{
                    throw new Exception(Database::getException());
                }  
                      
        }else{
            throw new Exception("Nombre incorrecto");
        }        
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/Tipo_usuario/create_view.php");
?>