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
    $usuario->setFechaInclusion($fecha);
    $usuario->setHoraInclusion($hora);
    $usuario->setNombres($_POST['nombres']);
    $usuario->setApellidos($_POST['apellidos']);
    $usuario->setIdTipoTeam(7);
    $usuario->setIdEstado(1);

    if($_POST['fecha_nacimiento'] != '')
    {
        $usuario->setFechaNacimiento($_POST['fecha_nacimiento']);
    }
    $usuario->setCorreo($_POST['correo']);
    $usuario->setTelefono($_POST['telefono']);
    $usuario->setWhatsapp($_POST['whatsapp']);
    if($usuario->createUsuario())
    {

    }
    else
    {
        $excepcion = Database::getException();
    } 
    if($usuario->getIdUsuario() != null)
    {
        $resultado = 1;
        $id[] = [$resultado, $usuario->getIdUsuario()];
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