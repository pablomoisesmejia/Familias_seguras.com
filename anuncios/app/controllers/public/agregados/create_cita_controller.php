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
    $tipo = 1;//Esto verificar el tipo de correo ha enviar. tipo 1 es de cita y tipo 2 es de enviar mensaje
    $categoria = $_POST['categoria'];
    $cita->setNombres($_POST['nombres']);
    $cita->setCorreo($_POST['correo']);
    $hora = $_POST['hora'];
    $formato = substr($hora, -2);
    $hora = str_replace(['AM', 'PM'], '', $hora);
    $cita->setStart($_POST['fecha'].' '.$hora);
    $cita->setFormato($formato);
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