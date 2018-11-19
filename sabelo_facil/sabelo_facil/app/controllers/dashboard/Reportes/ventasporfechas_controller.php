<?php
    require_once("../../app/models/database.class.php");
    include('../../app/views/dashboard/reportes/ventasfechas_view.php');
    require_once("../../app/helpers/validator.class.php");
    require_once("../../app/models/carrito.class.php");

    $detalle = new Detalle;


    $fechainicio = ($_GET['fechainicio']);
    $fechafin = ($_GET['fechafin']);
    // Creacion del objeto de la clase heredada
    $pdf = new PDF('P', 'mm', 'A4');

    
    

    $pdf->setTitle('Reporte de ventas desde '.$fechainicio .' al '.$fechafin);
    $pdf->setMargins(10, 10, 10,10);
    // T�tulos de las columnas
    $header = array('No. venta','Nombre', 'Apellido', 'correo', 'fecha', 'Total');
    // Carga de datos
    $result = $detalle->getVentasporfecha($fechainicio,$fechafin);

    $pdf->AliasNbPages();
    $pdf->AddPage();

    $pdf->SetFont('Arial','',12);
    $pdf->ImprovedTable($header,$result);
    $pdf->Output('i');
?>