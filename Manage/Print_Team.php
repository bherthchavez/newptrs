<?php
require('../fpdf/fpdf.php');
require_once'../connect.php';


class PDF extends FPDF
{

// Page header
function Header()
{
    // Logo
    $this->Image('../images/Header_Team.png',4,5,195);
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
$pdf->SetFont('Arial','',10);




                    $query = $conn->query("SELECT * FROM team WHERE  id= '$_REQUEST[id]' ") or die(mysqli_error());
                    $valid = $query->num_rows;
                    $fetch = $query->fetch_array();




// Dummy up
    $pdf->Cell(180,24,'',0,1);


// Team Name Line
    $pdf->Cell(60,6.5,'',0,0);
    $pdf->Cell(120,6.5,$fetch['Team_Name'],0,1);

// district Line
    $pdf->Cell(60,6.5,'',0,0);
    $pdf->Cell(120,6.5,$fetch['District'],0,1);


// ORGANIZATION Line
    $pdf->Cell(60,6.5,'',0,0);
    $pdf->Cell(120,6.5,$fetch['Organization'],0,1);


// jersey Line
    $pdf->Cell(60,6.5,'',0,0);
    $pdf->Cell(120,6.5,$fetch['Jersey_Color'],0,1);


// Dummy up
    $pdf->Cell(180,8.2,'',0,1);


// player Line
    $pdf->Cell(45,6.5,'',0,0);
    $pdf->Cell(100,5.6,$fetch['Captain_Name'],0,1);

    // player Line
    $pdf->Cell(45,6.5,'',0,0);
    $pdf->Cell(130,5.2,$fetch['Player_2_Name'],0,1);


      // player Line
    $pdf->Cell(45,6.5,'',0,0);
    $pdf->Cell(130,5.2,$fetch['Player_3_Name'],0,1);

      // player Line
    $pdf->Cell(45,6.5,'',0,0);
    $pdf->Cell(130,5.1,$fetch['Player_4_Name'],0,1);

      // player Line
    $pdf->Cell(45,6.5,'',0,0);
    $pdf->Cell(130,5.2,$fetch['Player_5_Name'],0,1);


          // player Line
    $pdf->Cell(45,6.5,'',0,0);
    $pdf->Cell(130,5.1,$fetch['Player_6_Name'],0,1);


          // player Line
    $pdf->Cell(45,6.5,'',0,0);
    $pdf->Cell(130,5.1,$fetch['Player_7_Name'],0,1);


          // player Line
    $pdf->Cell(45,6.5,'',0,0);
    $pdf->Cell(130,5.0,$fetch['Player_8_Name'],0,1);


          // player Line
    $pdf->Cell(45,6.5,'',0,0);
    $pdf->Cell(130,5.0,$fetch['Player_9_Name'],0,1);


          // player Line
    $pdf->Cell(45,6.5,'',0,0);
    $pdf->Cell(130,5.0,$fetch['Player_10_Name'],0,1);


          // player Line
    $pdf->Cell(45,6.5,'',0,0);
    $pdf->Cell(130,5,$fetch['Player_11_Name'],0,1);


          // player Line
    $pdf->Cell(45,6.5,'',0,0);
    $pdf->Cell(130,5,$fetch['Player_12_Name'],0,1);


          // player Line
    $pdf->Cell(45,6.5,'',0,0);
    $pdf->Cell(130,5,$fetch['Player_13_Name'],0,1);



      // player Line
    $pdf->Cell(45,6.5,'',0,0);
    $pdf->Cell(130,5,$fetch['Player_14_Name'],0,1);



          // player Line
    $pdf->Cell(45,6.5,'',0,0);
    $pdf->Cell(130,5.0,$fetch['Player_15_Name'],0,1);



          // player Line
    $pdf->Cell(45,6.5,'',0,0);
    $pdf->Cell(130,5,$fetch['Player_16_Name'],0,1);


              // player Line
    $pdf->Cell(45,6.5,'',0,0);
    $pdf->Cell(130,5,$fetch['Player_17_Name'],0,1);


              // player Line
    $pdf->Cell(45,6.5,'',0,0);
    $pdf->Cell(130,5,$fetch['Player_18_Name'],0,1);


              // player Line
    $pdf->Cell(45,6.5,'',0,0);
    $pdf->Cell(130,5,$fetch['Player_19_Name'],0,1);


              // player Line
    $pdf->Cell(45,6.5,'',0,0);
    $pdf->Cell(130,5,$fetch['Player_20_Name'],0,1);


              // player Line
    $pdf->Cell(45,6.5,'',0,0);
    $pdf->Cell(130,5,$fetch['Player_21_Name'],0,1);


              // player Line
    $pdf->Cell(45,6.5,'',0,0);
    $pdf->Cell(130,5,$fetch['Player_22_Name'],0,1);


              // player Line
    $pdf->Cell(45,6.5,'',0,0);
    $pdf->Cell(130,5,$fetch['Player_23_Name'],0,1);


              // player Line
    $pdf->Cell(45,6.5,'',0,0);
    $pdf->Cell(130,5,$fetch['Player_24_Name'],0,1);


// line
$pdf->Cell(55,5,'',0,0);
$pdf->Cell(125,4,'',0,1);



// conact
$pdf->Cell(55,5,'',0,0);
$pdf->Cell(42,6.2,$fetch['Manager_Contact_No'],0,0);
$pdf->Cell(18,6.2,'',0,0);
$pdf->Cell(65,6.2,$fetch['M_Email'],0,1);


// conact
$pdf->Cell(55,5,'',0,0);
$pdf->Cell(42,6.2,$fetch['Captain_Contact_No'],0,0);
$pdf->Cell(18,6.2,'',0,0);
$pdf->Cell(65,6.2,$fetch['C_Email'],0,1);



$pdf->Output();
?>