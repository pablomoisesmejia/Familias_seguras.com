<?php
require_once('../../../models/database.class.php');
require_once('../../../helpers/validator.class.php');
require_once('../../../models/cotizaciones_medico.class.php');

try
{
    $medico = new Cotizaciones_Medico;
    $medico->setNombreAsegurado($_POST['nombre_asegurado_medico']);
    $medico->setFechaNacimiento($_POST['fecha_naci_medico']);
    $medico->setNombreConyugue($_POST['nombre_conyugue']);
    $medico->setFechaNacimientoConyugue($_POST['fecha_naci_conyugue']);
    $medico->setCantidadHijo($_POST['cantidad_hijo']);
    $medico->setCobertura($_POST['cobertura']);
    $medico->setIdCliente($_POST['id_cliente']);

    if($medico->createSeguroMedico())
    {

    }
    else
    {
        echo Database::getException();
    }
}
catch(Exception $error)
{
    echo $error->getMessage();
}
?>