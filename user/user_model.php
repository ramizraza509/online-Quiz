<?php

require_once("../connection.php");
class User
{
//view users function 
	public function getUsers()
	{
		try
		{
		$conn= new Connection();
		$dbconn= $conn -> getConnection();

		$sql="SELECT * FROM registration";
		$user=null;

	/*	$result=mysqli_query($dbconn,$sql) or die(mysql_error());
		$mcq=mysqli_fetch_assoc($result); 
			$mcqs[]=$mcq;
		return $mcqs;*/
		foreach ($dbconn-> query($sql, PDO::FETCH_ASSOC)as $user) {
			 $users[]=$user;
		}
		return $users;

		}
			catch(PDOException $e){
			echo "<script>alert(".$e->getMessage().");</script>";
			}
			catch(Exception $e){
			echo "<script>alert(".$e->getMessage().");</script>";
			}
	}
	//edit user function
	public function getUser($rollno)
	{
		try
		{
			$conn= new Connection();
			$dbconn= $conn -> getConnection();
			//RollNo,FirstName,LastName,Email,Password
			$sql="SELECT * FROM registration WHERE RollNo='{$rollno}' LIMIT 1;";
			$user=null;

			foreach ($dbconn-> query($sql, PDO::FETCH_ASSOC)as $userr) {
			 $user=$userr;
			}
			return $user;

		}
			catch(PDOException $e){
			echo "<script>alert(".$e->getMessage().");</script>";
			}
			catch(Exception $e){
			echo "<script>alert(".$e->getMessage().");</script>";
			}
	}

	function UserUpdate()
	{
		$users['rollno']=$_POST['rollno'];
		$users['firstname']=$_POST['firstname'];
		$users['lastname']=$_POST['lastname'];
		$users['email']=$_POST['email'];
		$users['password']=$_POST['password'];
		$users['role']=$_POST['role'];
	


		try
		{
			$conn= new Connection();
			$dbconn= $conn -> getConnection();

			$sql="UPDATE registration SET FirstName=:firstname,Lastname=:lastname,Email=:email, Password=:password,role=:role WHERE RollNo=:rollno;";

			$preparedQuery=$dbconn->prepare($sql);
			$result=$preparedQuery->execute($users);
			if($result==1)
			{
				header("location: view_user.php");
			}
			//$dbconn =null;

		}
			catch(PDOException $e){
			echo "<script>alert(".$e->getMessage().");</script>";
			}
			catch(Exception $e){
			echo "<script>alert(".$e->getMessage().");</script>";
			}

	}

	public function deleteUser()
	{
		$user["rollno"]=$_GET["rollno"];

		try
		{
			$conn= new Connection();
			$dbconn= $conn -> getConnection();

			$sql="DELETE FROM registration WHERE RollNo=:rollno;";

			$preparedQuery=$dbconn->prepare($sql);
			$result=$preparedQuery->execute($user);
			if($result==1)
			{
				echo "<script>alert('User has been Deleted');</script>";
			}
			$dbconn =null;

		}
			catch(PDOException $e){
			echo "<script>alert(".$e->getMessage().");</script>";
			}
			catch(Exception $e){
			echo "<script>alert(".$e->getMessage().");</script>";
			}
	}
	//From result table
	public function Result()
	{
		try
		{
		$conn= new Connection();
		$dbconn= $conn -> getConnection();

		$sql="SELECT * FROM result";
		$users=null;

		foreach ($dbconn-> query($sql, PDO::FETCH_ASSOC)as $user) {
			 $users[]=$user;
		}
		return $users;

		}
			catch(PDOException $e){
			echo "<script>alert(".$e->getMessage().");</script>";
			}
			catch(Exception $e){
			echo "<script>alert(".$e->getMessage().");</script>";
			}
	}
	


	function update123()
	{
		
		$stud['firstname']=$_POST['firstname'];
		$stud['lastname']=$_POST['lastname'];
		$stud['eamil']=$_POST['email'];
		$stud['password']=$_POST['password'];
		$stud['role']=$_POST['role'];
		$stud['rollno']=$_POST['rollno'];

		/*$user['rollno']=$_POST['rollno'];
		$user['firstname']=$_POST['firstname'];
		$user['lastname']=$_POST['lastname'];
		$user['eamil']=$_POST['email'];
		$user['password']=$_POST['password'];
		$user['role']=$_POST['role'];
		*/

		try
		{
			$conn= new Connection();
			$dbconn= $conn -> getConnection();

			$sql="UPDATE registration SET FirstName=:firstname,LastName=:lastname,Email=:email,Password=:password WHERE RollNO=:rollno";

			$preparedQuery=$dbconn->prepare($sql);
			$result=$preparedQuery->execute($stud);
			if($result==1)
			{
				header("location: view_user.php");
			}
			$dbconn =null;

		}
			catch(PDOException $e){
			echo "<script>alert(".$e->getMessage().");</script>";
			}
			catch(Exception $e){
			echo "<script>alert(".$e->getMessage().");</script>";
			}

	}
}
?>