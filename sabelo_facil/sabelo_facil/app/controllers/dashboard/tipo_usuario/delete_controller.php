<?php
require_once("../../app/models/Tipo_usuario.class.php");
try{
	if(isset($_GET['id'])){
		$Tipo_usuario = new Tipo_usuario;
		if($Tipo_usuario->setId($_GET['id'])){
			if($Tipo_usuario->readTipo_usuarios()){
				if(isset($_POST['eliminar'])){
					if($Tipo_usuario->deleteTipo_usuarios()){
							Page::showMessage(1, "Tipo_usuario eliminada", "index.php");
					}else{
						throw new Exception(Database::getException());
					}
				}
				
			}else{
				throw new Exception("Tipo de usuario inexistente");
			}
		}else{
			throw new Exception("Tipo de usuario incorrecta");
		}
	}else{
		Page::showMessage(3, "Seleccione Tipo de usuario", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/Tipo_usuario/delete_view.php");
?>