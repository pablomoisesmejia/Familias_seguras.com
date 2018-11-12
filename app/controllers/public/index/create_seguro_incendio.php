<?php
require_once('../../../models/database.class.php');
require_once('../../../helpers/validator.class.php');
require_once('../../../models/cotizaciones_incendios.class.php');

try
{
    $incendios = new Cotizaciones_incendios;
    $incendios->setTipoInmueble($_POST['tipo_inmueble']);
    $incendios->setDireccion($_POST['direccion_inmueble']);
    $incendios->setAseguradoCalidad($_POST['asegurado_calidad']);
    $incendios->setValorConstruccion($_POST['valor_construccion']);
    $incendios->setValorContenido($_POST['valor_contenido']);
    $incendios->setIdClienteProspecto($_POST['id_cliente_prospecto']);

    if($incendios->createSeguroIncendio())
    {

    }
    else
    {
        echo Database::getException();
    }
    if($incendios->getIdCotizacion() != null)
    {
        echo 1;
    }
}
catch(Exception $error)
{
    echo $error->getMessage();
}
?>