<?php
session_start();
require_once("../../../models/database.class.php");
require_once("../../../helpers/validator.class.php");
require_once("../../../models/vehiculos.class.php");
require_once("../../../helpers/utility.class.php");

try
{
    $resultado = 0;
    $excepcion = 0;

    $vehiculo = new Vehiculos;
    $valor = str_replace(',', '', $_POST['valor_vehiculo']);
    $kilometraje = str_replace(',', '', $_POST['kilometraje']);
    $vehiculo->setIdUsuario($_SESSION['id_usuario']);
    $vehiculo->setIdModelo($_POST['modelo_vehiculo']);
    $vehiculo->setAnio($_POST['anio_vehiculo']);
    $vehiculo->setColor($_POST['color_vehiculo']);
    $vehiculo->setKilometraje($kilometraje);
    $vehiculo->setTransmision($_POST['transmision']);
    $vehiculo->setMotor($_POST['motor']);
    $vehiculo->setValor($valor);
    $vehiculo->setVidriosElectricos($_POST['vidrios_electricos']);
    $vehiculo->setEspejosElectricos($_POST['espejos_electricos']);
    $vehiculo->setAireAcondicionado($_POST['aire_acondicionado']);
    $vehiculo->setBolsasAire($_POST['bolsas_aire']);
    $vehiculo->setSistemaEco($_POST['sistema_eco']);
    $vehiculo->setMandosTimon($_POST['mando_timon']);
    $vehiculo->setRinesEspeciales($_POST['rines_especiales']);
    $vehiculo->setCamaraTrasera($_POST['camara_trasera']);
    $vehiculo->setSensoresParqueo($_POST['sensores_parqueo']);
    $vehiculo->setBluetooth($_POST['bluetooth']);
    $vehiculo->setCombustible($_POST['combustible']);
    $vehiculo->setSunroof($_POST['sunroof']);
    $vehiculo->setLucesXenon($_POST['luces_xenon']);
    $vehiculo->setCruiseControl($_POST['cruise_control']);
    $vehiculo->setMandoDistancia($_POST['mando_distancia']);
    $vehiculo->setGPS($_POST['gps']);
    $vehiculo->setTapiceriaCuero($_POST['tapiceria_cuero']);
    $vehiculo->setDVDTrasero($_POST['dvd_trasero']);

    if($vehiculo->createVehiculo())
    {

    }
    else
    {
        $excepcion = Database::getException();
    }

    if($vehiculo->getIdVehiculo() != null)
    {
        $resultado = 1;
        $id[] = [$resultado, $vehiculo->getIdVehiculo()];
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
    Page::showMessage(2, $error->getMessage(), null);
}
?>