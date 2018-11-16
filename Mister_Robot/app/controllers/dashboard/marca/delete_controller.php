<?php
require_once("../../app/models/marca.class.php");
try{
	if(isset($_GET['id'])){
		$Marca = new Marca;
		if($Marca->setId($_GET['id'])){
			if($Marca->readMarcas()){
				if(isset($_POST['eliminar'])){
					if($Marca->deleteMarcas()){
							Page::showMessage(1, "Marca eliminada", "index.php");
					}else{
						throw new Exception(Database::getException());
					}
				}
				
			}else{
				throw new Exception("Marca inexistente");
			}
		}else{
			throw new Exception("Marca incorrecta");
		}
	}else{
		Page::showMessage(3, "Seleccione Marca", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/Marca/delete_view.php");
?>