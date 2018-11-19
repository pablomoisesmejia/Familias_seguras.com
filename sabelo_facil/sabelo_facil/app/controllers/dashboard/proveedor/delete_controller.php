<?php
require_once("../../app/models/proveedor.class.php");
try{
	if(isset($_GET['id'])){
		$Proveedor = new Proveedor;
		if($Proveedor->setId($_GET['id'])){
			if($Proveedor->readProveedor()){
				if(isset($_POST['eliminar'])){
					if($Proveedor->deleteProveedor()){
						Page::showMessage(1, "Proveedor eliminado", "index.php");
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Proveedor inexistente");
			}	
		}else{
			throw new Exception("Proveedor incorrecto");
		}
	}else{
		Page::showMessage(3, "Seleccione proveedor", "index.php");
	}
}catch (Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/proveedor/delete_view.php");
?>