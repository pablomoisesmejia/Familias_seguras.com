<?php
require('../../app/models/propiedad.class.php');

try
{
    $propiedad = new Propiedad;
    $propiedad->setIdUsuario($_SESSION['id_usuario']);
    $data = $propiedad->getPropiedades();
    if($data)
    {
        require_once("../../app/views/dashboard/propiedades/index_view.php");
    }
    else
    {
        Page::showMessage(4, "No tienes vehiculos disponibles", null);
    }
}
catch(Exception $error)
{
    Page::showMessage(2, $error->getMessage(), null);
}
?>