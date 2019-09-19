<?php
require_once("../connection.php");
session_start();
$showDate = date("Y.m.d");
$_SESSION['date'] = $showDate;
$roll=NULL;
if (isset($_POST["submitmcq"])) {
	$current_mcq_no=$_SESSION["current_mcq_no"];
	$curr=$_SESSION["current_mcq_no"];
	$roll=$_SESSION["quiz"];

	if (isset($_POST["answer"])) {

			$conn= new Connection();
			$dbconn= $conn -> getConnection();

			$total["rollno"]=$_SESSION["rollno"];
			$total["qno"]=$_SESSION["qno"];
			$total["question"]=$_SESSION["question"];
			$total['ans']=$_POST["answer"];

			$sql="INSERT INTO result (RollNo,Qno,Question,AnsNo) VALUES (:rollno, :qno,:question,:ans);";

			$preparedQuery=$dbconn->prepare($sql);
			$total=$preparedQuery->execute($total);

		if ($_POST["answer"]==$_SESSION['cans']) {
			$_SESSION["answer"]=$_SESSION["answer"]+1;
			
			}
		}
//--------------------------------------------------------------
		if ($curr==10) {
		
			$conn= new Connection();
			$dbconn= $conn -> getConnection();

			$result["date"]=$_SESSION["date"];
	 		$result["mrk"]=$_SESSION["answer"];
	 		$result["rno"]=$_SESSION["rollno"];

	 		$sql="INSERT INTO anssheet (Date,MarksObtain,RollNo) VALUES (:date,:mrk,:rno);";

	 		$preparedQuery=$dbconn->prepare($sql);
	 		$result=$preparedQuery->execute($result);

		
	}
	if($curr==10)  
	
	header("location:result.php");
	$_SESSION['cans']=$roll[$curr]['Currect_Ans'];
	unset($_POST['submitmcq']);
	
	
}
	$current_mcq_no=$_SESSION["current_mcq_no"]+1;
	$curr=$_SESSION["current_mcq_no"];
	$_SESSION["current_mcq_no"]=$current_mcq_no;
	if(isset($_SESSION['quiz'])) {
		$roll=$_SESSION['quiz'];
		$_SESSION['cans']=$roll[$curr]['Currect_Ans'];
		$_SESSION['qno']=$roll[$curr]['Qno'];
		$_SESSION['question']=$roll[$curr]['Question'];
		if ($curr >10) {
			header("location:../index.php");
		}
	}
	else
		$roll="Some error occured";

require("../headers/headerUser.php");?>
	<div class="container">
		<div class="jumbotron">
			<form action="quiz.php" method="post">
				<h2>Question: <?php echo $current_mcq_no;?>/10</h2>
				<h3> <?php print_r($roll[$curr]['Question']); ?></h3>
					<!--<h1><?php //echo   $current_mcq['Queation']; ?></h1>-->
					<input type="radio" name="answer" value="1"/><?php echo $roll[$curr]['Option1']?><br><br>
					<input type="radio" name="answer" value="2"/><?php echo $roll[$curr]["Option2"]?><br><br>
					<input type="radio" name="answer" value="3"/><?php echo $roll[$curr]["Option3"]?><br><br>
					<input type="radio" name="answer" value="4"/><?php echo $roll[$curr]["Option4"]?><br><br>
					<input type="submit" name="submitmcq" value="Submit Answer" class="btn btn-lg btn-primary">
			</form>
		</div>
	</div>
<?php  

 include("../headers/footer.php"); ?>