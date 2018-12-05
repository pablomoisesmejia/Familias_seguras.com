<?php
require_once("../../app/models/modelo.class.php");
try{
	$Marca = new Marca;
	if(isset($_POST['buscar'])){
		$_POST = $Marca->validateForm($_POST);
		$data = $Marca->searchModelos($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $Marca->getMarcas();
		}
	}else{
		$data = $Marca->getModelos();
	}
	if($data){
		require_once("../../app/views/dashboard/modelo/index_view.php");
	}else{
		Page::showMessage(3, "No hay modelos disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}
?>