<?php
require_once('../../../models/database.class.php');
require_once('../../../helpers/validator.class.php');
require_once('../../../models/empleados.class.php');

try
{
    $resultado = 0;
    $excepcion = 0;

    $empleado = new Empleados;
    $empleado->setIdUsuario($_POST['id_usuario']);
    $empleado->setIdCargo(9);
    $empleado->setActivo(0);
    
    if($empleado->createEmpleado())
    {

    }
    else
    {
        $excepcion = Database::getException();
    } 
    if($empleado->getIdEmpleado() != null)
    {
        $resultado = 1;
        $id[] = [$resultado, $empleado->getIdEmpleado()];
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