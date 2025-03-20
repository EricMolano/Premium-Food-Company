<?php require('fpdf/fpdf.php');
require '../model/database.php'; // Asegúrate de que el archivo de conexión se llama 'database.php' y está en la carpeta 'model' 


class PDF extends FPDF
{
    // Cabecera de página function Header()
    function Header()
    {
        // Logo
      //  $this->Image('../images/paciente.jpg', 10, 8, 33);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Título
        $this->Cell(0, 10, 'Reporte Pedidos a domicilio', 0, 0, 'C');
        // Salto de línea
        $this->Ln(20);
        $this->Ln(20);
        $this->SetFillColor(0, 0, 255);
        $this->Cell(15, 15, 'ubicacion', 1, 0, 'c', 1);
        $this->Cell(15, 15, 'fechaPedido	', 1, 0, 'c', 1);
        $this->Cell(15, 15, 'horaPedido', 1, 1, 'c', 1);
        $this->Cell(15, 15, 'pedid0', 1, 1, 'c', 1);
        $this->Cell(15, 15, 'cantidad', 1, 1, 'c', 1);
        $this->Cell(15, 15, 'instrucciones', 1, 1, 'c', 1);
        $this->Cell(15, 15, 'pago', 1, 1, 'c', 1);



    }


    // Pie de página function Footer()
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 12);
        // Número de página
        $this->Cell(0, 10, utf8_decode('Página') . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}
$pdo = Database::StartUp();
$consulta ="select*from pedidos";
$resultado=$pdo->query($consulta);


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {


    $pdf->Cell(15, 15, $row['ubicacion'], 1, 0, 'c', 0);
    $pdf->Cell(15, 15, $row['fechaPedido'], 1, 0, 'c', 0);
    $pdf->Cell(15, 15, $row['horaPedido'], 1, 1, 'c', 0);
    $pdf->Cell(15, 15, $row['pedid0'], 1, 0, 'c', 0);
    $pdf->Cell(15, 15, $row['cantidad'], 1, 0, 'c', 0);
    $pdf->Cell(15, 15, $row['instrucciones'], 1, 0, 'c', 0);
    $pdf->Cell(15, 15, $row['pago'], 1, 0, 'c', 0);

  

}
$pdf->Output();
?>