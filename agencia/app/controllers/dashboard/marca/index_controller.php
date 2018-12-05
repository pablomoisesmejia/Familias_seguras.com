<?php
require_once("../../app/models/marca.class.php");
try{
	$Marca = new Marca;
	if(isset($_POST['buscar'])){
		$_POST = $Marca->validateForm($_POST);
		$data = $Marca->searchMarcas($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $Marca->getMarcas();
		}
	}else{
		$data = $Marca->getMarcas();
	}
	if($data){
		require_once("../../app/views/dashboard/marca/index_view.php");
	}else{
		Page::showMessage(3, "No hay marcas disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}
?>