<?php
require_once("../../app/models/usuarios.class.php");
try{

	$object = new Usuarios;
	if($object->getEmpleados()){
		if(isset($_POST['iniciar'])){
			$_POST = $object->validateForm($_POST);
			if($object->setUsuario($_POST['nombre_usuario'])){
				$_SESSION['usuario_d'] = $object->getUsuario();
				if($object->checkUsuarios()){
					//if($object->checkPermisos()){
						if($object->setClave($_POST['contrasena'])){
							if($object->checkContrasena()){
								$_SESSION['id_usuario_d'] = $object->getIdUsuario(); //Obtiene el id_empleado para usarlo luego en la pagina template								
                                Page::showMessage(1, "Autenticación correcta", "index.php");
							}else{

                            }
						}else{
							throw new Exception("La clave debe tener al menos 8 dígitos");
						}
					/*}else{
						throw new Exception("Permiso incorrecto");
					}*/
				}else{
					throw new Exception("Usuario incorrecto");
				}
			}else{
				throw new Exception("Nombre de usuario incorrecto");
			}
		}
	}else{
		Page::showMessage(3, "No hay usuarios disponibles", "register.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/empleado/login_view.php");
?>