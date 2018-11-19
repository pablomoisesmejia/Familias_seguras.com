<?php
require_once("../../app/models/cupon.class.php");
try{
    $cupon = new Cupon;
    if(isset($_POST['crear'])){
        $_POST = $cupon->validateForm($_POST);
        if($cupon->setNombre($_POST['nombre'])){
            if($cupon->setPrecio($_POST['precio'])){
                if($cupon->setDescripcion($_POST['descripcion'])){
                    if($cupon->setCategoria($_POST['categoria'])){
                        if($cupon->setComercio($_POST['comercio'])){
                            if($cupon->setExistencia($_POST['existencia'])){
                                if($cupon->setFechainicio($_POST['fecha_inicio'])){
                                    if($cupon->setFechafinal($_POST['fecha_final'])){
                                        if($cupon->setEstado(isset($_POST['estado'])?1:0)){
                                            if($cupon->setLimite(isset($_POST['limite'])?1:0)){
                                                if($cupon->createCupon()){
                                                Page::showMessage(1, "Cupon creado", "index.php");
                                                }else{
                                                    throw new Exception("cupon no creado intente de nuevo");
                                                }
                                            }else{
                                                throw new Exception("limite incorrecto");
                                            }
                                        }else{
                                            throw new Exception("Estado incorrecto");
                                        }
                                    }else{
                                        throw new Exception("Coloque una fecha valida");
                                    }
                                }else{
                                    throw new Exception("Coloque una fecha valida");
                                }
                            }else{
                                throw new Exception("Coloque una existencia");
                            }
                        }else{
                            throw new Exception("Seleccione un Comercio");
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
require_once("../../app/views/dashboard/cupon/create_view.php");
?>