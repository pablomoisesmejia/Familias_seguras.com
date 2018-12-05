<?php
require_once("../../app/models/autos.class.php");
try{
	$producto = new Producto;
	if(isset($_POST['buscar'])){
		$_POST = $prodcuto->validateForm($_POST);
		$data = $producto->searchproducto($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$producto->setId($_SESSION['id_usuario']);
			$data = $producto->getDirectorio();
		}
	}else{
		$producto->setId($_SESSION['id_usuario']);
		$data = $producto->getAutos();
	}
	if($data){
		require_once("../../app/views/dashboard/autos/index_view.php");
	}else{
		Page::showMessage(3, "No hay puestos en el directorio aun, espera que empiecen a cotizar", "../account/index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}
?>