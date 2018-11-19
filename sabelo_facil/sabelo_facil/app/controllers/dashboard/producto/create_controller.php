<?php
require_once("../../app/models/producto.class.php");
try{
    $producto = new Producto;
    if(isset($_POST['crear'])){
        $_POST = $producto->validateForm($_POST);
        if($producto->setNombre($_POST['nombre'])){
            if($producto->setPrecio($_POST['precio'])){
                if($producto->setDescripcion($_POST['descripcion'])){
                    if($producto->setCategoria($_POST['categoria'])){
                        if($producto->setMarca($_POST['marca'])){
                            if($producto->setProveedor($_POST['proveedor'])){
                                if($producto->setEstado(isset($_POST['estado'])?1:0)){
                                    if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                                        if($producto->setImagen($_FILES['archivo'])){
                                            if($producto->createProducto()){
                                                Page::showMessage(1, "Producto creado", "index.php");
                                            }else{
                                                if($producto->unsetImagen()){
                                                    throw new Exception(Database::getException());
                                                }else{
                                                    throw new Exception("Elimine la imagen manualmente");
                                                }
                                            }
                                        }else{
                                            throw new Exception($producto->getImageError());
                                        }
                                    }else{
                                        throw new Exception("Seleccione una imagen");
                                    }
                                }else{
                                    throw new Exception("Estado incorrecto");
                                }
                            }else{
                                throw new Exception("Seleccione un proveedor");
                            }
                        }else{
                            throw new Exception("Seleccione una marca");
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
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/producto/create_view.php");
?>