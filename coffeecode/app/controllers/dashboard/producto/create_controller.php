<?php
require_once("../../app/models/producto.class.php");
try{
    $producto = new Producto;
    if(isset($_POST['crear'])){
        $_POST = $producto->validateForm($_POST);
        $producto->setId_usuario($_SESSION['id_usuario']);
        if($producto->setNombre($_POST['nombre'])){
                if($producto->setDireccion($_POST['descripcion'])){
                    if($producto->setCategoria($_POST['categoria'])){

                        if($producto->createProducto()){
                            Page::showMessage(1, "Producto creado", "index.php");
                        }
                    }else{
                        throw new Exception("Seleccione una categoría");
                    }
                }else{
                    throw new Exception("Direccion incorrecta");
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