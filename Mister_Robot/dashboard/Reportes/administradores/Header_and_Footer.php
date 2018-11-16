
<?php
	require '../../../app/libraries/fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('../../../web/img/logo.png', 5, 5, 30 );
			$this->SetFont('Arial','',15);
			$this->Cell(30);
            $this->Cell(120,10, 'Reporte De Administradores',0,0,'C');
            $this->SetY(+15);
            $this->SetFont('Arial','',12);
            $this->Cell(180,10, 'Lista completa de trabajadores registrados en el sistema',0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Sabelo facil Reports |  Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>