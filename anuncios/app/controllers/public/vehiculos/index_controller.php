<?php
require_once("../../../models/database.class.php");
require_once("../../../helpers/validator.class.php");
require_once("../../../models/vehiculos.class.php");
try
{
    $vehiculo = new Vehiculos;
    $anuncios = '';
    $filtro = '';
    $arreglo = [];
    $ordenar = $_POST['ordenar'];

    if(isset($_POST['filtro']))
    {
        $arreglo = $_POST['filtro'];

        for($i = 0; $i<count($arreglo); $i++)
        {
            if($filtro == '')
            {
                $filtro = ' WHERE '.$arreglo[$i].'';
            }
            else
            {
                $filtro = ' AND '.$arreglo[$i].'';
            }
        }        
    }
    else
    {
        $filtro = '';
    }
    
    if($ordenar == '')
    {
        $anuncios = $vehiculo->getVehiculo($filtro,'');
    }
    else
    {
        if($ordenar == 'maa-z')
        {
            $anuncios = $vehiculo->getVehiculo($filtro,'ORDER BY mar.marca_vehiculo ASC');
        }
        if($ordenar == 'maz-a')
        {
            $anuncios = $vehiculo->getVehiculo($filtro,'ORDER BY mar.marca_vehiculo DESC');
        }
        if($ordenar == 'moa-z')
        {
            $anuncios = $vehiculo->getVehiculo($filtro,'ORDER BY mv.modelos_vehiculo ASC');
        }
        if($ordenar == 'moz-a')
        {
            $anuncios = $vehiculo->getVehiculo($filtro,'ORDER BY mv.modelos_vehiculo DESC');
        }
        if($ordenar == 'reciente')
        {
            $anuncios = $vehiculo->getVehiculo($filtro,'ORDER BY v.anio DESC');
        }
        if($ordenar == 'antiguo')
        {
            $anuncios = $vehiculo->getVehiculo($filtro,'ORDER BY v.anio ASC');
        }
        if($ordenar == 'menor')
        {
            $anuncios = $vehiculo->getVehiculo($filtro,'ORDER BY v.valor ASC');
        }
        if($ordenar == 'mayor')
        {
            $anuncios = $vehiculo->getVehiculo($filtro,'ORDER BY v.valor DESC');
        }
    }
    echo json_encode($anuncios);
}
catch(Exception $error)
{
    echo json_encode($error->getMessage());
}

?>