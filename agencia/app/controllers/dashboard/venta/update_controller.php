<?php
require_once("../../app/models/propiedades.class.php");
try{
    if(isset($_GET['id'])){
        $producto = new producto;
        if($producto->setId($_GET['id'])){
            if($producto->readpropiedad()){
                if(isset($_POST['actualizar'])){
                    $_POST = $producto->validateForm($_POST);
                    if($producto->setDepartamento($_POST['departamento'])){
                        if($producto->setColonia($_POST['colonia'])){
                            if($producto->setPrecio($_POST['precio'])){
                                 if($producto->setTipo($_POST['tipo'])){
                                     if($producto->setEstado(isset($_POST['estado'])?1:0)){
                                        if($producto->updatepropiedad()){
                                            Page::showMessage(1, "Datos modificados", "index.php");
                                        }else{
                                            throw new Exception(Database::getException());
                                        }
                                    }else{
                                        throw new Exception("Estado incorrecto");
                                    }
                                }else{
                                    throw new Exception("Tipo de propiedad incorrecto");
                                }
                            }else{
                                throw new Exception("Precio incorrecto");
                            }
                        }else{
                            throw new Exception("Colonia incorrecta");
                        }
                    }else{
                        throw new Exception("departamento incorrecto");
                    }
                }
            }else{
                Page::showMessage(2, "Propiedad inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Propiedad incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione una propiedad", "index.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/venta/update_view.php");
?>