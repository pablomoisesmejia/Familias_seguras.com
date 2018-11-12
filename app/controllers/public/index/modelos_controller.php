<?php
require_once('../../../models/database.class.php');
require_once('../../../helpers/validator.class.php');
require_once('../../../models/modelos_vehiculos.class.php');

try
{
    $modelo_vehiculo = new Modelos_vehiculos;
    $modelo_vehiculo->setIdMarca($_POST['id_marca']);
    $modelos = $modelo_vehiculo->getModelosxMarca();
    echo json_encode($modelos);
}
catch(Exception $error)
{
    echo json_encode($error->getMessage());
}

?>