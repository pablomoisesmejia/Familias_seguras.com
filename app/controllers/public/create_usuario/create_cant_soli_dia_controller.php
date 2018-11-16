<?php
require_once('../../../models/database.class.php');
require_once('../../../helpers/validator.class.php');
require_once('../../../models/cantidad_solicitud_dias.class.php');
require_once('../../../models/solicitudes_procesadas.class.php');

try
{
    $resultado = 0;
    $excepcion = 0;

    $cantidades = $_POST['Cantidad'];
    $id_empleado = $_POST['id_empleado'];
    for($i = 0; $i<count($cantidades); $i++)
    {
        $cant_soli_dia = new Cantidad_Solicitud_Dias;
        $solicitudes_procesadas = new Solicitudes_procesadas;

        $cant_soli_dia->setLunes($cantidades[$i][0]);
        $cant_soli_dia->setMartes($cantidades[$i][1]);
        $cant_soli_dia->setMiercoles($cantidades[$i][2]);
        $cant_soli_dia->setJueves($cantidades[$i][3]);
        $cant_soli_dia->setViernes($cantidades[$i][4]);
        $cant_soli_dia->setSabado($cantidades[$i][5]);
        $cant_soli_dia->setDomingo($cantidades[$i][6]);

        if($cant_soli_dia->createCantidadSoliDias())
        {

        }
        else
        {
            $excepcion = Database::getException();
        }

        if($cant_soli_dia->getId() != null)
        {

            $solicitudes_procesadas->setIdTipoSeguro($i+1);
            $solicitudes_procesadas->setIdEmpleado($id_empleado);
            $solicitudes_procesadas->setIdCantidad($cant_soli_dia->getId());

            if($solicitudes_procesadas->createSolicitudProcesada())
            {
                
            }
            else
            {
                $excepcion = Database::getException();
            }
        }
        if($resultado == 0)
        {
            $errores[] = [$resultado, $excepcion];
            echo json_encode($errores);
        }
    }
}
catch(Exception $error)
{
    echo json_encode($error->getMessage());
}
?>