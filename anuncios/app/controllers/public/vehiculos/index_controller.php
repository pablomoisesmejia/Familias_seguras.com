<?php
require_once("../../../models/database.class.php");
require_once("../../../helpers/validator.class.php");
require_once("../../../models/vehiculos.class.php");
require_once("../../../models/propiedad.class.php");
try
{
    $vehiculo = new Vehiculos;
    $propiedad = new Propiedad;
    $anuncios = '';
    $seccion = $_POST['seccion'];
    if($seccion == 1)
    {
        $anuncios = $vehiculo->getVehiculo();
    }
    if($seccion == 2)
    {
        $propiedad->setIdTransaccion(1);
        $anuncios = $propiedad->getPropiedadesTransaccion();
    }
    if($seccion == 3)
    {
        $propiedad->setIdTransaccion(2);
        $anuncios = $propiedad->getPropiedadesTransaccion();
    }
    echo json_encode($anuncios);
}
catch(Exception $error)
{
    Page::showMessage(2, $error->getMessage(), null);
}

?>