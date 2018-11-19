<?php
require_once("../../app/models/comercios.class.php");
try{
	if(isset($_GET['id'])){
		$comercios = new Comercios;
		if($comercios->setId($_GET['id'])){
			if($comercios->readComercio()){
				if(isset($_POST['eliminar'])){
					if($comercios->deleteComercio()){
						if($comercios->unsetImagen()){
							Page::showMessage(1, "Comercio eliminada", "index.php");
						}else{
							throw new Exception("No se eliminó el archivo de la imagen");
						}
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Comercio inexistente");
			}
		}else{
			throw new Exception("Comercio incorrecta");
		}
	}else{
		Page::showMessage(3, "Seleccione comercio", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/comercios/delete_view.php");
?>