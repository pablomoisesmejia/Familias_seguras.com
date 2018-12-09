<?php
require_once("../app/models/vehiculos.class.php");

try
{
    $vehiculo = new Vehiculos;
    $vehiculo->setIdVehiculo($_GET['id']);
    $data = $vehiculo->getVehiculoDetalle();
    if($data)
    {
        require_once("../app/views/public/producto/compra_vehiculos_detalle_view.php");
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