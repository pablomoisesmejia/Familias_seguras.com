<?php
require_once("../../app/models/propiedades.class.php");
try{
	$producto = new producto;
	if(isset($_POST['buscar'])){
		$_POST = $producto->validateForm($_POST);
		$data = $producto->searchproducto($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			
			$data = $producto->getPropiedadesII();
		}
	}else{
		
		$data = $producto->getPropiedadesII();
	}
	if($data){
		require_once("../../app/views/dashboard/alquiler/index_view.php");
	}else{
		Page::showMessage(3, "No hay propiedades aun disponibles, espera que empiecen a anunciarse", "../account/index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}
?>