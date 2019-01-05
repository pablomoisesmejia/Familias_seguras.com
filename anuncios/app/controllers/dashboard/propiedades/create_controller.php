<?php
session_start();
require_once("../../../models/database.class.php");
require_once("../../../helpers/validator.class.php");
require_once("../../../models/propiedad.class.php");

try
{
    $resultado = 0;
    $excepcion = 0;

    $propiedad = new Propiedad;
    $propiedad->setIdUsuario($_SESSION['id_usuario']);
    $propiedad->setIdTransaccion($_POST['tipo_transaccion']);
    $propiedad->setIdTipoPropiedad($_POST['tipo_propiedad']);
    $propiedad->setColonia($_POST['colonia']);
    $propiedad->setMunicipio($_POST['municipio']);
    $propiedad->setDepartamento($_POST['departamento']);
    $propiedad->setTerreno($_POST['terreno']);
    $propiedad->setConstruccion($_POST['construccion']);
    $propiedad->setNiveles($_POST['niveles']);
    $propiedad->setHabitaciones($_POST['habitaciones']);
    $propiedad->setBaños($_POST['banos']);
    $propiedad->setCochera($_POST['cochera']);
    $propiedad->setDescripcion($_POST['descripcion']);
    $propiedad->setValor($_POST['valor']);

    $propiedad->setComunidadPrivada($_POST['comunidad_privada']);
    $propiedad->setPiscina($_POST['piscina']);
    $propiedad->setCanchaBasketball($_POST['cancha_basketball']);
    $propiedad->setCanchaTennis($_POST['cancha_tennis']);
    $propiedad->setCanchaFutbol($_POST['cancha_futbol']);
    $propiedad->setGimnasio($_POST['gimnasio']);
    $propiedad->setSpa($_POST['spa_sauna']);
    $propiedad->setBarbacoa($_POST['barbacoa']);
    $propiedad->setDeck($_POST['deck']);
    $propiedad->setSistemaRiego($_POST['sistema_riego']);
    $propiedad->setACCentral($_POST['ac_central']);
    $propiedad->setACIndependiente($_POST['ac_independiente']);
    $propiedad->setAtico($_POST['atico']);
    $propiedad->setPortico($_POST['portico']);
    $propiedad->setSotano($_POST['sotano']);
    $propiedad->setBodega($_POST['bodega']);
    $propiedad->setEstudio($_POST['estudio']);
    $propiedad->setAreaServicio($_POST['area_sevicio']);
    $propiedad->setPantrie($_POST['pantrie']);
    $propiedad->setClosets($_POST['closets']);
    $propiedad->setWalkingCloset($_POST['walking_closet']);
    $propiedad->setCocinaIsla($_POST['cocina_isla']);
    $propiedad->setDesayunador($_POST['desayunador']);
    $propiedad->setTerrazaInferior($_POST['terraza_nivel_inferior']);
    $propiedad->setTerrazaSuperior($_POST['terraza_nivel_superior']);
    $propiedad->setSalaSuperior($_POST['sala_nivel_superior']);
    $propiedad->setCalentadorAgua($_POST['calentador_agua']);
    $propiedad->setCisterna($_POST['cisterna']);
    $propiedad->setTrituradorBasura($_POST['triturador_basura']);
    $propiedad->setLavadoraPlatos($_POST['lavadora_platos']);
    $propiedad->setSistemaGas($_POST['sistema_gas']);
    $propiedad->setConexion($_POST['conexion']);
    $propiedad->setPanelesSolares($_POST['paneles_solares']);
    $propiedad->setVentiladoresTecho($_POST['ventiladores_techo']);
    $propiedad->setAccesoDiscapacitados($_POST['acceso_discapacitados']);
    $propiedad->setAscensor($_POST['ascensor']);


    if($propiedad->createPropiedad())
    {

    }
    else
    {
        $excepcion = Database::getException();
    }

    if($propiedad->getIdPropiedad() != null)
    {
        $resultado = 1;
        $id[] = [$resultado, $propiedad->getIdPropiedad()];
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
    echo $error->getMessage();
}
?>