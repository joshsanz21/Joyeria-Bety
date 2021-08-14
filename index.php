<?php
require "fpdf.php";
require_once("../bd/conexion.php");
class PDF extends FPDF{
  function Header()
{
    // Logo     el 8 define el tama�o el 10 es un tab, el 8 es lineas
    $this->Image('bety.jpeg',10,8,30);
    $this->Image('bety1.jpeg',170,8,30);
}
}
//CREACION DE LA HOJA
//$years=$_GET['years'];
$pdf = new PDF('P', 'mm','Letter');
$pdf->setMargins(60,18);
$pdf->AliasNbPages();
$pdf->AddPage();

//TITULO
$pdf->SetTextColor(0x00,0x00,0x00);
$pdf->SetFont('Arial','b',7);
$pdf->Cell(0,5,'JOYERIA BETY',0,1,'C');
$pdf->Cell(0,5,'PROVEEDORES REGISTRADOS ',0,1,'C');


  $pdf->Ln();

  
 
  $pdf->Ln();
  
  //1 indica borde, 0 no hace salto de linea, c es centrado

$result=mysqli_query($link, "select nombre,telefono,direccion from proveedor"); 

  
//$result = mysql_query($consulta);
$pdf->Ln();
    //aqui agregue las cabeceras de las tablas
    $pdf->Cell(30,5, "NOMBRE",1,0,'C');
    $pdf->Cell(30,5, "TELEFONO",1,0,'C');
    $pdf->Cell(30,5, "DIRECCION",1,0,'C');
while($row = mysqli_fetch_array($result)){ 
    $pdf->Ln();
   
    $pdf->Cell(30,5, $row['nombre'],1,0,'C');
    $pdf->Cell(30,5, $row['telefono'],1,0,'C');
    $pdf->Cell(30,5, $row['direccion'],1,0,'C');
 
 
    //$exec=mysql_query($consulta); 


  
  }  

  mysqli_close($link);
$pdf->Output();
?>