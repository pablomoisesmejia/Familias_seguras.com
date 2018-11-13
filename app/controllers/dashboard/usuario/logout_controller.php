<?php
require_once("../../app/models/empleados.class.php");
$object = new Empleados;
if($object->logOut()){
    Page::showMessage(1, "Autenticación eliminada", "login.php");
}else{
    Page::showMessage(2, "Ocurrió un problema", "index.php");
}
?>