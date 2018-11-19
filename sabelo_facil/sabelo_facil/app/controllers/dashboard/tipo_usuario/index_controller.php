<?php
require_once("../../app/models/Tipo_usuario.class.php");
try{
	$Tipo_usuario = new Tipo_usuario;
	if(isset($_POST['buscar'])){
		$_POST = $Tipo_usuario->validateForm($_POST);
		$data = $Tipo_usuario->searchTipo_usuarios($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resultados", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $Tipo_usuario->getTipo_usuarios();
		}
	}else{
		$data = $Tipo_usuario->getTipo_usuarios();
	}
	if($data){
		require_once("../../app/views/dashboard/Tipo_usuario/index_view.php");
	}else{
		Page::showMessage(3, "No hay categorias de usuarios disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}
?>