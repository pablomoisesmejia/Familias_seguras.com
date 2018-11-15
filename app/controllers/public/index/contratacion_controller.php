<?php
require_once("../../app/models/contrataciones.class.php");
require_once("../../app/models/usuarios.class.php");
try{
    $contratacion = new Contrataciones;
    $usuarios = new Usuarios;
    if(isset($_POST['crear'])){ //El controlador funcionara con el modelo que se llame asi
        $_POST = $contratacion->validateForm($_POST);
        if($contratacion->setIdUsuario($_SESSION['id_usuario_p'])){
            if($contratacion->setEstadoCivil($_POST['estado'])){
                if($contratacion->setProfesion($_POST['profesion'])){ //Crea una presentacion
                    if($contratacion->setLugarTrabajo($_POST['lugar'])){ //Crea una presentacion
                        if($contratacion->setCargo($_POST['cargo'])){ //Crea una presentacion
                            if($contratacion->setDireccion($_POST['direccion'])){ //Crea una presentacion
                                if($contratacion->setDepartamento($_POST['departamento'])){ //Crea una presentacion
                                    if($contratacion->setMunicipio($_POST['municipio'])){ //Crea una presentacion
                                        if($contratacion->setTelefono($_POST['telefono'])){ //Crea una presentacion
                                            if($contratacion->setIngresos($_POST['ingresos'])){ //Crea una presentacion
                                                if($contratacion->createContratacion($_POST['ingresos'])){ //Crea una presentacion
                                                    $usuarios->updateTeam($_SESSION['id_usuario_p']);
                                                    Page::showMessage(1, "Contratación realizada", "index.php");
                                                }else{
                                                    throw new Exception(Database::getException());        
                                                }
                                            }else{
                                                throw new Exception("Ingresos incorrectos");        
                                            }
                                        }else{
                                            throw new Exception("Teléfono incorrecto");        
                                        }
                                    }else{
                                        throw new Exception("Municipio incorrecto");        
                                    }
                                }else{
                                    throw new Exception("Departamento incorrecto");        
                                }
                            }else{
                                throw new Exception("Dirección incorrecta");        
                            }
                        }else{
                            throw new Exception("Cargo incorrecto");        
                        }
                    }else{
                        throw new Exception("Lugar de trabajo incorrecto");        
                    }
                }else{
                    throw new Exception("Profesión incorrecta");        
                }
            }else{
                throw new Exception("Estado civil incorrecto");
            } 
        }else{
            throw new Exception("Usuario incorrect");
        }
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/public/index/contratacion_view.php");
?>