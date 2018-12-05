<?php
require_once("../../app/models/cliente.class.php");
try{
	$cliente = new cliente;
	if(isset($_POST['buscar'])){
		$_POST = $cliente->validateForm($_POST);
		$data = $cliente->searchcliente($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $cliente->getclientes();
		}
	}else{
		$data = $cliente->getclientes();
	}
	if($data){
		require_once("../../app/views/dashboard/cliente/index_view.php");
	}else{
		Page::showMessage(3, "No hay clientes disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}
?>