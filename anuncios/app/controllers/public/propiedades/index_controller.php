<?php
require_once("../../../models/database.class.php");
require_once("../../../helpers/validator.class.php");
require_once("../../../models/propiedad.class.php");
try
{
    $propiedad = new Propiedad;
    $anuncios = '';
    $filtro = '';
    $rango = $_POST['rango'];
    $arreglo = [];
    $ordenar = $_POST['ordenar'];
    
    /*FILTRO POR AMENIDADES*/
    if(isset($_POST['filtro']))
    {
        $arreglo = $_POST['filtro'];

        for($i = 0; $i<count($arreglo); $i++)
        {
            $filtro .= ' AND '.$arreglo[$i].'';
        }        
    }
    else
    {
        $filtro = '';
    }

    /*RANGO DE PRECIO*/
    if($rango != '')
    {
        $rango = ' AND '.$rango;
    }

    /*FILTROS POR TIPO DE PROPIEDAD, COLONIAS, NIVELES, HABITACIONES, BAÑOS Y COCHERA*/

    /*FILTRO DE NIVELES*/
    if($_POST['niveles'] != '')
    {
        $filtro .= ' AND p.niveles = '.$_POST['niveles'].'';
    }
    /*FILTRO DE HABITACIONES*/
    if($_POST['habitaciones'] != '')
    {
        $filtro .= ' AND p.habitaciones = '.$_POST['habitaciones'].'';
    }
    /*FILTRO DE BAÑOS*/
    if($_POST['baños'] != '')
    {
        $filtro .= ' AND p.baños = '.$_POST['baños'].'';
    }
    /*FILTRO DE COCHERA*/
    if($_POST['cochera'] != '')
    {
        $filtro .= ' AND p.cochera = '.$_POST['cochera'].'';
    }
    /*FILTRO DE COLONIAS*/
    if($_POST['colonias'] != '')
    {
        $filtro .= ' AND p.FK_id_colonia = '.$_POST['colonias'].'';
    }
    /*FILTRO DE TIPO DE PROPIEDAD*/
    if($_POST['tipos_propiedades'] != '')
    {
        $filtro .= ' AND p.FK_id_tipo_propiedad = '.$_POST['tipos_propiedades'].'';
    }

    $seccion = $_POST['seccion'];
    $propiedad->setIdTransaccion($seccion);

    if($ordenar == '')
    {
        $anuncios = $propiedad->getPropiedadesTransaccion($filtro, $rango, '');
    }
    else/*PARA ORDENAR PROPIEDADES POR*/
    {
        if($ordenar == 'ca-z')/*DE a A LA Z*/
        {
            $anuncios = $propiedad->getPropiedadesTransaccion($filtro, $rango, 'ORDER BY c.colonia ASC');
        }
        if($ordenar == 'cz-a')/*DE z A LA a*/
        {
            $anuncios = $propiedad->getPropiedadesTransaccion($filtro, $rango, 'ORDER BY c.colonia DESC');
        }
        if($ordenar == 'reciente')/*DEL mas reciente AL mas antiguo*/
        {
            $anuncios = $propiedad->getPropiedadesTransaccion($filtro, $rango, 'ORDER BY p.PK_id_propiedad DESC');
        }
        if($ordenar == 'antiguo')/*DE mas antiguo AL mas reciente*/
        {
            $anuncios = $propiedad->getPropiedadesTransaccion($filtro, $rango, 'ORDER BY p.PK_id_propiedad ASC');
        }
        if($ordenar == 'menor')/*DEl menor AL mayor PRECIO*/
        {
            $anuncios = $propiedad->getPropiedadesTransaccion($filtro, $rango, 'ORDER BY p.valor ASC');
        }
        if($ordenar == 'mayor')/*DE mayor AL menor PRECIO*/
        {
            $anuncios = $propiedad->getPropiedadesTransaccion($filtro, $rango, 'ORDER BY p.valor DESC');
        }
    }
    
    echo json_encode($anuncios);
    
}
catch(Exception $error)
{
    echo json_encode($error->getMessage());
}
?>