<?php
	require_once("mcq_model.php");
	if (isset($_POST["addMcq"])) {
		$mcqObj=new MCQ();
		$mcqObj->add_mcq();
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
   	.input-group label
	{
	text-align: left;
	margin: 3px;
	}
	
    </style>
</head>
<body>
	<?php include_once("../admin/admin.php"); ?>
	<div style="margin-top:-30px; font-family:sans-serif;">
		<h1 align="center">Add MCQ  </h1>
	</div>
	<div class="container" align="center">
		<div class="jumbotron">
		<form action="add_mcq.php" method="post">
			<div class="input-group">
				<label >Question</label><br>
				<textarea type="text" name="statement" cols="60" rows="5"><?php echo isset($_POST["statement"]) ? $_POST["statement"]: ""; ?></textarea>
			</div><br><br>
			<div class="input-group">
				<label>Option1 </label><input type="text" name="answer1" size="50"/>
				isCorrect?<input type="radio" name="correctanswer" value="1"/>
			</div><br>
				<br>
			<div class="input-group">
				<label>Option2</label><input type="text" name="answer2" size="50"/>
				isCorrect?<input type="radio" name="correctanswer" value="2"/>
			</div><br>
				<br>
			<div class="input-group">
				<label>Option3</label><input type="text" name="answer3" size="50"/>
				isCorrect?<input type="radio" name="correctanswer" value="3"/>
			</div><br>
				<br>
			<div class="input-group">
				<label>Option4</label><input type="text" name="answer4" size="50"/>
				isCorrect?<input type="radio" name="correctanswer" value="4"/>
			</div><br>
				<br>
				<input type="submit" name="addMcq" class="btn btn-lg btn-info" role="button" >
		</form>
	</div>
	</div>
</body>
</html>