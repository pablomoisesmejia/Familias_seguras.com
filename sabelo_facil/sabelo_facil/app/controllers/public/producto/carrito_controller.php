<?php
require_once("../../app/models/carrito.class.php");
require_once('config.php');
require_once('../../app/libraries/Pagadito.php');
try{
    $detalle = new Detalle;
        if(empty($_SESSION['id_cliente'])){
            Page::showMessage(4, "Inicia Sesion para poder ver tu carrito de compra",null);
        }else{
            if($detalle->setCliente($_SESSION['id_cliente'])){
                $carrito = $detalle->viewcarrito();
                if($carrito){
                    if($detalle->checkTotal()){
                        if(isset($_POST['pagofinal'])){
                            $_POST = $detalle->validateForm($_POST);
                            if($detalle->setCliente($_SESSION['id_cliente'])){
                                if($detalle->realizarcompra()){
                                    if($detalle->ventasactuales()){
                                        $newventa = ($detalle->getNventas());
                                        if($detalle->setId_venta($newventa)){
                                            if($detalle->setCliente($_SESSION['id_cliente'])){
                                                //if($detalle->actualizarventa()){
                                                    //Page::showMessage(1, "Compra realizada exitosamente","../../dashboard/Reportes/factura_public.php?nombre=$_SESSION[nombre]&apellido=$_SESSION[apellido]");
                                                    //empezando codigo de pagadito
                                                    $Pagadito = new Pagadito(UID, WSK);
                                                    if (AMBIENTE_SANDBOX) {
                                                     $Pagadito->mode_sandbox_on();
                                                    }
                                                    else{
                                                        Page::showMessage(2, "Error al conectarse con Pagadito",null);
                                                    }
                                                    if ($Pagadito->connect()) {

                                                        foreach($carrito as $detalle){
                                                            
                                                    
                                                            $Pagadito->add_detail($detalle['cantidad'],$detalle['nombre_producto'] ,$detalle['precio']);
                                                                
                                                        }

                                                        
                                            
                                                        $ern = "FACTURA-XYZ" . rand(1, 1000); //este debe ser un identificador de la transaccion
                                                         if (!$Pagadito->exec_trans($ern)) {
                                                            echo "ERROR:" . $Pagadito->get_rs_code() . ": " . $Pagadito->get_rs_message() . "\n";
                                                         }
                                                        } else {
                                                         echo "ERROR:" . $Pagadito->get_rs_code() . ": " . $Pagadito->get_rs_message() . "\n";
                                                        }


                                                    //terminando codigo de pagadito
                                                /*}else{
                                                    Page::showMessage(2, "La Compra no se puede realizar",null);
                                                }*/
                                            }else{
                                                Page::showMessage(3, "Debe de Iniciar sesion",null);
                                            }
                                        }else{
                                            Page::showMessage(2, "Error al obtener el numero de venta",null);
                                        }
                                    }   
                                }else{
                                    Page::showMessage(2, "Error al obtener los datos del cliente ",null);
                                }
                            }else{

                            }
                            
                        }
                    }else{
                        Page::showMessage(2, "Error al obtener el total de la comprar",null);
                    }
                }else{
                    Page::showMessage(2, "Carrito vacio","index.php");
                    exit();
                }
            }else{
                Page::showMessage(3, "Inicia sesion",null);
            }
        }

}catch(Exception $error){
    Page::showMessage(3, $error->getMessage(), "index.php");
}
require_once("../../app/views/public/producto/carrito_view.php");
?>