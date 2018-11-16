<?php
	include 'Header_and_Footer.php';
	require '../../../app/models/database.class.php';
	
	$query = "SELECT nombre,apellido,username,correo,documento from administrador";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(30,6,'nombre',1,0,'C',1);
	$pdf->Cell(30,6,'apellido',1,0,'C',1);
	$pdf->Cell(40,6,'username',1,0,'C',1);
	$pdf->Cell(50,6,'correo',1,0,'C',1);
	$pdf->Cell(30,6,'documento',1,1,'C',1);
	
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(30,6,utf8_decode($row['nombre']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['apellido']),1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['username']),1,0,'C');
		$pdf->Cell(50,6,utf8_decode($row['correo']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['documento']),1,1,'C');
		

	}
	$pdf->Output();
?>