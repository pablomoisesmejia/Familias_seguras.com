<?php
require_once("../../app/models/vehiculos.class.php");
require_once("../../app/helpers/utility.class.php");

try
{
    $vehiculo = new Vehiculos;
}
catch(Exception $error)
{
    Page::showMessage(2, $error->getMessage(), null);
}

require_once("../../app/views/dashboard/vehiculos/create_view.php");

?>