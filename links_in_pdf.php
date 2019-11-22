<?php
require('fpdf.php');
$pdf = new FPDF();
//First page
$pdf->addPage();
$pdf->setFont('Times','B',14);
$pdf->write(5,"for a link to the next page - click");
$pdf->setFont('Times','U');
$pdf->setTextColor(0,0,255);
$linkToPage2 = $pdf->addLink();
$pdf->write(5,"here",$linkToPage2);
$pdf->setFont('');

//Second Page
$pdf->addPage();
$pdf->setLink($linkToPage2);
$pdf->image("google.png",10,10,30,0,'',"http://www.google.com");
$pdf->ln(20);
$pdf->setTextColor(205,300,0);
$pdf->cell(0,5,"click the following link,or click on the image",0,1,'L');
$pdf->setFont('','U');
$pdf->setTextColor(0,0,255);
$pdf->write(5,"Social Networking","http://www.facebook.com");
$pdf->output();