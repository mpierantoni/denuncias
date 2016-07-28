<?php
require('./fpdf181/fpdf.php');

//fpdf.php

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','BUI',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'ACTA DENUNCIA - ROBO/HURTO AUTOS:',0,0,'C');
    
    $this->SetFont('Arial','',15);   
    $this->Cell(100,10,' "@001"',0,0,'C');    
    // Salto de línea
    $this->Ln(10);
    
    $this->SetFont('Arial','BI',15);
    $this->Cell(80);
    $this->Cell(30,10,'EXPTE: @004',0,0,'C');
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'ACTA DE DENUNCIA PENAL DE: @031',0,1);
$pdf->Ln(10);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,'En la ciudad de viedma...',0,1);
    
$pdf->Output();

?>
