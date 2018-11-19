<?php 
require_once("../../app/models/carrito.class.php");
require_once("../../app/helpers/validator.class.php");
try{
    $carrito = new Detalle;

    if($carrito->setCliente($_SESSION['id_cliente'])){
            $factura = $carrito->facturafinal();
           if($factura){
                Page::showMessage(1, "factura creada", null);
                
           }else{
                Page::showMessage(1, "ocurrio un error", null);
           }
    }

}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
?>