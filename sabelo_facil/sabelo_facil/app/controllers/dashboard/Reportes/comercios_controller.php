<?php
    require_once("../../app/models/database.class.php");
    include('../../app/views/dashboard/reportes/comercios_dis_view.php');
    require_once("../../app/helpers/validator.class.php");
    require_once("../../app/models/carrito.class.php");

    $detalle = new Detalle;
    // Creaci�n del objeto de la clase heredada
    $pdf = new PDF('P', 'mm', 'A4');

    $pdf->setTitle('Comercios Disponibles');
    $pdf->setMargins(10, 10, 10,10);
    // T�tulos de las columnas
    $header = array('Nombre','Producto', 'Correo', 'Telefono', 'Responsable');
    // Carga de datos
    $result = $detalle->getcomerciosdis();

    $pdf->AliasNbPages();
    $pdf->AddPage();

    $pdf->SetFont('Arial','',12);
    $pdf->ImprovedTable($header,$result);
    $pdf->Output('i');
?>