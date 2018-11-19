<?php
    require_once("../../app/models/database.class.php");
    include('../../app/views/dashboard/reportes/factura_public_view.php');
    require_once("../../app/helpers/validator.class.php");
    require_once("../../app/models/carrito.class.php");

    $detalle = new Detalle;
    // Creaci�n del objeto de la clase heredada
    $pdf = new PDF('P', 'mm', 'letter');

    $pdf->setTitle('Factura');
    $pdf->setMargins(10, 10, 10,10);
    // T�tulos de las columnas
    $header = array('Cant.','Producto', 'Precio', 'Subtotal');

    $header2 = array('TOTAL');
    // Carga de datos
    session_start ();
    if($detalle->setCliente($_SESSION['id_cliente']))
    $result = $detalle->viewcarrito2();
    
    $datass = $detalle->viewtotal();

    $pdf->AliasNbPages();
    $pdf->AddPage();

    $pdf->SetFont('Arial','',12);
    $pdf->ImprovedTable($header,$result);
    $pdf->FancyTable($header2,$datass);
    $pdf->Output('i');
?>