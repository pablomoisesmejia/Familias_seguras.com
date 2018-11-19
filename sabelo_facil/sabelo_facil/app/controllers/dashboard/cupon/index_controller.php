<?php
require_once("../../app/models/cupon.class.php");
try{
	$cupon = new Cupon;
	if(isset($_POST['buscar'])){
		$_POST = $cupon->validateForm($_POST);
		$data = $cupon->searchProducto($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resultados", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $cupon->getCupones();
		}
	}else{
		$data = $cupon->getCupones();
	}
	if($data){
		require_once("../../app/views/dashboard/cupon/index_view.php");
	}else{
		Page::showMessage(4, "No hay cupones disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}
?>