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

    $anuncios = $propiedad->getPropiedadesTransaccion();
    echo json_encode($anuncios);
    
}
catch(Exception $error)
{
    echo json_encode($error->getMessage());
}
?>