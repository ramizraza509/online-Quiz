<?php  
require_once("user_model.php");
$userObj=new User();
$users=$userObj->result();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php include_once("../admin/admin.php"); ?>
	<div style="margin-top:-30px; font-family:sans-serif;">
		<h1 align="center">Result</h1>
	</div>
	<div class="container">
		<div class="jumbotron">
			
			<div class="table-responsive">
            
				<table  align="center" class="table">
						<tbody>	
						<tr class="active">
							<th>RollNo</th>
							<th>QNo</th>
							<th>Question</th>
							<th>AnswerNo</th>
						</tr>
						<?php
						if (isset($users)) {
							foreach($users as $user)
							{
							?>
								<tr style="background: white;">
									<td><?php echo $user['RollNo']; ?></td>
									<td><?php echo $user['Qno']; ?></td>
									<td><?php echo $user['Question']; ?></td>
									<td><?php echo $user['AnsNo']; ?></td>
								</tr>
							<?php
							}
						} 
						?>
						</tbody>
				</table>
				<a href="user_pdf.php">Downlode pdf</a>
			</div>
		</div>
	</div>

</body>
</html>