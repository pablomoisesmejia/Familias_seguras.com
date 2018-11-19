<?php
require_once("../../app/models/cliente.class.php");
$object = new Cliente;

    

    //  $object->setId($_SESSION['id_cliente']);

    // $object->quitarlogin();

    // unset($_SESSION['id_cliente'] );
    // unset($_SESSION['correo_cliente']);
    // unset($_SESSION['nombre_cliente']);

    
    // $_SESSION['intentos'] = 0;

    $object->logOut();

    Page::showMessage(1, "Sesion Cerrada", "../productos/index.php");
    exit();





?>