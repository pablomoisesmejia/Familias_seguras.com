<?php
require_once("../../../models/database.class.php");
require_once("../../../helpers/validator.class.php");
require_once("../../../models/vehiculos.class.php");
require_once("../../../models/propiedad.class.php");
try
{
    $vehiculo = new Vehiculos;
    $propiedad = new Propiedad;
    $anuncios = '';
    $filtro = '';
    $ordenar = '';
    if(isset($_POST['ordenar']))
    {
        $ordenar = $_POST['ordenar'];
    }
    
    $seccion = $_POST['seccion'];
    if($seccion == 1)
    {
        if($ordenar == '')
        {
            $anuncios = $vehiculo->getVehiculo('');
        }
        else
        {
            if($ordenar == 'maa-z')
            {
                $anuncios = $vehiculo->getVehiculo('ORDER BY mar.marca_vehiculo ASC');
            }
            if($ordenar == 'maz-a')
            {
                $anuncios = $vehiculo->getVehiculo('ORDER BY mar.marca_vehiculo DESC');
            }
            if($ordenar == 'moa-z')
            {
                $anuncios = $vehiculo->getVehiculo('ORDER BY mv.modelos_vehiculo ASC');
            }
            if($ordenar == 'moz-a')
            {
                $anuncios = $vehiculo->getVehiculo('ORDER BY mv.modelos_vehiculo DESC');
            }
            if($ordenar == 'reciente')
            {
                $anuncios = $vehiculo->getVehiculo('ORDER BY v.anio DESC');
            }
            if($ordenar == 'antiguo')
            {
                $anuncios = $vehiculo->getVehiculo('ORDER BY v.anio ASC');
            }
            if($ordenar == 'menor')
            {
                $anuncios = $vehiculo->getVehiculo('ORDER BY v.valor ASC');
            }
            if($ordenar == 'mayor')
            {
                $anuncios = $vehiculo->getVehiculo('ORDER BY v.valor DESC');
            }
        }
        
    }
    else
    {
        if($seccion == 2)
        {
            $propiedad->setIdTransaccion(1);
        }
        if($seccion == 3)
        {
            $propiedad->setIdTransaccion(2);
        }
        $anuncios = $propiedad->getPropiedadesTransaccion();
    }
    echo json_encode($anuncios);
}
catch(Exception $error)
{
    Page::showMessage(2, $error->getMessage(), null);
}

?>