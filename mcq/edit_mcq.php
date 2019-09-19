<?php
require_once("mcq_model.php");
$mcqObj=new MCQ();
if (isset($_POST["updatemcq"])) {
	$mcqObj->updatemcq();
}
$mcq=null;
if (isset($_GET['Qno'])) {
	$mcq=$mcqObj->getmcq($_GET["Qno"]);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include_once("../admin/admin.php"); ?>
		<div style="margin-top:-30px; font-family:sans-serif;">
		<h1 align="center" >Edit MCQ</h1>
		</div>
	<div class="container">
		<div class="jumbotron">
			<form action="edit_mcq.php" method="post">
					<input type="hidden" name="mcqid" value="<?php echo $mcq["Qno"]; ?>" />
					<label>Question</label><br>
					<textarea type="text" name="statement" cols="60" rows="5"><?php echo $mcq["Question"];?></textarea><br><br>
					<label for="answer1">Option1</label>
					<input type="text" name="answer1" size="50" value="<?php echo $mcq["Option1"]; ?>" />
					isCorrect?<input type="radio" name="correctanswer" value="1" <?php echo $mcq["Currect_Ans"]== "1" ? "checked" : "" ?>/>
					<br>
					<br>
					<label for="answer2">Option1</label>
					<input type="text" name="answer2" size="50" value="<?php echo $mcq["Option2"]; ?>" />
					isCorrect?<input type="radio" name="correctanswer" value="2" <?php echo $mcq["Currect_Ans"]== "2" ? "checked" : "" ?>/>
					<br>
					<br>
					<label for="answer3">Option1</label>
					<input type="text" name="answer3" size="50" value="<?php echo $mcq["Option3"]; ?>" />
					isCorrect?<input type="radio" name="correctanswer" value="3" <?php echo $mcq["Currect_Ans"]== "3" ? "checked" : "" ?>/>
					<br>
					<br>
					<label for="answer4">Option1</label>
					<input type="text" name="answer4" size="50" value="<?php echo $mcq["Option4"]; ?>" />
					isCorrect?<input type="radio" name="correctanswer" value="4" <?php echo $mcq["Currect_Ans"]== "4" ? "checked" : "" ?>/>
					<br>
					<br>
					<input type="submit" name="updatemcq" value=" Update MCQ "  class="btn btn-lg btn-info">
			</form>
		</div>
	</div>
</body>
</html>