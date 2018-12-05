<?php
require_once("../../app/models/directorio.class.php");
try{
    if(isset($_GET['id'])){
        $producto = new producto;
        if($producto->setId($_GET['id'])){
            if($producto->readdirectorio()){
                if(isset($_POST['actualizar'])){
                    $_POST = $producto->validateForm($_POST);
                    if($producto->setNombre($_POST['nombres'])){
                        if($producto->setCategoria($_POST['categoria'])){
                            if($producto->setPlan($_POST['plan'])){
                                if($producto->setEstado(isset($_POST['estado'])?1:0)){
                                    if($producto->updatedirectorio()){
                                        Page::showMessage(1, "Directorio modificado", "index.php");
                                    }else{
                                        throw new Exception(Database::getException());
                                    }
                                }else{
                                    throw new Exception("Estado incorrecto");
                                }
                            }else{
                                throw new Exception("Plan incorrecto");
                            }
                        }else{
                            throw new Exception("Categoria incorrectaa");
                        }
                    }else{
                        throw new Exception("Nombre incorrecto");
                    }
                }
            }else{
                Page::showMessage(2, "Directorio inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Directorio incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione un directorio", "index.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/directorio/update_view.php");
?>