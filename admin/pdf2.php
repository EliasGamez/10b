<?php
	include '../pdf/plantilla.php';
	require '../pdf/conexion.php';

    $carrera = $_POST['carrera'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);

	$pdf->Cell(180,20,'Resultados por programa educativo',1,1, 'C',1);
	$pdf->Cell(180,10,utf8_decode('El reporte se realizó en el periodo de "'.$fecha_inicio.'" al "'.$fecha_fin.'"'),1,1, 'C');
	
	$pdf->Cell(180,6,' ',0,1, 'C');
	$pdf->Cell(180,6,'ANSIEDAD',1,1, 'C', 1);
	$pdf->Cell(65,6,'Escala Andiedad de Estado',1,0, 'C',1);
	$pdf->Cell(25,6,utf8_decode('N. alumnos'),1,0,'C',1);
	$pdf->Cell(65,6,'Escala Ansiedad de Rasgo',1,0, 'C',1);
    $pdf->Cell(25,6,utf8_decode('N. alumnos'),1,1,'C',1);
	
	// $pdf->SetFont('Arial','',10);

	$query = "SELECT DISTINCT Estado,Rasgo,COUNT(Estado) AS cEstado,COUNT(Rasgo) AS cRasgo FROM `ansiedad` A 
	INNER JOIN usuarios U ON A.Id_usuario = U.Id_usuario WHERE A.Fecha BETWEEN '$fecha_inicio'
	AND '$fecha_fin' AND U.Carreras = '$carrera' GROUP BY Estado";
	$resultado = $mysqli->query($query);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(65,6,$row['Estado'],1,0,'C');
        $pdf->Cell(25,6,$row['cEstado'],1,0,'C');
        $pdf->Cell(65,6,$row['Rasgo'],1,0,'C');
		$pdf->Cell(25,6,$row['cRasgo'],1,1,'C');
	}

	$query2 = "SELECT DISTINCT Rango,COUNT(Rango) AS cRango FROM depresion D 
	INNER JOIN usuarios U ON D.Id_usuario = U.Id_usuario
	WHERE D.Fecha BETWEEN '$fecha_inicio' AND '$fecha_fin' AND U.Carreras = '$carrera' GROUP BY Rango";
	$resultado2 = $mysqli->query($query2);

	$pdf->Cell(180,6,' ',0,1, 'C');
	$pdf->Cell(180,6,utf8_decode('DEPRESIÓN'),1,1, 'C', 1);
	$pdf->Cell(90,6,utf8_decode('Tipo de Rango Depresión'),1,0, 'C',1);
	$pdf->Cell(90,6,utf8_decode('N. alumnos'),1,1, 'C',1);

	while($row2 = $resultado2->fetch_assoc())
	{
		$pdf->Cell(90,6,$row2['Rango'],1,0,'C');
        $pdf->Cell(90,6,$row2['cRango'],1,1,'C');
	}

	$query3 = "SELECT DISTINCT Cantidad_profunda,Cantidad_ren,Cantidad_super,COUNT(Cantidad_profunda) AS cP,
	COUNT(Cantidad_ren) AS cR,COUNT(Cantidad_super) AS cS FROM motivacion_aprendizaje M  
	INNER JOIN usuarios U ON M.Id_usuario = U.Id_usuario
	WHERE M.Fecha BETWEEN '$fecha_inicio' AND '$fecha_fin' AND U.Carreras = '$carrera' GROUP BY Cantidad_profunda";
	$resultado3 = $mysqli->query($query3);

	$pdf->Cell(180,6,' ',0,1, 'C');
	$pdf->Cell(180,6,utf8_decode('MOTIVACIÓN ADADÉMICA'),1,1, 'C', 1);
	$pdf->Cell(60,6,utf8_decode('Motivación profunda'),1,0, 'C',1);
	$pdf->Cell(30,6,utf8_decode('N. alumnos'),1,0, 'C',1);
	$pdf->Cell(60,6,utf8_decode('Motivación de rendimiento'),1,0, 'C',1);
	$pdf->Cell(30,6,utf8_decode('N. alumnos'),1,1, 'C',1);

	while($row3 = $resultado3->fetch_assoc())
	{
		$pdf->Cell(60,6,$row3['Cantidad_profunda'],1,0,'C');
        $pdf->Cell(30,6,$row3['cP'],1,0,'C');
		$pdf->Cell(60,6,$row3['Cantidad_ren'],1,0,'C');
		$pdf->Cell(30,6,$row3['cR'],1,1,'C');
	}

	$query4 = "SELECT DISTINCT Cantidad_profunda,Cantidad_ren,Cantidad_super,COUNT(Cantidad_profunda) AS cP,
	COUNT(Cantidad_ren) AS cR,COUNT(Cantidad_super) AS cS FROM motivacion_aprendizaje M  
	INNER JOIN usuarios U ON M.Id_usuario = U.Id_usuario
	WHERE M.Fecha BETWEEN '$fecha_inicio' AND '$fecha_fin' AND U.Carreras = '$carrera' GROUP BY Cantidad_profunda";
	$resultado4 = $mysqli->query($query4);

	$pdf->Cell(90,6,utf8_decode('Motivación superficial'),1,0, 'C',1);
	$pdf->Cell(90,6,utf8_decode('N. alumnos'),1,1,'C',1);

	while($row4 = $resultado4->fetch_assoc())
	{
        $pdf->Cell(90,6,$row4['Cantidad_super'],1,0,'C');
		$pdf->Cell(90,6,$row4['cS'],1,1,'C');
	}

	$query5 = "SELECT AVG(Porcentaje_activo) AS P 
	FROM estilo_aprendizaje E INNER JOIN usuarios U ON E.Id_usuario = U.Id_usuario
	WHERE E.Fecha BETWEEN '$fecha_inicio' AND '$fecha_fin' AND U.Carreras = '$carrera'";
	$resultado5 = $mysqli->query($query5);

	$pdf->Cell(180,6,' ',0,1, 'C');
	$pdf->Cell(180,6,utf8_decode('ESTILO DE APRENDIZAJE'),1,1, 'C', 1);
	$pdf->Cell(90,6,utf8_decode('Estilo Activo'),1,0, 'L',1);
	$pdf->Cell(90,6,'Porcentaje general',1,1,'C',1);

	while($row5 = $resultado5->fetch_assoc())
	{
        $pdf->Cell(90,6,'Porcentaje de los alumnos es:',1,0,'R');
		$pdf->Cell(90,6,number_format($row5['P'],2).'%',1,1,'C');
	}

	$query6 = "SELECT AVG(Porcentaje_reflex) AS P 
	FROM estilo_aprendizaje E INNER JOIN usuarios U ON E.Id_usuario = U.Id_usuario
	WHERE E.Fecha BETWEEN '$fecha_inicio' AND '$fecha_fin' AND U.Carreras = '$carrera'";
	$resultado6 = $mysqli->query($query6);

	$pdf->Cell(90,6,utf8_decode('Estilo Reflexivo'),1,0, 'L',1);
	$pdf->Cell(90,6,'Porcentaje general',1,1,'C',1);

	while($row6 = $resultado6->fetch_assoc())
	{
		$pdf->Cell(90,6,'Porcentaje de los alumnos es:',1,0,'R');
		$pdf->Cell(90,6,number_format($row6['P'],2).'%',1,1,'C');
	}

	$query7 = "SELECT AVG(Porcentaje_teo) AS P 
	FROM estilo_aprendizaje E INNER JOIN usuarios U ON E.Id_usuario = U.Id_usuario
	WHERE E.Fecha BETWEEN '$fecha_inicio' AND '$fecha_fin' AND U.Carreras = '$carrera'";
	$resultado7 = $mysqli->query($query7);

	$pdf->Cell(90,6,utf8_decode('Estilo Teórico'),1,0, 'L',1);
	$pdf->Cell(90,6,'Porcentaje general',1,1,'C',1);

	while($row7 = $resultado7->fetch_assoc())
	{
		$pdf->Cell(90,6,'Porcentaje de los alumnos es:',1,0,'R');
		$pdf->Cell(90,6,number_format($row7['P'],2).'%',1,1,'C');
	}

	$query8 = "SELECT AVG(Porcentaje_prag) P
	FROM estilo_aprendizaje  E INNER JOIN usuarios U ON E.Id_usuario = U.Id_usuario
	WHERE E.Fecha BETWEEN '$fecha_inicio' AND '$fecha_fin' AND U.Carreras = '$carrera'";
	$resultado8 = $mysqli->query($query8);

	$pdf->Cell(90,6,utf8_decode('Estilo Pragmático'),1,0, 'L',1);
	$pdf->Cell(90,6,'Porcentaje general',1,1,'C',1);

	while($row8 = $resultado8->fetch_assoc())
	{
		$pdf->Cell(90,6,'Porcentaje de los alumnos es:',1,0,'R');
		$pdf->Cell(90,6,number_format($row8['P'],2).'%',1,1,'C');
	}

	$query9 = "SELECT AVG(Visual) AS P 
	FROM canal_aprendizaje C INNER JOIN usuarios U ON C.Id_usuario = U.Id_usuario
	WHERE C.Fecha BETWEEN '$fecha_inicio' AND '$fecha_fin' AND U.Carreras = '$carrera'";
	$resultado9 = $mysqli->query($query9);

	$pdf->Cell(180,6,' ',0,1, 'C');
	$pdf->Cell(180,6,utf8_decode('CANAL DE APRENDIZAJE'),1,1, 'C', 1);
	$pdf->Cell(90,6,utf8_decode('Canal Visual'),1,0, 'L',1);
	$pdf->Cell(90,6,'Porcentaje general',1,1,'C',1);

	while($row9 = $resultado9->fetch_assoc())
	{
        $pdf->Cell(90,6,'Porcentaje de los alumnos es:',1,0,'R');
		$pdf->Cell(90,6,number_format($row9['P'],2).'%',1,1,'C');
	}

	$query10 = "SELECT AVG(Visual) AS P 
	FROM canal_aprendizaje C INNER JOIN usuarios U ON C.Id_usuario = U.Id_usuario
	WHERE C.Fecha BETWEEN '$fecha_inicio' AND '$fecha_fin' AND U.Carreras = '$carrera'";
	$resultado10 = $mysqli->query($query10);

	$pdf->Cell(90,6,utf8_decode('Canal Auditivo'),1,0, 'L',1);
	$pdf->Cell(90,6,'Porcentaje general',1,1,'C',1);

	while($row10 = $resultado10->fetch_assoc())
	{
		$pdf->Cell(90,6,'Porcentaje de los alumnos es:',1,0,'R');
		$pdf->Cell(90,6,number_format($row10['P'],2).'%',1,1,'C');
	}

	$query11 = "SELECT AVG(Visual) AS P 
	FROM canal_aprendizaje C INNER JOIN usuarios U ON C.Id_usuario = U.Id_usuario
	WHERE C.Fecha BETWEEN '$fecha_inicio' AND '$fecha_fin' AND U.Carreras = '$carrera'";
	$resultado11 = $mysqli->query($query11);

	$pdf->Cell(90,6,utf8_decode('Canal Kinestésico'),1,0, 'L',1);
	$pdf->Cell(90,6,'Porcentaje general',1,1,'C',1);

	while($row11 = $resultado11->fetch_assoc())
	{
		$pdf->Cell(90,6,'Porcentaje de los alumnos es:',1,0,'R');
		$pdf->Cell(90,6,number_format($row11['P'],2).'%',1,1,'C');
	}
	
	$pdf->Output();
?>