<?php
require_once("../../app/models/usuario.class.php");
try{
	$object = new Usuario;
	if($object->getUsuarios()){
		if(isset($_POST['iniciar'])){
			$_POST = $object->validateForm($_POST);
			if($object->setAlias($_POST['alias'])){
				if($object->checkCorreo()){
					if($object->setClave($_POST['clave'])){
						if($object->checkPassword()){
							$_SESSION['id_usuario'] = $object->getId();
							echo $object->getId();
							$_SESSION['nombres_usuario'] = $object->getAlias();
							$_SESSION['nombres_usuario'] = $object->getNombres();
							$_SESSION['apellidos_usuario'] = $object->getApellidos();
							$_SESSION['correo_usuario'] = $object->getCorreo();
							$_SESSION['imagen'] = $object->getImagen();
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