<?php

if (isset($_POST["pdfd"])) {
	$name=$_POST["name"];
	$rollno=$_POST["rollno"];
	$branch=$_POST["branch"];		
	
	require('pdf/fpdf/fpdf.php');

		$pdf=new FPDF();
		$pdf->AddPage();
		$pdf->SetFont("Arial","B",12);
		$pdf->Cell(0,10,"Welcome ",1,1);
		$pdf->Cell(50,10,"Name:",1,0);
		$pdf->Cell(50,10,"{$name}",1,1);
		$pdf->Cell(50,10,"Rollno: {$rollno}",1,1);
		$pdf->Cell(50,10,"Branch: {$branch}",1,1);
		$pdf->output();//open pdf page
	}

		/*$row=file('saif.txt');
		$pdf->SetFont('Arial Noval','B',12);
		foreach($row as $rowValue){
			$data=explode(';',$rowValue);
				foreach($data as $columnValue)
					$pdf->Cell(90,12,$columnValue,1);
					$pdf->SetFont('Arial',',',12);
					$pdf->Ln();
				}
			$pdf->Output();*/
?>

