<?php
require_once("../../../models/database.class.php");
require_once("../../../helpers/validator.class.php");
require_once("../../../models/propiedad.class.php");

try
{
    $propiedad = new Propiedad;
    $transaccion = $propiedad->getTransaccion();
    echo json_encode($transaccion);
}
catch(Exception $error)
{
    echo $error->getMessage();
}

?>