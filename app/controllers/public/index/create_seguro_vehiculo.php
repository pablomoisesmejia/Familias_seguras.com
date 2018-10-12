<?php
require_once('../../../models/database.class.php');
require_once('../../../helpers/validator.class.php');
require_once('../../../models/cotizaciones_vehiculo.class.php');

try
{
    $vehiculo = new Cotizaciones_vehiculos;
    $vehiculo->setNumeroLicencia($_POST['numero_licencia']);
    $vehiculo->setIdCliente($_POST['id_cliente']);

    if($vehiculo->createSeguroVehiculo())
    {

    }
    else
    {
        echo Database::getException();
    }
}
catch(Exception $error)
{
    echo $error->getMessage();
}
?>