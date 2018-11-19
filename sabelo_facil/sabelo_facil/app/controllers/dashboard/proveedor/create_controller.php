<?php
require_once("../../app/models/proveedor.class.php");
try{
    $Proveedor = new Proveedor;
    if(isset($_POST['crear'])){
        $_POST = $Proveedor->validateForm($_POST);
        if($Proveedor->setNombre($_POST['nombre'])){
            if($Proveedor->setCorreo($_POST['correo'])){
                if($Proveedor->setTelefono($_POST['telefono'])){
                    if($Proveedor->setDireccion($_POST['direccion'])){
                        if($Proveedor->setEstado(isset($_POST['estado'])?1:0)){
                        if($Proveedor->createProveedor()){
                            Page::showMessage(1, "Proveedor creado", "index.php");
                        }else{
                            throw new Exception(Database::getException());
                        }
                    }else {
                        throw new Exception("Direccion incorrecta");
                    }
                }else {
                    throw new Exception("Estado incorrecto");
                }
                }else{
                    throw new Exception("Telefono incorrecto");
                }
            }else{
                throw new Exception("Correo incorrecto");
            }            
        }else{
            throw new Exception("Nombre incorrecto");
        }        
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/proveedor/create_view.php");
?>