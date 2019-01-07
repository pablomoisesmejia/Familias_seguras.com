<?php
require_once("../../../models/database.class.php");
require_once("../../../helpers/validator.class.php");
require_once("../../../models/propiedad.class.php");
try
{
    $propiedad = new Propiedad;
    $anuncios = '';
    $filtro = '';
    $arreglo = [];
    $ordenar = $_POST['ordenar'];
    
    if(isset($_POST['filtro']))
    {
        $arreglo = $_POST['filtro'];

        for($i = 0; $i<count($arreglo); $i++)
        {
            $filtro = ' AND '.$arreglo[$i].'';
        }        
    }
    else
    {
        $filtro = '';
    }

    $seccion = $_POST['seccion'];
    $propiedad->setIdTransaccion($seccion);

    if($ordenar == '')
    {
        $anuncios = $propiedad->getPropiedadesTransaccion($filtro, '');
    }
    else
    {
        if($ordenar == 'ca-z')
        {
            $anuncios = $propiedad->getPropiedadesTransaccion($filtro, 'ORDER BY c.colonia ASC');
        }
        if($ordenar == 'cz-a')
        {
            $anuncios = $propiedad->getPropiedadesTransaccion($filtro, 'ORDER BY c.colonia DESC');
        }
        if($ordenar == 'reciente')
        {
            $anuncios = $propiedad->getPropiedadesTransaccion($filtro, 'ORDER BY p.PK_id_propiedad DESC');
        }
        if($ordenar == 'antiguo')
        {
            $anuncios = $propiedad->getPropiedadesTransaccion($filtro, 'ORDER BY p.PK_id_propiedad ASC');
        }
        if($ordenar == 'menor')
        {
            $anuncios = $propiedad->getPropiedadesTransaccion($filtro, 'ORDER BY p.valor ASC');
        }
        if($ordenar == 'mayor')
        {
            $anuncios = $propiedad->getPropiedadesTransaccion($filtro, 'ORDER BY p.valor DESC');
        }
    }
    
    echo json_encode($anuncios);
    
}
catch(Exception $error)
{
    echo json_encode($error->getMessage());
}
?>