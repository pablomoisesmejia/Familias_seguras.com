<?php
require_once("../../app/models/producto.class.php");
try{
	$producto = new Producto;

	
	$data = $producto->getProductos();
	if($data){
		require_once("../../app/views/dashboard/producto/index_view.php");
	}else{
		Page::showMessage(4, "No tienes anuncios disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}
?>