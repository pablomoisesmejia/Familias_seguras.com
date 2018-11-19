<?php
require_once("../../app/models/tipo_usuario.class.php");
try{
	$tipousuario = new Tipo_usuario;
	
		$data = $tipousuario->getTipo_usuarios();
	
	if($data){
		require_once("../../app/views/dashboard/permisos/index_view.php");
	}else{
		Page::showMessage(3, "No hay tipo usuario disponible", null);
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../permisos/");
}
?>