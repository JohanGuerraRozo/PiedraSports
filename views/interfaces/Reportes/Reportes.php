<?php
require('c:/xampp/htdocs/PiedraSports/fpdf/fpdf.php');
include('c:/xampp/htdocs/PiedraSports/config/concompra.php');

class ReporteCompra extends fpdf
{
    public function Header()
    {
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(0, 10, 'Titulo del Reporte', 0, 1, 'C');
        $this->Ln(10);
    }

    public function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Página '.$this->PageNo().'/{nb}', 0, 0, 'C');
    }
}

$pdf = new ReporteCompra();
$pdf->AliasNbPages();

$pdf->AddPage();

$datos = obtenerDatosDelReporte();

$pdf->SetFont('Arial','',12);
$pdf->cell(40,10,'precio', 1);
$pdf->cell(40,10,'fecha', 1);
$pdf->cell(40,10,'formadepago', 1);
$pdf->cell(40,10,'idproveedor', 1);
$pdf->Ln();

$pdf->SetFont('Arial','',12);
foreach ($datos as $fila) {
    $pdf->Cell(40,10, $fila['precio'],1);
    $pdf->Cell(40,10, $fila['fecha'],1);
    $pdf->Cell(40,10, $fila['formadepago'],1);
    $pdf->Cell(40,10, $fila['idproveedor'],1);
    $pdf ->Ln();
}

$pdf->Content();
$pdf->Output();