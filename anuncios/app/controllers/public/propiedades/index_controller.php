<?php
require_once("../../../models/database.class.php");
require_once("../../../helpers/validator.class.php");
require_once("../../../models/propiedad.class.php");
try
{
    $propiedad = new Propiedad;
    $anuncios = '';
    $filtro = '';
    $ordenar = '';

    if(isset($_POST['ordenar']))
    {
        $ordenar = $_POST['ordenar'];
    }
    
    $seccion = $_POST['seccion'];
    $propiedad->setIdTransaccion($seccion);

    if($ordenar == '')
    {
        $anuncios = $propiedad->getPropiedadesTransaccion('');
    }
    else
    {
        if($ordenar == 'ca-z')
        {
            $anuncios = $propiedad->getPropiedadesTransaccion('ORDER BY c.colonia ASC');
        }
        if($ordenar == 'cz-a')
        {
            $anuncios = $propiedad->getPropiedadesTransaccion('ORDER BY c.colonia DESC');
        }
        if($ordenar == 'reciente')
        {
            $anuncios = $propiedad->getPropiedadesTransaccion('ORDER BY p.PK_id_propiedad DESC');
        }
        if($ordenar == 'antiguo')
        {
            $anuncios = $propiedad->getPropiedadesTransaccion('ORDER BY p.PK_id_propiedad ASC');
        }
        if($ordenar == 'menor')
        {
            $anuncios = $propiedad->getPropiedadesTransaccion('ORDER BY p.valor ASC');
        }
        if($ordenar == 'mayor')
        {
            $anuncios = $propiedad->getPropiedadesTransaccion('ORDER BY p.valor DESC');
        }
    }
    
    echo json_encode($anuncios);
    
}
catch(Exception $error)
{
    echo json_encode($error->getMessage());
}
?>