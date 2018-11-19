<?php
require_once("../../app/models/Tipo_usuario.class.php");
try{
    if(isset($_GET['id'])){
        $Tipo_usuario = new Tipo_usuario;
        if($Tipo_usuario->setId($_GET['id'])){
            if($Tipo_usuario->readTipo_usuarios()){
                if(isset($_POST['actualizar'])){
                    $_POST = $Tipo_usuario->validateForm($_POST);
                    if($Tipo_usuario->setNombre($_POST['nombre'])){
                        
                            if($Tipo_usuario->updateTipo_usuarios()){
                                Page::showMessage(1, "Categoria modificada", "index.php");
                            }else{
                                if($Tipo_usuario->unsetImagen()){
                                    throw new Exception(Database::getException());
                                }else{
                                    throw new Exception("Elimine la imagen manualmente");
                                }
                            }
                                            
                    }else{
                        throw new Exception("Nombre incorrecto");
                    }                    
                }
            }else{
                Page::showMessage(2, "Categoria inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Categoria incorrecta", "index.php");
        }        
    }else{
        Page::showMessage(3, "Seleccione Categoria", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/Tipo_usuario/update_view.php");
?>