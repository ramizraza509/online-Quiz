<?php
require('../pdf/fpdf/fpdf.php');
require_once("../connection.php");

		$pdf=new FPDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',12);
	
		$pdf->Cell(190,10,"Result",1,1,'C');
		$pdf->Cell(40,10,"RollNo",1,0);
		$pdf->Cell(110,10,"Question",1,0);
		$pdf->Cell(40,10,"AnswerNo",1,1);
		//$pdf->Cell(55,10,"Email",1,1);
		//$pdf->Cell(0.5,'',0,1);

		
		$pdf->SetFont('Arial','',10);
		$pdf->SetDrawColor(50,50,100);

		$conn= new Connection();
		$dbconn= $conn -> getConnection();

		$sql="SELECT * FROM result";
		
		foreach ($dbconn-> query($sql, PDO::FETCH_ASSOC)as $user) {
			 $pdf->Cell(40,5,$user["RollNo"],1,0);
			 $pdf->Cell(110,5,$user["Question"],1,0);
			 $pdf->Cell(40,5,$user["AnsNo"],1,1);
		}
		
		$pdf->output();
?>