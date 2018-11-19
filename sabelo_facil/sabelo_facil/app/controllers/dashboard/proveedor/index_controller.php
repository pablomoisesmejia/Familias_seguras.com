<?php
require_once("../../app/models/proveedor.class.php");
try{
	$Proveedor = new Proveedor;
	if(isset($_POST['buscar'])){
		$_POST = $Proveedor->validateForm($_POST);
		$data = $Proveedor->searchProveedor($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resultados", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $Proveedor->getProveedor();
		}
	}else{
		$data = $Proveedor->getProveedor();
	}
	if($data){
		require_once("../../app/views/dashboard/proveedor/index_view.php");
	}else{
		Page::showMessage(4, "No hay proveedores disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}
?>