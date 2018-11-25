<?php
require_once("../app/models/producto.class.php");
try{
	if(isset($_GET['id'])){
		$producto = new Producto;
		if($producto->setId($_GET['id'])){
			if($producto->readProducto()){
				require_once("../app/views/public/producto/detalle_view.php");
			}else{
				throw new Exception("Directorio inexistente");
			}
		}else{
			throw new Exception("Directorio incorrecto");
		}
	}else{
		throw new Exception("Seleccione un directorio antes");
	}
}catch(Exception $error){
	Page::showMessage(3, $error->getMessage(), "index.php");
}
?>