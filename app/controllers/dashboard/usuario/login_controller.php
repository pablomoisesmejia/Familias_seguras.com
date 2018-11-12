<?php
require_once("../../app/models/usuarios.class.php");
require_once("../../app/models/empleados.class.php");
try{
	$object = new Usuarios;
	$object2 = new Empleados;
		if(isset($_POST['iniciar'])){
			$_POST = $object->validateForm($_POST);
			if($object->setCorreo($_POST['email'])){
				$_SESSION['usuario_d'] = $object->getUsuario();
				if($object2->checkUsuarios($object->getCorreo())){
					//if($object->checkPermisos()){
						if($object->setClave($_POST['pass'])){
							if($object2->checkContrasena($object->getClave())){
								$_SESSION['id_empleado_d'] = $object2->getIdEmpleado(); //Obtiene el id_empleado para usarlo luego en la pagina template
								$_SESSION['tipo_team_d'] = $object2->getTipo();
								if($_SESSION['tipo_team_d'] == 'FamiliasSeguras.com'){
									Page::showMessage(1, "Autenticación correcta", "index.php");
								}						
							}else{
								throw new Exception("Contraseña incorrecta");
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
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/empleado/login_view.php");
?>