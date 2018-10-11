<?php
require_once('../../../models/database.class.php');
require_once('../../../helpers/validator.class.php');
require_once('../../../models/cliente.class.php');

try
{
    $resultado = 0;
    $excepcion = 0;
    $cliente = new Cliente;
    $cliente->setNombre($_POST['nombre']);
    $cliente->setIdTipoCliente(2);
    $cliente->setTelefono($_POST['telefono']);
    $cliente->setCorreo($_POST['correo']);
    if($cliente->createCliente())
    {
       
    }
    else
    {
        $excepcion = Database::getException();
    }

    
    if($cliente->getIdCliente() != null)
    {
        $resultado = 1;
        $id[] = [$resultado, $cliente->getIdCliente()];
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
    echo json_encode($error->getMenssage());
}
?>