<?php
require_once("../../app/models/autos.class.php");
try{
    if(isset($_GET['id'])){
        $producto = new producto;
        if($producto->setId($_GET['id'])){
            if($producto->readauto()){
                if(isset($_POST['actualizar'])){
                    $_POST = $producto->validateForm($_POST);
                    if($producto->setPlaca($_POST['placa'])){
                            if($producto->setModelo($_POST['modelo'])){
                                if($producto->setEstado(isset($_POST['estado'])?1:0)){
                                    if($producto->updateauto()){
                                        Page::showMessage(1, "Datos modificados", "index.php");
                                    }else{
                                        throw new Exception(Database::getException());
                                    }
                                }else{
                                    throw new Exception("Estado incorrecto");
                                }
                            }else{
                                throw new Exception("Modelo incorrecto");
                            }
                        }else{
                            throw new Exception("Placa incorrectaa");
                        }
                }
            }else{
                Page::showMessage(2, "Automovil inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Automovil incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione un automovil", "index.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/autos/update_view.php");
?>