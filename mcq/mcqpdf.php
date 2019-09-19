<?php



require('../pdf/fpdf/fpdf.php');
		$pdf=new FPDF();
		$pdf->AddPage();
		$pdf->SetFont("Arial","B",12);
		$pdf->Cell(0,10,"MCQ");

		foreach($mcqs as $mcq){
					$pdf->Cell(90,12,$mcq["Qno"],1);
					$pdf->SetFont('Arial',',',12);
					$pdf->Ln();
				}

		$pdf->output();


?>