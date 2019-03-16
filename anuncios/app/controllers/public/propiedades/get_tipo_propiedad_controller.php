<?php
require_once("../../../models/database.class.php");
require_once("../../../helpers/validator.class.php");
require_once("../../../models/propiedad.class.php");

try
{
    $propiedad = new Propiedad;
    $tipos_propiedades = $propiedad->getTipoPropiedad();

    echo json_encode($tipos_propiedades);
}
catch(Exception $error)
{
    echo json_encode($error->getMessage());
}

?>