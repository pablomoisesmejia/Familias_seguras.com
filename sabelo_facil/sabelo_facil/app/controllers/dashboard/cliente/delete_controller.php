<?php
require_once("../../app/models/cliente.class.php");
try{
	if(isset($_GET['id'])){
		
			$cliente = new cliente;
			if($cliente->setId($_GET['id'])){
				if($cliente->readcliente()){
					if(isset($_POST['eliminar'])){
						if($cliente->deletecliente()){
							Page::showMessage(1, "cliente eliminado", "index.php");
						}else{
							throw new Exception(Database::getException());
						}
					}
				}else{
					throw new Exception("cliente inexistente");
				}
			}else{
				throw new Exception("cliente incorrecto");
			}
		
	}else{
		Page::showMessage(3, "Seleccione cliente", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/cliente/delete_view.php");
?>