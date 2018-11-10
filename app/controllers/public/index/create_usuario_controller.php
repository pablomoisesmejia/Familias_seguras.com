<?php
require_once('../../../models/database.class.php');
require_once('../../../helpers/validator.class.php');
require_once('../../../models/usuarios.class.php');

try
{
    $resultado = 0;
    $excepcion = 0;

    date_default_timezone_set('America/El_Salvador');
    $fecha = date('Y-m-d');
    $hora = date('H:i:s');

    $usuario = new Usuarios;
    $usuario->setFechaInclusion();
    $usuario->setHoraInclusion();
    $usuario->setNombres();
    $usuario->setApellidos();
    $usuario->setIdTipoTeam();
    $usuario->setIdEstado();
    $usuario->setCorreo();
    
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
    echo json_encode($error->getMessage());
}
?>