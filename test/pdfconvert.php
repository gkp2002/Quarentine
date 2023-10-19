<?php
if(!empty($_POST['submit']))
{
$roll= $_POST['rollno'];
$f_name= $_POST['firstname'];
$l_name= $_POST['lastname'];
$email= $_POST['email'];

require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","",16);
$pdf->Cell(0,10,"Registartion Details",1,1,'C');
$pdf->Cell(20,10,"Roll No.",1,0);
$pdf->Cell(45,10,"firstName",1,0);
$pdf->Cell(45,10,"Last name",1,0);
$pdf->Cell(0,10,"Email",1,0);

$pdf->Cell(20,10,$roll,1,0);
$pdf->Cell(45,10,$f_name,1,0);
$pdf->Cell(45,10,$l_name,1,0);
$pdf->Cell(0,10,$email,1,0);

$file = time().'.pdf';
$pdf->output($file,'D');
}
?>
