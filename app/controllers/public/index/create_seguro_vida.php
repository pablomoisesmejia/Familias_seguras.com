<?php
require_once('../../../models/database.class.php');
require_once('../../../helpers/validator.class.php');
require_once('../../../models/cotizaciones_vida.class.php');

try
{
    $resultado = 0;
    $excepcion = 0;

    $vida = new Cotizaciones_vida;
    $vida->setFumador($_POST['fumador']);
    $vida->setSumaAsegurada($_POST['suma_asegurada']);
    $vida->setCesionBancaria($_POST['cesion_bancaria']);
    $vida->setIdClienteProspecto($_POST['id_cliente_prospecto']);

    if($vida->createSeguroVida())
    {

    }
    else
    {
        $excepcion = Database::getException();
    }

    if($vida->getIdCotizacion() != null)
    {
        $resultado = 1;
        $id[] = [$resultado, $vida->getIdCotizacion()];
        echo json_encode($id);
    }
    if($resultado == 0)
    {
        $errores[] = [$resultado, $excepcion];
        echo json_encode($errores);
    }
}
catch(Exception $error)
{
    echo $error->getMessage();
}
?>