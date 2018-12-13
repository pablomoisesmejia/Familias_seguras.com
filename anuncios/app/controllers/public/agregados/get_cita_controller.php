<?php
require_once("../../../models/database.class.php");
require_once("../../../helpers/validator.class.php");
require_once('../../../models/citas.class.php');
require_once('../../../models/vehiculos.class.php');
require_once('../../../models/propiedad.class.php');

try
{
    $cita = new Citas;
    $vehiculo = new Vehiculos;
    $propiedad = new Propiedad;

    $categoria = $_POST['categoria'];

    if($categoria == 1)
    {
        $vehiculo->setIdVehiculo($_POST['id']);
        $datos_usuario = $vehiculo->getCorreoUsuario();
    }
    if($categoria == 2)
    {
        $propiedad->setIdPropiedad($_POST['id']);
        $datos_usuario = $propiedad->getCorreoUsuario();
    }
    $cita->setIdUsuario($datos_usuario[0][0]);
    $citas = $cita->getCitas();
    echo json_encode($citas);
}
catch(Exception $error)
{
    echo $error->getMessage();
}

?>