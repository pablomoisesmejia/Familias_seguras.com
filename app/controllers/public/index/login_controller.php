<?php
require_once("../../app/models/usuarios.class.php");
try{
	$object = new Usuarios;
		if(isset($_POST['iniciar'])){
			$_POST = $object->validateForm($_POST);
			if($object->setCorreo($_POST['email'])){
				if($object->checkUsuarios($_POST['email'])){
					//if($object->checkPermisos()){
						if($object->setClave($_POST['pass'])){
							if($object->checkContrasena($_POST['pass'])){
								$_SESSION['tipo_team_p'] = $object->getIdTipoTeam();
                                $_SESSION['id_usuario_p'] = $object->getIdUsuario();
								Page::showMessage(1, "Autenticación correcta", "contratacion.php");					
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
require_once("../../app/views/public/index/login_view.php");
?>