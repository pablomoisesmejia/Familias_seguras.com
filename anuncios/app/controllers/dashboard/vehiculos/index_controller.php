<?php
require_once("../../app/models/vehiculos.class.php");

try
{
    $vehiculo = new Vehiculos;

    $vehiculo->setIdUsuario($_SESSION['id_usuario']);
    $data = $vehiculo->getVehiculos();
    if($data)
    {
        require_once("../../app/views/dashboard/vehiculos/index_view.php");
    }
    else
    {
		Page::showMessage(4, "No tienes vehiculos disponibles", "create.php");
	}
}
catch(Exception $error)
{
    Page::showMessage(2, $error->getMessage(), null);
}
?>