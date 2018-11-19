<?php
    require("../../app/libraries/fpdf/fpdf.php");

    class PDF extends FPDF
    {
        // Cabecera de pagina
        function Header()
        {
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
            $this->Cell(45,10,'Fecha : '.$hoy['mday'].'/'.$hoy['mon'].'/'.$hoy['year'],0,0,"C");
            $this->SetXY(85,27);
            $this->Cell(45,10,'Cliente : '.$_GET['nombre'].' '.$_GET['apellido'].' ',0,0,"C");
            $this->Line(12,39,198,39);
            $this->SetXY(90,40);
            $this->SetFont('Arial','B',18);
            // titulo de el reporte
            $this->Cell(35,10,'Factura Comercial',0,0,'C');
            // Salto de l�nea
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
            
            $total = null;
            $fecha = null;
            // Colores, ancho de línea y fuente en negrita
            $this->SetFillColor(253,93,93);
            $this->SetTextColor(255);
            $this->SetDrawColor(14,28,44);
            $this->SetLineWidth(.2);
            $this->SetFont('','');
            // Anchuras de las columnas
            $w = array(30, 75, 35, 45);

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
                $this->Cell($w[0],6,$row['cantidad'],'LR',0,'C',$fill);
                $this->Cell($w[1],6,$row['nombre_producto'],'LR',0,'C',$fill);
                $this->Cell($w[2],6,$row['precio'],'LR',0,'C',$fill);
                $this->Cell($w[3],6,$row['sub_total'],'LR',1,'C',$fill);
                
                
                
                $fill = !$fill;
            }
            // L�nea de cierre
            $this->Cell(array_sum($w),0,'','T');
            
            
        }
        // se abre otra tabla para el precio 
        function FancyTable($header2,$datass)
        {
        // Colores, ancho de línea y fuente en negrita
        $this->SetFillColor(255,0,0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128,0,0);
        $this->SetLineWidth(.3);
        $this->SetFont('','B');
        // Cabecera
        $this->SetX(150);
        $w = array(45);
        for($i=0;$i<count($header2);$i++)
            $this->Cell($w[$i],7,$header2[$i],1,0,'C',true);
        $this->Ln();
        // Restauración de colores y fuentes
        $this->SetFillColor(224,235,255);
        $this->SetTextColor(0);
        $this->SetFont('');
        
            // se pone en la posicion de x
        $this->SetX(150);
        
        // Datos
        $fill = false;
        foreach($datass as $row)
        {
            $this->Cell($w[0],6,'$'.$row['codo'],'',1,0,'C',$fill);
            
            
            $fill = !$fill;
        }
        // Línea de cierre
        
        }

        
    }
?>