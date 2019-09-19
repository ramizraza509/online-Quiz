<?php
require_once("mcq_model.php");
$mcqObj=new MCQ();
if (isset($_GET["Qno"])) {
	$mcqObj->deletemcq();
}
$mcqs=$mcqObj->get_mcq();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<?php include_once("../admin/admin.php"); ?>
	<div class="container">
		<div style="margin-top:-30px; font-family:sans-serif;">
			<h1 align="center">Multiple choice Question</h1>
		</div>
		<div class="jumbotron">
			<div class="table-responsive">
				<table align="center" class="table">
					<tbody>
					<?php 
					if (isset($mcqs)) {
						foreach($mcqs as $mcq){
						?>
						<tr class="active">
							<td><?php echo $mcq["Qno"] ?></td>
							<td colspan="6">
								<strong><?php echo $mcq["Question"]; ?></strong>
							</td>
						</tr>
						<tr >
							<td>1.<?php echo $mcq["Option1"]; ?></td>
							<td>2.<?php echo $mcq["Option2"]; ?></td>
							<td>3.<?php echo $mcq["Option3"]; ?></td>
							<td>4.<?php echo $mcq["Option4"]; ?></td>
							<td>Correct Answer:<?php echo $mcq["Currect_Ans"]; ?></td>
							<td><a href="edit_mcq.php?Qno=<?php echo $mcq["Qno"]; ?>">Edit</a></td>
							<td><a href="view_mcq.php?Qno=<?php echo $mcq["Qno"]; ?>" onclick="return confirm('sure to delete!');">Delete</a></td>
						</tr>
						<tr><td colspan="7"></td></tr>
							
						<?php
						}
					}
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>