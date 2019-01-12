<?php
require_once("../../../models/database.class.php");
require_once("../../../helpers/validator.class.php");
require_once('../../../models/citas.class.php');

session_start();
try
{
    $cita = new Citas;

    $cita->setIdUsuario($_SESSION['id_usuario']);
    $citas = $cita->getCitasProceso();
    echo json_encode($citas);
}
catch(Exception $error)
{
    echo $error->getMessage();
}

?>