<?php
    require ('./conexion.php');
    require('./PDF_modifier.php');

    $saya_pdf = new PDF_modifier();

    $saya_pdf->AddPage('P', 'Letter', 0);
    $saya_pdf->SetFont('Arial', 'B', 16);
    $saya_pdf->Cell(65);
    $saya_pdf->Cell(50,10, 'Informe General', 0, 0, 'C');
    $saya_pdf->Line(10, 25, 200, 25);



    $saya_pdf->Ln(20);
    $saya_pdf->SetFont('Arial', 'B', 10);
    $saya_pdf->Cell(45,20, 'Usuario', 0, 0, 'C');
    $saya_pdf->Cell(45,20, 'Rol', 0, 0, 'C');
    $saya_pdf->Cell(45,20, 'Clave', 0, 0, 'C');
    $saya_pdf->Cell(45,20, 'Permisos', 0, 0, 'C');
    $saya_pdf->Line(10, 50, 200, 50);

    $datos=conexion();
    $datos=$datos->query('SELECT * FROM usuarios');
    if ($datos->rowCount() > 0) {
        $datos=$datos->fetchAll();
        foreach ($datos as $dato) {
            $saya_pdf->Ln(10);
            $saya_pdf->SetFont('Arial', '', 10);
            $saya_pdf->Cell(45,20, $dato['Nombre'], 0, 0, 'C');
            $saya_pdf->Cell(45,20, $dato['Rol'], 0, 0, 'C');
            $saya_pdf->Cell(45,20, $dato['Clave'], 0, 0, 'C');
            $saya_pdf->Cell(45,20, $dato['Permisos'], 0, 0, 'C');
        }
    }
    $datos=null;




    $saya_pdf->Output('I', 'salidasaya.pdf');

