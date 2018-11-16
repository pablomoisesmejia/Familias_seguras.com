<?php
require_once("../../app/models/usuario.class.php");
try{
	$object = new Usuario;
	if($object->getUsuarios()){
		if(isset($_POST['iniciar'])){
			$_POST = $object->validateForm($_POST);
			if($object->setCorreo($_POST['correo'])){
				if($object->checkCorreo()){
					if($object->setClave($_POST['clave'])){
						if($object->checkPassword()){
							$_SESSION['PK_id_usuario'] = $object->getId();
							$_SESSION['nombres'] = $object->getAlias();
							$_SESSION['nombres'] = $object->getNombres();
							$_SESSION['apellidos'] = $object->getApellidos();
							$_SESSION['correo'] = $object->getCorreo();
							$_SESSION['direccion'] = $object->getDireccion();
							
							Page::showMessage(1, "Autenticación correcta", "index.php");
						}else{
							throw new Exception("Clave inexistente");
						}
					}else{
						throw new Exception("Clave menor a 8 caracteres");
					}
				}else{
					throw new Exception("Alias inexistente");
				}
			}else{
				throw new Exception("Alias incorrecto");
			}
		}
	}else{
		Page::showMessage(3, "No hay usuarios disponibles", "register.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/account/login_view.php");
?>