<?php
    require("../../app/libraries/fpdf/fpdf.php");

    class PDF extends FPDF
    {
        // Cabecera de pigina
        function Header()
        {

            $fechainicio = ($_GET['fechainicio']);
            $fechafin = ($_GET['fechafin']);

            // imagen de empresa
            $this->Image('../../web/img/logos/sabelofacil-black.png',12,8,23);
            // 
            $fecha = getdate();
            $this->SetFont('Arial','',12);
            $this->SetXY(85,15);
            $this->Cell(45,5,"Telefono: 2235-1245",0,1,"C");
            $this->SetXY(85,20);
            $this->Cell(45,5,"Correo: sabelofacil@gmail.com",0,1,"C");
            $this->SetXY(85,22);
            $this->Cell(45,10,'Fecha generado : '.$fecha['mday'].'/'.$fecha['mon'].'/'.$fecha['year'],0,0,"C");
            $this->SetXY(85,27);
            // $this->Cell(45,10,'Generado por : '.$_GET['nombre'].' '.$_GET['apellido'].' ',0,0,"C");
            $this->Line(12,39,198,39);
            $this->SetXY(90,40);
            $this->SetFont('Arial','B',12);
            // titulo de el reporte            
            $this->Cell(35,10,'Membresias entre la fecha de  '.$fechainicio .' al '.$fechafin,0,0,"C");
            // Salto de linea 
            $this->Ln(15);
        }
        // pie de pagina para informacion de paginas
        function Footer()
        {
            
            // se Posiciona abajo 
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // numero de pagina a imprimi
            $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
        }
        // se declara la tabla
        function ImprovedTable($header, $result)
        {   
            $fecha = null;
            // colores y ancho de linea
            $this->SetFillColor(77,135,235);
            $this->SetTextColor(255);
            $this->SetDrawColor(14,28,44);
            $this->SetLineWidth(.2);
            $this->SetFont('','');
            // Anchuras de las columnas
            $w = array(30, 30, 40, 45, 30);

            // cabeceras de el reporte
            for($i=0;$i<count($header);$i++)
                $this->Cell($w[$i],6, $header[$i] ,1,0,'C', true);

            $this->Ln();
            // se regresan los colores anteriores 
            $this->SetFillColor(214,214,214);
            $this->SetTextColor(0);
            $this->SetFont('');
            // datos a imprimir
            $fill = false;
            foreach($result as $row)
            {
                $fecha = date_create($row['fecha_inicio']);
                $this->Cell($w[0],6,$row['nombre'],'LR',0,'C',$fill);
                $this->Cell($w[1],6,$row['apellido'],'LR',0,'C',$fill);
                $this->Cell($w[2],6,$row['correo'],'LR',0,'C',$fill);
                $this->Cell($w[3],6,$row['FK_ID_membresia'],'LR',0,'C',$fill);
                $this->Cell($w[4],6,date_format($fecha, 'd-m-Y'),'LR',0,'C',$fill);
                
                $this->Ln();
                $fill = !$fill;
            }
            $this->Cell(array_sum($w),0,'','T');
        }
    }
?>