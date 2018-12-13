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

    $titulo = '';
    $calendario = true;
    $categoria = $_POST['categoria'];
    $cita->setNombres($_POST['nombres']);
    $cita->setCorreo($_POST['correo']);
    $cita->setStart($_POST['fecha'].' '.$_POST['hora']);
    $cita->setLugarReunion($_POST['lugar_reunion']);
    $cita->setAsunto($_POST['asunto']);
    if($categoria == 1)
    {
        $titulo = 'Cita Vehiculo';
        $vehiculo->setIdVehiculo($_POST['id']);
        $datos_usuario = $vehiculo->getCorreoUsuario();
    }
    if($categoria == 2)
    {
        $titulo = 'Cita Propiedad';
        $propiedad->setIdPropiedad($_POST['id']);
        $datos_usuario = $propiedad->getCorreoUsuario();
    }
    $cita->setTitulo($titulo);
    $cita->setIdUsuario($datos_usuario[0][0]);
    if($cita->createCita())
    {
        require_once('../../../helpers/mensaje.php');
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