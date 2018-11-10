<?php
require_once('../../../models/database.class.php');
require_once('../../../helpers/validator.class.php');
require_once('../../../models/cliente_prospectos.class.php');

try
{
    $resultado = 0;
    $excepcion = 0;
    $cliente_prospecto = new Cliente_Prospecto;
    $cliente_prospecto->setIdUsuario($_POST['id_usuario']);
    $cliente_prospecto->setIdTipoSeguro($_POST['tipo_seguro']);
    $cliente_prospecto->setHoraContactarle($_POST['horario']);
    $cliente_prospecto->setCantidadPagos($_POST['cantidad_pagos']);
    if($cliente_prospecto->createClienteProspecto())
    {
       
    }
    else
    {
        $excepcion = Database::getException();
    }

    
    if($cliente_prospecto->getIdClienteProspecto() != null)
    {
        $resultado = 1;
        $id[] = [$resultado, $cliente_prospecto->getIdClienteProspecto()];
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