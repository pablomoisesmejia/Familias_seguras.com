<?php
require_once('../../../models/database.class.php');
require_once('../../../helpers/validator.class.php');
require_once('../../../models/cotizaciones_incendios.class.php');

try
{
    $incendios = new Cotizaciones_incendios;
    $incendios->setTipoInmueble($_POST['tipo_inmueble']);
    $incendios->setDireccion($_POST['direccion']);
    $incendios->setValorConstruccion($_POST['valor_construccion']);
    $incendios->setValorContenido($_POST['valor_contenido']);
    $incendios->setIdCliente($_POST['id_cliente']);

    if($incendios->createSeguroIncendio())
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