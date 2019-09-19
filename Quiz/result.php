<?php 
session_start();
//date_default_timezone_set('Asia/Kolkata');
require("../headers/headerUser.php");


 ?>

	<div class="container">
		<h1>You have got <?php echo $_SESSION["answer"]*10; ?>% Marks...</h1>
		<form action="result.php" method="post">
			<a class="btn btn-lg btn-primary" href="../LogOut.php">LogOut</a>
			<a class="btn btn-lg btn-info" href="../result/view_result.php" name="viewResultBtn">
			View all result</a>
			
		</form>
	</div>
<?php 



include("../headers/footer.php");?>