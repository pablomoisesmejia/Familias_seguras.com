<?php
require_once("../app/models/vehiculos.class.php");

try
{
    $vehiculo = new Vehiculos;
    $data = $vehiculo->getVehiculo();
    if($data)
    {
        require_once("../app/views/public/producto/compra_vehiculos_view.php");
    }
    else
    {
		Page::showMessage(4, "No hay vehiculos en venta disponibles", null);
	}
}
catch(Exception $error)
{
    Page::showMessage(2, $error->getMessage(), null);
}

?>