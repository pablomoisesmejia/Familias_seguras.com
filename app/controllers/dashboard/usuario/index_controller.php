<?php
require_once("../../app/models/cliente_prospectos.class.php");
require_once("../../app/models/primas.class.php");
try{
	$prospecto = new Cliente_Prospecto;
	$prima = new Primas;
	if(isset($_POST['buscar'])){
		$_POST = $prospecto->validateForm($_POST);
		$data = $prospecto->searchProspecto($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $prospecto->getClientesProspectos2();
		}
	}else{
		$data = $prospecto->getClientesProspectos2();
	}    


    if(isset($_POST['buscar2'])){
		$_POST = $prospecto->validateForm($_POST);
		$data2 = $prospecto->searchProspecto2($_POST['busqueda2']);
		if($data2){
			$rows = count($data2);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data2 = $prospecto->getClientesProspectos3();
		}
	}else{
		$data2 = $prospecto->getClientesProspectos3();
    }
    

	if(isset($_POST['buscar3'])){
		$_POST = $prima->validateForm($_POST);
		$data3 = $prima->searchPrima($_POST['busqueda3']);
		if($data3){
			$rows = count($data3);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data3 = $prima->getPrimas();
		}
	}else{
		$data3 = $prima->getPrimas();
    }


    if($data){
		require_once("../../app/views/dashboard/empleado/index_view.php");
	}else{
		require_once("../../app/views/dashboard/empleado/index_view.php");
    }
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../empleado/");
}
?>