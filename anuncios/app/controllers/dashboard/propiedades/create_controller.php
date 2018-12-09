<?php
session_start();
require_once("../../../models/database.class.php");
require_once("../../../helpers/validator.class.php");
require_once("../../../models/propiedad.class.php");

try
{
    $resultado = 0;
    $excepcion = 0;

    $propiedad = new Propiedad;
    $propiedad->setIdUsuario($_SESSION['id_usuario']);
    $propiedad->setIdTransaccion($_POST['tipo_transaccion']);
    $propiedad->setIdTipoPropiedad($_POST['tipo_propiedad']);
    $propiedad->setColonia($_POST['colonia']);
    $propiedad->setMunicipio($_POST['municipio']);
    $propiedad->setDepartamento($_POST['departamento']);
    $propiedad->setTerreno($_POST['terreno']);
    $propiedad->setConstruccion($_POST['construccion']);
    $propiedad->setNiveles($_POST['niveles']);
    $propiedad->setHabitaciones($_POST['habitaciones']);
    $propiedad->setBaños($_POST['banos']);
    $propiedad->setCochera($_POST['cochera']);
    $propiedad->setDescripcion($_POST['descripcion']);
    $propiedad->setAmenidades($_POST['amenidades']);
    $propiedad->setValor($_POST['valor']);
    $propiedad->setTelefono($_POST['telefono']);
    $propiedad->setWhatsapp($_POST['whatsapp']);

    if($propiedad->createPropiedad())
    {

    }
    else
    {
        $excepcion = Database::getException();
    }

    if($propiedad->getIdPropiedad() != null)
    {
        $resultado = 1;
        $id[] = [$resultado, $propiedad->getIdPropiedad()];
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