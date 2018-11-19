<?php
require_once("../../app/models/materia.class.php");
try{
	if(isset($_GET['id'])){
		$Materia = new Materia;
		if($Materia->setId($_GET['id'])){
			if($Materia->readMaterias()){
				if(isset($_POST['eliminar'])){
					if($Materia->deleteMaterias()){
							Page::showMessage(1, "Materia eliminada", "index.php");
					}else{
						throw new Exception(Database::getException());
					}
				}
				
			}else{
				throw new Exception("Materia inexistente");
			}
		}else{
			throw new Exception("Materia incorrecta");
		}
	}else{
		Page::showMessage(3, "Seleccione Materia", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/materia/delete_view.php");
?>