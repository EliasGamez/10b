<?php
	
	require 'fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('../imagenes/logo.png', 10, 5, 25 );
			$this->Image('../imagenes/titulo.png', 160, 5, 35 );
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10, 'Informe BI de test informativos',0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>