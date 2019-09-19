<?php
require_once("user_model.php");
$userObj=new User();
if (isset($_GET["rollno"])) {
	$userObj->deleteUser();
}
$users=$userObj->getUsers();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include_once("../admin/admin.php"); ?>
	<div style="margin-top:-30px; font-family:sans-serif;">
		<h1 align="center">Users</h1>
	</div>
	<div class="container">
		<div class="jumbotron">
			<div class="table-responsive">
            
				<table  align="center" class="table">
						<tbody>	
						<tr class="active">
							<th>RollNo</th>
							<th>FirstName</th>
							<th>LastName</th>
							<th>Email</th>
							<th>Password</th>
							<th>Role</th>
							<th colspan="2">Action</th>
						</tr>
						<?php
						if (isset($users)) {
							foreach($users as $user)
							{
							?>
								<tr style="background: white;">
									<td><?php echo $user['RollNo']; ?></td>
									<td><?php echo $user['FirstName']; ?></td>
									<td><?php echo $user['LastName']; ?></td>
									<td><?php echo $user['Email']; ?></td>
									<td><?php echo $user['Password'];?></td>
									<td><?php echo $user['role'];?> </td>
									<td><a href="edit_user.php?rollno=<?php echo $user["RollNo"]; ?>">Edit</a></td>
									<td><a href="view_user.php?rollno=<?php echo $user["RollNo"]; ?>" onclick="return confirm('sure to delete!');">Delete</a></td>
								</tr>
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