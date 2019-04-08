<?php
require_once("../../../models/database.class.php");
require_once("../../../helpers/validator.class.php");
require_once("../../../models/mensajes_propiedades.class.php");

try
{
    $resultado = 0;
    $excepcion = 0;

    $mensaje = new Mensajes_Propiedades;

    $mensaje->setMensaje($_POST['mensaje']);
    $mensaje->setCorreo($_POST['correo']);
    $mensaje->setIdAnuncio($_POST['id_anuncio']);


    if($mensaje->createMensaje())
    {

    }
    else
    {
        $excepcion = Database::getException();
    }

    if($mensaje->getIdMensaje() != null)
    {
        $resultado = 1;
        $id[] = [$resultado, $mensaje->getIdMensaje()];
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
    Page::showMessage(2, $error->getMessage(), null);
}
?>