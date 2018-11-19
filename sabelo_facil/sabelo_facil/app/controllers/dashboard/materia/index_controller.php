<?php
require_once("../../app/models/materia.class.php");
try{
	$Materia = new Materia;
	if(isset($_POST['buscar'])){
		$_POST = $Materia->validateForm($_POST);
		$data = $Materia->searchMaterias($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resultados", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $Materia->getMaterias();
		}
	}else{
		$data = $Materia->getMaterias();
	}
	if($data){
		require_once("../../app/views/dashboard/materia/index_view.php");
	}else{
		Page::showMessage(3, "No hay materías disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}
?>