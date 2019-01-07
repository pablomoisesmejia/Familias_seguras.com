<?php
require_once("../../../models/database.class.php");
require_once("../../../helpers/validator.class.php");
require_once("../../../models/propiedad.class.php");

try
{
    $propiedad = new Propiedad;
    $colonias = $propiedad->getColonias();
    echo json_encode($colonias);
}
catch(Exception $error)
{
    echo $error->getMessage();
}

?>