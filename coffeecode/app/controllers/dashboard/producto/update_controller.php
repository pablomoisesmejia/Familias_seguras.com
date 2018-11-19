<?php
require_once("../../app/models/producto.class.php");
try{
    if(isset($_GET['id'])){
        $producto = new Producto;
        if($producto->setId($_GET['id'])){
            if($producto->readProducto()){
                if(isset($_POST['actualizar'])){
                    $_POST = $producto->validateForm($_POST);
                    if($producto->setNombre($_POST['nombre'])){
                        if($producto->setPrecio($_POST['precio'])){
                            if($producto->setDescripcion($_POST['descripcion'])){
                                if($producto->setCategoria($_POST['categoria'])){
                                    if($producto->setEstado(isset($_POST['estado'])?1:0)){
                                        if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                                            if(!$producto->setImagen($_FILES['archivo'])){
                                                throw new Exception($producto->getImageError());
                                            }
                                        }
                                        if($producto->updateProducto()){
                                            Page::showMessage(1, "Producto modificado", "index.php");
                                        }else{
                                            throw new Exception(Database::getException());
                                        }
                                    }else{
                                        throw new Exception("Estado incorrecto");
                                    }
                                }else{
                                    throw new Exception("Seleccione una categoría");
                                }
                            }else{
                                throw new Exception("Descripción incorrecta");
                            }
                        }else{
                            throw new Exception("Precio incorrecto");
                        }
                    }else{
                        throw new Exception("Nombre incorrecto");
                    }
                }
            }else{
                Page::showMessage(2, "Producto inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Producto incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione producto", "index.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/producto/update_view.php");
?>