<?php
require_once("../../../models/database.class.php");
require_once("../../../helpers/validator.class.php");
require_once('../../../models/citas.class.php');

try
{
    $cita = new Citas;

    $cita->setIdCita($_POST['id']);
    $cita->setIdEstadoCita($_POST['estado']);
    if($cita->updateEstadoCita())
    {
        require_once('../../../helpers/estado_cita.php');
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