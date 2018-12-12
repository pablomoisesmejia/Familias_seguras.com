<?php

require_once('../app/models/citas.class.php');
try
{
    $cita = new Citas;
    require_once('../app/views/public/producto/calendario_view.php');
}
catch(Exception $error)
{
    Page::showMessage(2, $error->getMessage(), null);
}

?>