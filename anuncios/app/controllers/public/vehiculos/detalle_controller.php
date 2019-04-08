<?php
require_once("../app/models/vehiculos.class.php");
require_once("../app/models/banners.class.php");

try
{
    $vehiculo = new Vehiculos;
    if(isset($_GET['id']))
    {
        $vehiculo->setIdVehiculo($_GET['id']);
        $data = $vehiculo->getVehiculoDetalle();
        if($data)
        {
            require_once("../app/views/public/producto/compra_vehiculos_detalle_view.php");
        }
        else
        {
            Page::showMessage(4, "No se encontró información del vehículo", 'vehiculos_v.php');
        }
    }
    else
    {
        Page::showMessage(4, "Seleccione un vehículo", 'vehiculos_v.php');
    }
}
catch(Exception $error)
{
    Page::showMessage(2, $error->getMessage(), null);
}

?>