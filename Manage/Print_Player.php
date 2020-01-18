<?php
require('../fpdf/fpdf.php');
require_once'../connect.php';


class PDF extends FPDF
{

// Page header
function Header()
{
    // Logo
    $this->Image('../images/Header_Player.png',4,5,195);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    // $this->Cell(30,10,'Title',1,0,'C');
    // Line break
   
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',11);




                    $query = $conn->query("SELECT * FROM players WHERE  id= '$_REQUEST[id]' ") or die(mysqli_error());
                    $valid = $query->num_rows;
                    $fetch = $query->fetch_array();


$pdf->Image('../Photos/'.$fetch['image_name'],150,43,27);

// Dummy up
    $pdf->Cell(180,20,'',0,1);
// Team Name Line
    $pdf->Cell(65,10,'',0,0);
    $pdf->Cell(90,12,$fetch['Team_Name'],0,1);

// District 
    $pdf->Cell(65,10,'',0,0); 
    $pdf->Cell(90,12,$fetch['District'],0,1);

// Dummy 
$pdf->Cell(55,8,'',0,1);

// Name as in Passport
$pdf->Cell(55,8,'',0,0);
$pdf->Cell(120,9,$fetch['Name_in_Passport'],0,1);

// Passport No.
$pdf->Cell(55,13,'',0,0);
$pdf->Cell(41,13,$fetch['Passport_No'],0,0);

// Dummy
$pdf->Cell(31,13,'',0,0);

// Qatar id
$pdf->Cell(47,7,$fetch['Qatar_ID'],0,1);


// Dummy
$pdf->Cell(127,6,'',0,0);

// Validity
$pdf->Cell(47,6,$fetch['Validity'],0,1);


// Name of the posport
$pdf->Cell(55,8,'',0,0);
$pdf->Cell(120,8,$fetch['Name_of_Sponsor'],0,1);

// Date of Birth
$pdf->Cell(55,7,'',0,0);
$pdf->Cell(41,7,$fetch['Date_of_Birth'],0,0);

// Tel No Doha
$pdf->Cell(27,6,'',0,0);
$pdf->Cell(52,7,$fetch['Tel'],0,1);

// Address
$pdf->Cell(55,22,'',0,0);
// $pdf->Cell(120,22,$fetch['Address'],0,1, 'L', 1);
$pdf->MultiCell( 119, 7, $fetch['Address'], 0);




$pdf->Output();
?>