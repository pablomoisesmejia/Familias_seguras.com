<?php
require_once("../../app/models/cliente_prospectos.class.php");
try{
	$prospecto = new Cliente_Prospecto;
	if(isset($_POST['buscar'])){
		$_POST = $prospecto->validateForm($_POST);
		$data = $prospecto->searchPresentacion($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $prospecto->getPresentaciones();
		}
	}else{
		$data = $prospecto->getPresentaciones();
	}
	if($data){
		require_once("../../app/views/dashboard/empleado/index_view.php");
	}else{
		Page::showMessage(4, "No hay prospectos disponibles", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../presentacion/");
}
?>