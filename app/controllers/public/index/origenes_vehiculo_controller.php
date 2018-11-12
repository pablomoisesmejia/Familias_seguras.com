<?php
require_once('../../../models/database.class.php');
require_once('../../../helpers/validator.class.php');
require_once('../../../models/origenes_vehiculo.class.php');

try
{
    $origen_vehiculo = new Origenes_vehiculo;
    $origenes = $origen_vehiculo->getOrigenesVehiculo();
    echo json_encode($origenes);
}
catch(Exception $error)
{
    echo json_encode($error->getMessage());
}

?>