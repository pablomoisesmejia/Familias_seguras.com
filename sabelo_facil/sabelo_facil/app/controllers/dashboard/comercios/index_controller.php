<?php
require_once("../../app/models/comercios.class.php");
try{
	$comercio = new Comercios;
	if(isset($_POST['buscar'])){
		$_POST = $comercio->validateForm($_POST);
		$data = $comercio->searchComercio($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resultados", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $comercio->getComercios();
		}
	}else{
		$data = $comercio->getComercios();
	}
	if($data){
		require_once("../../app/views/dashboard/comercios/index_view.php");
	}else{
		Page::showMessage(3, "No hay comercios disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../comercios/");
}
?>