<?php
require_once("../../app/models/producto.class.php");
require_once("../../app/models/categoria.class.php");
try{
	$producto = new Producto;
	$categoria = new Categoria;
	$categorias = $categoria->getCategorias();
	$productos = $producto->getProductos();


	if($productos)
	{
		require_once("../../app/views/public/producto/categorias_view.php");
	}
	else
	{
		Page::showMessage(3, "No hay categorías disponibles", null);
	}
	
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
?>