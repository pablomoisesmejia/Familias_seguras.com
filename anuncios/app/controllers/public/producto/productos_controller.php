<?php
require_once("../../../models/database.class.php");
require_once("../../../helpers/validator.class.php");
require_once("../../../models/producto.class.php");
try{
	$producto = new Producto;
	$anuncios = '';
	$filtro = '';
	$ordenar = '';


	if($producto->setCategoria($_GET['id']))
	{
		$anuncios = $producto->getCategoriaProductos();
		echo json_encode($anuncios);
	}
}
catch(Exception $error){
	echo json_encode($error->getMessage());
}
?>