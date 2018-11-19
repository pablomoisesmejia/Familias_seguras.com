<?php
require_once("../../app/models/usuario.class.php");
require_once("../../app/libraries/GoogleAuthenticator-master/PHPGangsta/GoogleAuthenticator.php");
try{
	if (!isset($_SESSION['intentos_admin'])) {
		
		$_SESSION['intentos_admin'] = 0; 
		
	}
	$ga = new GoogleAuthenticator();

	$llave = $ga->createSecret();  //esta funcion crea la llave unica de autenticacion
	
	$object = new Usuario;
	if($object->getUsuarios()){
		if(isset($_SESSION['ID_admin'])){
			Page::showMessage(4, "Usuario en sesion existente", "index.php");
		}else{
			if(isset($_POST['iniciar'])){

				

				if($_SESSION['intentos_admin'] < 3){
					$_POST = $object->validateForm($_POST);
				if($object->setAlias($_POST['alias'])){
					if($object->checkAlias()){

						if($object->checkfecha_bloqueo()){
							$fechablo = $object->getFecha_bloqueo();

							if($fechablo >=1){
								if($object->setClave2($_POST['clave'])){
									if($object->checkPassword()){
										if($object->checkfecha_contrasena()){
		
											$fecha_cambio = $object->getFecha_contrasena();
		
											if($fecha_cambio >= 90){
												$_SESSION['ID_admin'] = $object->getId();
												$_SESSION['username'] = $object->getAlias();
												$_SESSION['imagen_url'] = $object->getImagen();
												$_SESSION['nombre'] = $object->getNombres();
												$_SESSION['apellido'] = $object->getApellidos();
												$_SESSION['fechanac'] = $object->getFechaNac();
												$_SESSION['correo'] = $object->getCorreo();
												$_SESSION['direccion'] = $object->getDireccion();
												$_SESSION['documento'] = $object->getDocumento();
												$_SESSION['ID_tipousuario']= $object->getTipousuario();
												$_SESSION['nombre_tipousuario'] = $object->getNombre_tipo_usuario();
												Page::showMessage(1, "Contraseña antigua Porfavor realize un cambio a continuacion $fecha_cambio", "password.php");
												
											}else if ($fecha_cambio < 90){

												$_SESSION['ID_admin_oculto'] = $object->getId();
		
												$_SESSION['username'] = $object->getAlias();
												$_SESSION['imagen_url'] = $object->getImagen();
												$_SESSION['nombre'] = $object->getNombres();
												$_SESSION['apellido'] = $object->getApellidos();
												$_SESSION['fechanac'] = $object->getFechaNac();
												$_SESSION['correo'] = $object->getCorreo();
												$_SESSION['direccion'] = $object->getDireccion();
												$_SESSION['documento'] = $object->getDocumento();
												$_SESSION['ID_tipousuario']= $object->getTipousuario();
												$_SESSION['nombre_tipousuario'] = $object->getNombre_tipo_usuario();


												if($object->setCodigo_auth($llave)){
													if($object->update_clave_google()){
														Page::showMessage(1, "Completa la segunda parte de la autenticacion  ", "verificacion2.php");
													}else{
														Page::showMessage(1,"ocurrio un error en actualizar la llave ", null);
													}
												}else{
													Page::showMessage(1,"ocurrio un error con el seteo ", null);
												}
											}
										}else{
											throw new Exception("Error en la fecha");
										}
									}else{

										$_SESSION['intentos_admin'] += 1;
										throw new Exception("Clave inexistente");
									}
								}else{
									throw new Exception("Clave menor a 8 caracteres recuerda que debe contener una Mayus. un numero y caracter especial");
								}

							}else if ($fechablo <1){
								throw new Exception("Tu cuenta ha sido bloqueada Temporalmente intenta en unas horas  ( $fechablo ) ");
							}
						}else{

						}

						
					}else{
						throw new Exception("Alias inexistente");
					}
				}else{
					throw new Exception("Alias incorrecto");
				}
				}else if ($_SESSION['intentos_admin'] >=3){

			if($object->setAlias($_POST['alias'])){

				if($object->checkAlias()){
					$_SESSION['intentos_admin'] = 0; 
					$object->changefecha_blo();
					Page::showMessage(3, "Su cuenta ha sido Bloqueada por 24 horas  ", "login.php");
				}else{
					Page::showMessage(2, "Correo inexistente", "login.php");
				}
			}else{
				throw new Exception("correo incorrecto");
			}
		}

				
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