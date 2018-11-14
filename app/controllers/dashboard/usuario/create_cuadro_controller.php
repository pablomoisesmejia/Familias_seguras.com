<?php
require_once("../../app/models/cuadro_comparativo.class.php");
require_once("../../app/models/solicitudes.class.php");
require_once("../../app/models/primas.class.php");
try{

    date_default_timezone_set('America/El_Salvador');
    $fecha = date('Y-m-d');
    $hora = date('H:i:s');

    $cuadro = new Cuadro_Comparativo;
    $solicitud = new Solicitudes;
    $prima = new Primas;
    if(isset($_GET['id']) && isset($_GET['id2']) && isset($_GET['id3'])){
        if(isset($_POST['crear'])){

            $num = $cuadro->getNumCompanias($_GET['id3']);
            $n = $num['n'];
            for($i = 1;$i <= $n;$i++){

                if($_GET['id2'] == 2 && $_GET['id2'] != 4){
                    $_POST = $cuadro->validateForm($_POST);
                    if($cuadro->setIdAseguradora($_POST['aseguradora'.$i])){
                        if($cuadro->setPlan($_POST['plan'.$i])){
                            if(is_uploaded_file($_FILES['oferta'.$i]['tmp_name'])){
                                if($cuadro->setOferta($_FILES['oferta'.$i])){
                                    if($cuadro->setIdClienteProspecto($_GET['id3'])){
                                        if($cuadro->setValorRecuperacion50($_POST['recup50'.$i])){
                                            if($cuadro->setValorRecuperacion60($_POST['recup60'.$i])){
                                                if($cuadro->setValorRecuperacion70($_POST['recup70'.$i])){
                                                    if($cuadro->createCuadro()){
                                                        $solicitud->updateEstado($fecha, $hora, $_GET['id']);
                                                        $arr = $prima->getCuadros();
                                                        $var = $arr['PK_id_cuadro_comparativo']; 
                                                        if($prima->setIdCuadro($var)){
                                                            if($prima->setPrima($_POST['prima'.$i])){
                                                                if($prima->createPrima()){
                                                                    Page::showMessage(1, "Cuadro creado", "index.php");
                                                                }else{
                                                                    throw new Exception(Database::getException());
                                                                }
                                                            }else{
                                                                throw new Exception("Prima incorrecta");
                                                            }
                                                        }else{
                                                            throw new Exception("No se puedo introducir la prima.");
                                                        }
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
                                throw new Exception($cuadro->getArchiveError());
                            }     
                        }else{
                            throw new Exception("Plan incorrecto");
                        } 
                    }else{
                        throw new Exception("Aseguradora incorrecta");
                    }
                }else if($_GET['id2'] == 4){
                    $_POST = $cuadro->validateForm($_POST);
                    if($cuadro->setIdAseguradora($_POST['aseguradora'.$i])){
                        if($cuadro->setPlan($_POST['plan'.$i])){
                            if(is_uploaded_file($_FILES['oferta'.$i]['tmp_name'])){
                                if($cuadro->setOferta($_FILES['oferta'.$i])){
                                    if($cuadro->setIdClienteProspecto($_GET['id3'])){
                                        if($cuadro->createCuadro()){ 
                                            $solicitud->updateEstado($fecha, $hora, $_GET['id']);
                                            $arr = $prima->getCuadros();
                                            $var = $arr['PK_id_cuadro_comparativo']; 

                                            if($prima->setIdCuadro($var)){
                                                if($prima->setPrima($_POST['prima'.$i])){
                                                    if($prima->createPrima()){
                                                        Page::showMessage(1, "Cuadro creado", "index.php");
                                                    }else{
                                                        throw new Exception(Database::getException());
                                                    }
                                                }else{
                                                    throw new Exception("Prima incorrecta");
                                                }
                                            }else{
                                                throw new Exception("No se pudo introducir la prima.");
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
                                throw new Exception($cuadro->getArchiveError());
                            }            
                        }else{
                            throw new Exception("Plan incorrecto");
                        } 
                    }else{
                        throw new Exception("Aseguradora incorrecta");
                    }
                
                
                }else{
                    $_POST = $cuadro->validateForm($_POST);
                    if($cuadro->setIdAseguradora($_POST['aseguradora'.$i])){
                        if($cuadro->setPlan($_POST['plan'.$i])){
                            if(is_uploaded_file($_FILES['oferta'.$i]['tmp_name'])){
                                if($cuadro->setOferta($_FILES['oferta'.$i])){
                                    if($cuadro->setIdClienteProspecto($_GET['id3'])){
                                        if($cuadro->createCuadro()){ 
                                            $solicitud->updateEstado($fecha, $hora, $_GET['id']);
                                            $arr = $prima->getCuadros();
                                            $var = $arr['PK_id_cuadro_comparativo']; 
                                            if($prima->setIdCuadro($var)){
                                                if($prima->setPrima($_POST['prima'.$i])){
                                                    if($prima->createPrima()){
                                                        Page::showMessage(1, "Cuadro creado", "index.php");
                                                    }else{
                                                        throw new Exception(Database::getException());
                                                    }
                                                }else{
                                                    throw new Exception("Prima incorrecta");
                                                }
                                            }else{
                                                throw new Exception("No se pudo introducir la prima.");
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
                                throw new Exception($cuadro->getArchiveError());
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