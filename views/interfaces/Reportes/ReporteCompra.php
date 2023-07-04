<?php
require('c:/xampp/htdocs/PiedraSports/fpdf/fpdf.php');

class ReporteCompra extends fpdf
{
    public function Header()
    {
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(0, 10, 'Reporte De Compra', 0, 1, 'C');
        $this->Ln(10);
    }

    public function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Página '.$this->PageNo().'/{nb}', 0, 0, 'C');
    }
    function Content() {
        // Consulta los datos y los almacena en un array
        $data = array(
            array('Precio', 'Fecha', 'Forma De Pago', 'Id Proveedor'),  
            array('Dato 1', 'Dato 2'),
            array('Dato 3', 'Dato 4')
        );

        // Configura la fuente y el tamaño
        $this->SetFont('Arial', '', 12);
        // Muestra los datos en forma de tabla
        foreach ($data as $row) {
            $this->Cell(40, 10, $row[0], 1);
            $this->Cell(40, 10, $row[1], 1);
            $this->Ln();
        }
    }
}
$reporte = new ReporteCompra();
$reporte->AddPage();
$reporte->Content();
$reporte->Output();