<?php
require_once("../app/models/cliente_prospectos.class.php");
try{
	$prospecto = new Cliente_Prospecto;
	if(isset($_POST['buscar'])){
		$_POST = $prospecto->validateForm($_POST);
		$data = $prospecto->searchProspecto($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $prospecto->getClientesProspectosTodo();
		}
	}else{
		$data = $prospecto->getClientesProspectosTodo();
	}    

    if($data){
		require_once("../app/views/dashboard/empleado/index_view.php");
	}else{
		require_once("../app/views/dashboard/empleado/index_view.php");
    }
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../empleado/");
}
?>