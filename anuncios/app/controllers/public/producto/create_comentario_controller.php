<?php
require_once("../../../models/database.class.php");
require_once("../../../helpers/validator.class.php");
require_once("../../../models/comentarios.class.php");

try
{
    $resultado = 0;
    $excepcion = 0;

    $comentario = new Cometarios;

    $comentario->setComentario($_POST['comentario']);
    $comentario->setCorreo($_POST['correo']);
    $comentario->setIdAnuncio($_POST['id_anuncio']);


    if($comentario->createComentario())
    {

    }
    else
    {
        $excepcion = Database::getException();
    }

    if($comentario->getIdComentario() != null)
    {
        $resultado = 1;
        $id[] = [$resultado, $comentario->getIdComentario()];
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