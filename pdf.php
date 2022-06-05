<?php
require('C:\AppServ\www\Computer Store\fpdf\fpdf.php');
date_default_timezone_set("America/Bogota");
//creando las variables para crear la base de datos
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad36";

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Georgia','B',16);
// $pdf->Image('../img/logo.png',10,10,-150);
$pdf->Ln(20);
$pdf->Cell(90,20,'Fecha: '.date('d.m.Y.H.i.s').'',0);
$pdf->Ln(20);
$pdf->Cell(100,20,utf8_decode('COMPUTER STORE - REPORTE DE INVENTARIO'));
$pdf->Ln(20);
$pdf->SetFont('Georgia','B',12);
$pdf->Cell(20,20,'CODIGO');
$pdf->Cell(25,20,'NOMBRE');
$pdf->Cell(25,20,'MARCA');
$pdf->Cell(30,20,'PRECIO');
$pdf->Cell(25,20,'CANTIDAD');
$pdf->Ln(20);
$pdf->SetFont('Georgia','',12);
//creando la conexion 
$conexion = mysqli_connect($servername,$username,$password,$dbname);
//checkeando la conexion 
if (!$conexion){
 die("conexion fallida :" . mysqli_connect_error());
}
$query_select = 'SELECT * FROM bdunad36';
$result = mysqli_query($conexion,$query_select );
if (mysqli_num_rows($result) > 0) {
    // Colocando los datos en cada fila
    while($reg = mysqli_fetch_assoc($result)) {
    	


$pdf->Cell(20,20, $reg['codigo'], 0);

$pdf->Cell(25,20, utf8_decode($reg['nombre']), 0);

$pdf->Cell(25,20, utf8_decode($reg['marca']), 0);

$pdf->Cell(30,20, utf8_decode($reg['precio']), 0);

$pdf->Cell(25,20, utf8_decode($reg['cantidad']), 0);

$pdf->Ln(10);

}
}

$pdf->Output();
?>
