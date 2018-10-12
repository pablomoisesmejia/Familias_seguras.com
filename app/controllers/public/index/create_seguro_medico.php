<?php
require_once('../../../models/database.class.php');
require_once('../../../helpers/validator.class.php');
require_once('../../../models/cotizaciones_medico.class.php');

try
{
    $medico = new Cotizaciones_Medico;
    $medico->setNombreAsegurado($_POST['']);
    $medico->setFechaNacimiento($_POST['']);
    $medico->setNombreConyugue($_POST['']);
    $medico->setFechaNacimientoConyugue($_POST['']);
    $medico->setCantidadHijo($_POST['']);
    $medico->setCobertura($_POST['']);
    $medico->setIdCliente($_POST['']);

    
}
catch(Exception $error)
{
    echo $error->getMessage();
}
?>