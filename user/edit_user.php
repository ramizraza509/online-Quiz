<?php
require_once("user_model.php");
$userObj=new User();
if (isset($_POST["Update"])){
	$userObj->UserUpdate();
	}
$user=null;
if (isset($_GET['rollno'])) {
	$user=$userObj->getUser($_GET["rollno"]);
}


 include_once("../admin/admin.php"); ?>

	<div class="container">
		<div class="jumbotron">
		<form action="edit_user.php" method="post">
			<table>
				<caption><h3>Edit User</h3></caption>
				<tr>
					<td><label for="rollno">RollNo:</label></td>
					<td><input type="text" class="form-control" name="rollno" size="50" value="<?php echo $user["RollNo"];?>" readonly /></td>
				</tr>
				<tr>
					<td><label for="firstname">FirstName:</label></td>
					<td><input type="text" class="form-control" name="firstname" size="50" value="<?php echo $user["FirstName"];?>"/></td>
				</tr>

				<tr>
					<td><label for="lastname">LastName:</label></td>
					<td><input type="text" class="form-control" name="lastname" size="50" value="<?php echo $user["LastName"];?>"/></td>
				</tr>
				<tr>
					<td><label for="email">Email:</label></td>
					<td><input type="text" class="form-control" name="email" size="50" value="<?php echo $user["Email"];?>"/></td>
				</tr>
				<tr>
					<td><label for="password">Password:</label></td>
					<td><input type="text" class="form-control" name="password" size="50" value="<?php echo $user["Password"];?>"/></td>
				</tr>
				<tr>
					<td><label for="role">Role:</label></td>
					<td><input type="text"class="form-control" name="role" size="50" value="<?php echo $user["role"];?>"/></td>
				</tr>
				<input type="submit" class="btn btn-success" name="Update" value=" Update User ">
			</table>
		</form>
	</div>
	</div>
</body>
</html>