<?php
require_once('../../../models/database.class.php');
require_once('../../../helpers/validator.class.php');
require_once('../../../models/cotizaciones_vehiculo.class.php');

try
{
    $vehiculo = new Cotizaciones_vehiculos;
    $vehiculos = $_POST['vehiculos'];
    print_r($vehiculos);
    for($i = 0; $i<count($vehiculos); $i++)
    {
        $vehiculo->setIdModeloVehiculo($vehiculos[$i][3]);
        $vehiculo->setAnio($vehiculos[$i][4]);
        $vehiculo->setIdOrigenVehiculo($vehiculos[$i][5]);
        $vehiculo->setValor($vehiculos[$i][6]);

        $vehiculo->setIdClienteProspecto($_POST['id_cliente_prospecto']);
        if($vehiculo->createSeguroVehiculo())
        {

        }
        else
        {
            echo Database::getException();
        }
    }
}
catch(Exception $error)
{
    echo $error->getMessage();
}
?>