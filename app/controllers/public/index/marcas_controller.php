<?php
require_once('../../../models/database.class.php');
require_once('../../../helpers/validator.class.php');
require_once('../../../models/marcas_vehiculos.class.php');

try
{
    $marca_vehiculo = new Marcas_vehiculos;
    $marcas = $marca_vehiculo->getMarcasVehiculos();
    echo json_encode($marcas);
}
catch(Exception $error)
{
    echo json_encode($error->getMessage());
}

?>