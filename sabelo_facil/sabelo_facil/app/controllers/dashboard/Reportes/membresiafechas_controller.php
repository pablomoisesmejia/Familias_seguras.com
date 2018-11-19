<?php
    require_once("../../app/models/database.class.php");
    include('../../app/views/dashboard/reportes/membresiafechas_view.php');
    require_once("../../app/helpers/validator.class.php");
    require_once("../../app/models/carrito.class.php");

    $detalle = new Detalle;

    // se declara variables de fecha
    $fechainicio = ($_GET['fechainicio']);
    $fechafin = ($_GET['fechafin']);
    // Creacion del objeto de la clase heredada
    $pdf = new PDF('P', 'mm', 'A4');

    $pdf->setTitle('Reporte de membresias desde '.$fechainicio .' al '.$fechafin);
    $pdf->setMargins(10, 10, 10,10);
    // nombres de la cabeceras de la tabla
    $header = array('Nombre','Apellido', 'Correo', 'No. membresia', 'fecha');
    // Carga de datos en el nuevo reporte
    $result = $detalle->getSuscripcionesporfecha($fechainicio,$fechafin);

    $pdf->AliasNbPages();
    $pdf->AddPage();

    $pdf->SetFont('Arial','',12);
    $pdf->ImprovedTable($header,$result);
    $pdf->Output('i');
?>