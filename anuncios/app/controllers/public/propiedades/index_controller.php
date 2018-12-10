<?php

require_once('../app/models/propiedad.class.php');

try
{
    $propiedad = new Propiedad;
    
    $propiedad->setIdTransaccion($_SESSION['tipo_transaccion']);
    $data = $propiedad->getPropiedadesTransaccion();
    if($data)
    {
        require_once("../app/views/public/producto/propiedades_view.php");
    }
    else
    {
        Page::showMessage(4, "No hay propiedades", null);
    }    
    
}
catch(Exception $error)
{
    Page::showMessage(2, $error->getMessage(), null);
}

?>