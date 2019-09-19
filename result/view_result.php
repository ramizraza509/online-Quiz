<?php 
session_start();

	require_once("../Quiz/quiz_model.php");

		if (isset($_POST["startQuizbtn"])) {

			$quizObj=new Quiz();
			$mcq_ids=$quizObj->get_mcq_ids();
			shuffle($mcq_ids);
			$min=0;
			$max=(count($mcq_ids)-1)-3;
			$randome_index=rand($min,$max);
			$mcq_ids=array_slice($mcq_ids,$randome_index,3);
			$mcq_ids=implode(",",$mcq_ids);
			$mcqs=$quizObj->get_mcqs($mcq_ids);
			shuffle($mcqs);

			$_SESSION["quiz"]=$mcqs;
			$_SESSION["answer"]=0;
			$_SESSION["current_mcq_no"]=0;//array index starts from zero;
			header("location:../Quiz/quiz.php");
			exit;
		}


	

	require_once("result_model.php");
	$resultObj=new Result();
	if (!isset($_SESSION['rollno'])) {
	header("Location:../index.php");
	}
	
	$results=$resultObj->get_results_by_user($_SESSION['rollno']);

	$names=$resultObj->get_User_by_id($_SESSION['rollno']);

	include("../headers/headerUser.php"); ?>
	<div class="container">
		<form action="view_result.php" method="post">

			<center>
				<input type="submit" name="startQuizbtn" value="Start Quiz" class="btn btn-lg btn-success">
				<?php   
					/*if (isset($_SESSION["open"])) {
					echo '';	
					}else {
						echo"<script>alert('Closed!!');</script>";
					}*/
				 ?>
				
			</center> 
		</form>
		<table align="center" class="table">
			<div >
			<h1 align="center"> Hello <?php echo $_SESSION['firstname']; ?> </h1>
			</div>
			<br/>
			<caption><h3 align="center">Result for <?php 
			 echo $_SESSION['rollno'];
			 ?></h3></caption>
			<tbody>
			<tr class="active">
				<th>Date Submitted</th>
				<th>Markes Obtained</th>
			</tr>
			<?php 
			if (isset($results)) {
				foreach($results as $result){
					?>
					<tr>
						<td><?Php echo $result["Date"]; ?></td>
						<td><?php echo $result["MarksObtain"]; ?></td>
					</tr>
					<?php
				}
			}
			?>
			</tbody>
		</table>
		</table>
	</div>
<?php include("../headers/footer.php"); ?>