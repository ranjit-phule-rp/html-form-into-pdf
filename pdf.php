<?php
if(!empty($_POST['submit']))
{
	    $roll_no = $_POST['rollno'];
		$n_name = $_POST['name'];
        $a_addr = $_POST['address'];
	    $e_mail = $_POST['email'];

	    require("fpdf/fpdf.php");

	    $pdf = new FPDF();
	    $pdf->AddPage();

	    $pdf->SetFont("Arial","",12);
	    $pdf->Cell(0,10,"Regestration Details",1,1,'C');

	    $pdf->Cell(20,10,"Roll No",1,0);
	    $pdf->Cell(45,10,"Name",1,0);
	    $pdf->Cell(45,10,"Address",1,0);
	    $pdf->Cell(0,10,"Email",1,1);

	    $pdf->Cell(20,10,$roll_no,1,0);
	    $pdf->Cell(45,10,$n_name,1,0);
	    $pdf->Cell(45,10,$a_addr,1,0);
	    $pdf->Cell(0,10,$e_mail,1,0);

	    $pdf->output();
}
?>