<?php
	include 'Header_and_Footer.php';
	require '../../../app/models/database.class.php';
	
	$query = "SELECT nombre,apellido,username,correo,documento,imagen_url,direccion,documento,fecha_nac from administrador where ID_admin=4";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	
	
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		
		$pdf->Image('../../../web/img/usuarios/pablo.jpg', 68, 38,120 );

		$pdf->SetFont('Arial','',19);
		$pdf->SetY(+38);
		$pdf->SetX(+26);
		$pdf->Cell(30,6,utf8_decode($row['nombre']),0,1,'L');
		$pdf->SetFont('Arial','',12);
		
		$pdf->SetY(+44);
		$pdf->SetX(+26);
		$pdf->Cell(30,6,utf8_decode($row['apellido']),0,0,'L');

		$pdf->SetY(+49);
		$pdf->SetX(+26);
		$pdf->Cell(30,6,utf8_decode($row['fecha_nac']),0,0,'L');

		$pdf->SetY(+54);
		$pdf->SetX(+26);
		$pdf->Cell(30,6,utf8_decode($row['documento']),0,0,'L');

		$pdf->SetY(+100);
		$pdf->SetX(+26);
		$pdf->Cell(30,6,utf8_decode($row['correo']),0,0,'L');

		$pdf->SetY(+94);
		$pdf->SetX(+26);
		$pdf->Cell(30,6,utf8_decode($row['username']),0,0,'L');

		$pdf->SetY(+104);
		$pdf->SetX(+26);
		$pdf->Cell(30,6,utf8_decode($row['direccion']),0,0,'L');
	
		

	}
	$pdf->Output();
?>