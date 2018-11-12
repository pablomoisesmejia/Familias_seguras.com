<?php
require_once('../../../models/database.class.php');
require_once('../../../helpers/validator.class.php');
require_once('../../../models/cotizaciones_medico.class.php');

try
{
    $medico = new Cotizaciones_Medico;
    $medico->setNombreConyugue($_POST['nombre_conyugue']);
    $medico->setFechaNacimientoConyugue($_POST['fecha_nacimiento_conyugue']);
    $medico->setCantidadHijo($_POST['cantidad_hijos']);
    $medico->setIdClienteProspecto($_POST['id_cliente_prospecto']);

    if($medico->createSeguroMedico())
    {

    }
    else
    {
        echo Database::getException();
    }

    if($medico->getIdCotizacion() != null)
    {
        echo 1;
    }
}
catch(Exception $error)
{
    echo $error->getMessage();
}
?>