<?php
require_once('../../../models/database.class.php');
require_once('../../../helpers/validator.class.php');
require_once('../../../models/companias_interes.class.php');

try
{
    $resultado = 0;
    $excepcion = 0;
    $companias = '';

    $compania_interes = new Companias_Interes;
    $companias = $_POST['aseguradoras_select'];

    for($i = 0; $i<count($companias); $i++)
    {
        $compania_interes->setCompaniaInteres($companias[$i]);
        $compania_interes->setNumeroSeleccion($i+1);
        $compania_interes->setIdClienteProspecto($_POST['id_cliente_prospecto']);
        if($compania_interes->createCompaniasInteres())
        {

        }
        else
        {
            $excepcion = Database::getException();
        }
    }
}
catch(Exception $error)
{
    echo $error->getMessage();
}
?>