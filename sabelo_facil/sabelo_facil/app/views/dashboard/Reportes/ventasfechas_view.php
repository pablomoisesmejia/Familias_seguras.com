<?php
    require("../../app/libraries/fpdf/fpdf.php");

    class PDF extends FPDF
    {
        // Cabecera de p�gina
        function Header()
        {

            $fechainicio = ($_GET['fechainicio']);
            $fechafin = ($_GET['fechafin']);

            // Logo
            $this->Image('../../web/img/logos/sabelofacil-black.png',12,8,23);
            // Arial bold 15
            $hoy = getdate();
            $this->SetFont('Arial','',12);
            $this->SetXY(85,15);
            $this->Cell(45,5,"Telefono: 2235-1245",0,1,"C");
            $this->SetXY(85,20);
            $this->Cell(45,5,"Correo: sabelofacil@gmail.com",0,1,"C");
            $this->SetXY(85,22);
            $this->Cell(45,10,'Fecha generado : '.$hoy['mday'].'/'.$hoy['mon'].'/'.$hoy['year'],0,0,"C");
            $this->SetXY(85,27);
            // $this->Cell(45,10,'Generado por : '.$_GET['nombre'].' '.$_GET['apellido'].' ',0,0,"C");
            $this->Line(12,39,198,39);
            $this->SetXY(90,40);
            $this->SetFont('Arial','B',15);
            // titulo de el reporte

                 $this->Cell(35,10,'Reporte de ventas desde '.$fechainicio .' al '.$fechafin,0,0,"C");
            // Salto de linea 
            $this->Ln(15);
        }
        // Pie de p�gina
        function Footer()
        {
            
            // Posici�n: a 1,5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // N�mero de p�gina
            $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
        }
        // Una tabla m�s completa
        function ImprovedTable($header, $result)
        {   
            $fecha = null;
            // Colores, ancho de línea y fuente en negrita
            $this->SetFillColor(77,135,235);
            $this->SetTextColor(255);
            $this->SetDrawColor(14,28,44);
            $this->SetLineWidth(.2);
            $this->SetFont('','');
            // Anchuras de las columnas
            $w = array(30, 30, 30, 45, 30,22);

            // Cabeceras
            for($i=0;$i<count($header);$i++)
                $this->Cell($w[$i],6, $header[$i] ,1,0,'C', true);

            $this->Ln();
            // Restauración de colores y fuentes
            $this->SetFillColor(214,214,214);
            $this->SetTextColor(0);
            $this->SetFont('');
            // Datos
            $fill = false;
            foreach($result as $row)
            {
                $fecha = date_create($row['fecha']);
                $this->Cell($w[0],6,$row['ventass'],'LR',0,'C',$fill);
                $this->Cell($w[1],6,$row['nombre'],'LR',0,'C',$fill);
                $this->Cell($w[2],6,$row['apellido'],'LR',0,'C',$fill);
                $this->Cell($w[3],6,$row['correo'],'LR',0,'C',$fill);
                $this->Cell($w[4],6,date_format($fecha, 'd-m-Y'),'LR',0,'C',$fill);
                $this->Cell($w[5],6,'$'.number_format($row['totalito'], 2),'LR',0,'C',$fill);
                
                $this->Ln();
                $fill = !$fill;
            }
            $this->Cell(array_sum($w),0,'','T');
        }
    }
?>