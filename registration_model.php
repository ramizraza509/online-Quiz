<?php
session_start();
require_once("connection.php");

/**
* user registratio function whithin the Registration clss
*/
class Registration
{
	
	public function register_user()
	{
		$user['rollno']=$_POST['rollno'];
		$user['firstname']=$_POST['firstname'];
		$user['lastname']=$_POST['lastname'];
		$user['email']=$_POST['email'];
		$user['password']=$_POST['password'];
		$user['role']= "user";
		//$user=md5($user['password']);

		try{
			$conn= new Connection();
			$dbconn= $conn -> getConnection();

			$sql= "INSERT INTO registration (RollNo,FirstName,LastName,Email,Password,role) VALUES (:rollno, :firstname,:lastname,:email,:password,:role);";

		
		//$query1=mysqli_query($conn,$sql);
			$preparedQuery=$dbconn->prepare($sql);
			$result=$preparedQuery->execute($user);
			if($result==1)
			{
				echo "<script>alert('Register succesfully');</script>";
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

	public function signinUuser($rollno, $password)
	{

		try{
			$conn= new Connection();
			$dbconn= $conn -> getConnection();


 			
			$sql="SELECT RollNo,role FROM registration WHERE RollNo='$rollno' AND Password = '$password' LIMIT 1";
			$user=NULL;

				foreach ($dbconn->query($sql, PDO::FETCH_ASSOC)as $userr){


				 $user[0]=$userr;
				 //echo $user[0];
			 	}
			if ($user[0]["role"]=="admin") {
				$_SESSION['rollno']=$user[0]['RollNo'];
				$_SESSION['role']="admin";
				echo"<script>alert('you are admin');</script>";
				header("location:./admin/admin.php");
			exit;
			}else if ($user[0]["role"]=="user"){ 
				$_SESSION['rollno']=$user[0]['RollNo'];
				$_SESSION['role']="user";
				echo"<script>alert('you are user');</script>";
				header("location:./result/view_result.php");
				exit;
			}else{
				echo"<script>alert('Rollno or Password is Wrong');</script>";
			}
		}
		catch(PDOException $e){
			echo "<script>alert(".$e->getMessage().");</script>";
		}
		catch(Exception $e){
			echo "<script>alert(".$e->getMessage().");</script>";
		}

	}//end of function

	
}//end of class


?>

