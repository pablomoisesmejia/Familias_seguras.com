<?php
    require_once("../../app/models/database.class.php");
    include('../../app/views/dashboard/reportes/ventas_view.php');
    require_once("../../app/helpers/validator.class.php");
    require_once("../../app/models/carrito.class.php");

    $detalle = new Detalle;
    // Creaci�n del objeto de la clase heredada
    $pdf = new PDF('P', 'mm', 'A4');

    $pdf->setTitle('Reporte de ventas');
    $pdf->setMargins(10, 10, 10,10);
    // T�tulos de las columnas
    $header = array('No. venta','Nombre', 'Apellido', 'correo', 'fecha', 'Total');
    // Carga de datos
    $result = $detalle->getVentas22();

    $pdf->AliasNbPages();
    $pdf->AddPage();

    $pdf->SetFont('Arial','',12);
    $pdf->ImprovedTable($header,$result);
    $pdf->Output('i');
?>