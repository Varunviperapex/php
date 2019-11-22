<?php
require('fpdf.php');
$pdf = new FPDF();

function Generatepdf($text1,$text2){
	global $pdf;
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(40,10,$text1,1,'C');
	$pdf->Ln();
	$pdf->Cell(60,10,$text2,1,1,'C');
}
$txt="";
Generatepdf('page 1',$txt); 
Generatepdf('page 2','page 2 text'); 
Generatepdf('page 3','page 3 text'); 
$pdf->output();