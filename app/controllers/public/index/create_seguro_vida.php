<?php
require_once('../../../models/database.class.php');
require_once('../../../helpers/validator.class.php');
require_once('../../../models/cotizaciones_vida.class.php');

try
{
    $vida = new Cotizaciones_vida;
    $vida->setNombreAsegurado($_POST['nombre_asegurado_vida']);
    $vida->setFechaNacimiento($_POST['fecha_naci_vida']);
    $vida->setFumador($_POST['fumador']);
    $vida->setSumaAsegurada($_POST['suma_asegurada']);
    $vida->setCesionBancaria($_POST['cesion_bancaria']);
    $vida->setIdCliente($_POST['id_cliente']);

    if($vida->createSeguroVida())
    {

    }
    else
    {
        echo Database::getException();
    }

    if($vida->getIdCotizacion() != null)
    {
        echo 1;
    }
}
catch(Exception $error)
{
    echo $error->getMessage();
}
?>