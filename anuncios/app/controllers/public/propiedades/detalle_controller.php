<?php
require_once("../app/models/propiedad.class.php");

try
{
    $propiedad = new Propiedad;
    if(isset($_GET['id']))
    {
        $propiedad->setIdPropiedad($_GET['id']);
        $data = $propiedad->getPropiedadDetalle();
        if($data)
        {
            require_once("../app/views/public/producto/compra_props_detalle_view.php");
        }
        else
        {
            Page::showMessage(4, "No se encontró información de la propiedad", 'index.php');
        }
    }
    else
    {
        Page::showMessage(4, "Seleccione una propiedad", 'index.php');
    }
    
}
catch(Exception $error)
{
    Page::showMessage(2, $error->getMessage(), null);
}

?>