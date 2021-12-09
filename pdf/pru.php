<?php
	include 'plantilla.php';
	// require 'conexion.php';
    $conexion=mysqli_connect('localhost','root','','cuestionarios');

    $nivel = $_POST['nivel'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];
	
	$sql="SELECT COUNT(Estado),COUNT(Rasgo) FROM ansiedad A INNER JOIN usuarios U ON A.Id_usuario = U.Id_usuario 
    WHERE A.Fecha BETWEEN '$fecha_inicio' AND '$fecha_fin' AND U.Nivel = $nivel";
    $result=mysqli_query($conexion,$sql);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(70,6,'ESTADO',1,0,'C',1);
	$pdf->Cell(20,6,'ID',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($mostrar=mysqli_fetch_row($result))
	{
		$pdf->Cell(70,6,utf8_decode($mostrar['Estado']),1,0,'C');
		$pdf->Cell(20,6,$mostrar['Rasgo'],1,0,'C');
	}
	$pdf->Output();
?>