<?php
require_once("../../../models/database.class.php");
require_once("../../../helpers/validator.class.php");
require_once('../../../models/citas.class.php');

try
{
    $cita = new Citas;

    $cita->setIdUsuario($_POST['id']);
    $citas = $cita->getCitas();
    echo json_encode($citas);
}
catch(Exception $error)
{
    echo $error->getMessage();
}

?>