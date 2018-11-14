<?php
require_once("../../app/models/cuadro_comparativo.class.php");
require_once("../../app/models/solicitudes.class.php");
try{

    date_default_timezone_set('America/El_Salvador');
    $fecha = date('Y-m-d');
    $hora = date('H:i:s');

    $cuadro = new Cuadro_Comparativo;
    $solicitud = new Solicitudes;
    if(isset($_GET['id']) && isset($_GET['id2']) && isset($_GET['id3'])){
        if(isset($_POST['crear'])){ //El controlador funcionara con el modelo que se llame asi
            $num = $cuadro->getNumCompanias($_GET['id3']);
                $n = $num['n'];
                for($i = 1;$i <= $n;$i++){
                    if($_GET['id2'] == 2){
                        $_POST = $cuadro->validateForm($_POST);
                        if($cuadro->setIdAseguradora($_POST['aseguradora'])){
                            if($cuadro->setPlan($_POST['plan'])){
                                if($cuadro->setOferta($_POST['oferta'])){
                                    if($cuadro->setIdClienteProspecto($_GET['id3'])){
                                        if($cuadro->setValorRecuperacion50($_POST['recup50'])){
                                            if($cuadro->setValorRecuperacion60($_POST['recup60'])){
                                                if($cuadro->setValorRecuperacion70($_POST['recup70'])){
                                                    if($cuadro->createCuadro()){ //Crea una presentacion
                                                        $solicitud->updateEstado($fecha, $hora, $_GET['id']);
                                                        Page::showMessage(1, "Cuadro creado", "index.php");
                                                    }else{
                                                        throw new Exception(Database::getException());        
                                                    }
                                                }else{
                                                    throw new Exception("Recuperacion a 70 años incorrecto");
                                                }
                                            }else{
                                                throw new Exception("Recuperacion a 60 años incorrecto");
                                            }
                                        }else{
                                            throw new Exception("Recuperacion a 50 años incorrecto");
                                        }
                                    }else{
                                        throw new Exception("Prospecto incorrecto");
                                    }
                                    
                                }else{
                                    throw new Exception("Oferta incorrecta");
                                }
                                            
                            }else{
                                throw new Exception("Plan incorrecto");
                            } 
                        }else{
                            throw new Exception("Aseguradora incorrecta");
                        }
                    }else{
                        $_POST = $cuadro->validateForm($_POST);
                        if($cuadro->setIdAseguradora($_POST['aseguradora'])){
                            if($cuadro->setPlan($_POST['plan'])){
                                if($cuadro->setOferta($_POST['oferta'])){
                                    if($cuadro->setIdClienteProspecto($_GET['id3'])){
                                        if($cuadro->createCuadro()){ //Crea una presentacion
                                            if($solicitud->updateEstado($fecha, $hora, $_GET['id'])){
                                                Page::showMessage(1, "Cuadro creado", "index.php");
                                            }else{
                                                throw new Exception(Database::getException()); 
                                            }                                    
                                        }else{
                                            throw new Exception(Database::getException());        
                                        }
                                    }else{
                                        throw new Exception("Prospecto incorrecto");
                                    }
                                    
                                }else{
                                    throw new Exception("Oferta incorrecta");
                                }
                                            
                            }else{
                                throw new Exception("Plan incorrecto");
                            } 
                        }else{
                            throw new Exception("Aseguradora incorrecta");
                        }
                    }
                }        
        }
    }else{

    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/empleado/create_cuadro_view.php");
?>