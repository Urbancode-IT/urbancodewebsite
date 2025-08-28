<?php
// Include mPDF library

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('memory_limit', '1024M'); // Set memory limit to 1024 megabytes (adjust as needed)

require('fpdf.php');


// User-submitted data (replace with actual form data)
$name = $_POST['ban-name']; // User's name
$phone = $_POST['ban-phone']; // User's phone number

$currentDate = date('d-m-Y');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

$pdf->Image('e-certificate.jpg', 0, 0, 200);
//$pdf->Cell(0, 10, 'Certificate of Participation', 0, 1, 'C');
//$pdf->Ln(10);
//$pdf->Cell(0, 10, 'This is to certify that', 0, 1, 'C');
$pdf->SetXY(75, 123);
$pdf->Cell(0, 10, $name, 0, 1, 'C');
$pdf->SetXY(30, 195);
$pdf->Cell(0, 10, $currentDate, 0, 1, 'L');

//$pdf->Ln(10);
//$pdf->Cell(0, 10, 'has participated in our event.', 0, 1, 'C');
//$pdf->Ln(10);
//$pdf->Cell(0, 10, 'Phone: ' . $phone, 0, 1, 'C');

if($name!=""&&$phone!="")
{
$pdf->Output('certificate.pdf', 'D'); // 'D' forces download
header('Location: certificate-download?cdown=success');

}
else
{
header('Location: certificate-download?cdown=nvalue');
}
?>