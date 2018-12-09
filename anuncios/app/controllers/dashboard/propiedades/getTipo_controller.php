<?php
require_once("../../../models/database.class.php");
require_once("../../../helpers/validator.class.php");
require_once("../../../models/propiedad.class.php");

try
{
    $propiedad = new Propiedad;
    $tipos_propiedad = $propiedad->getTipoPropiedad();
    echo json_encode($tipos_propiedad);
}
catch(Exception $error)
{
    echo $error->getMessage();
}

?>