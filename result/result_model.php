<?php
require_once("../connection.php");

class Result
{
	public function add_result()
	{
		try
		{
			$result["marks_obtained"]=$_SESSION["answer"];
			$result["rollno"]=$_SESSION["rollno"];
 			$date=$_POST["date"];

			$conn= new Connection();
			$dbconn= $conn -> getConnection();

			//$sql="UPDATE anssheet SET  Marks_Obtain= where RollNo=$rno";
			$sql="INSERT INTO anssheet (Date,Marks_Obtain,RollNo) VALUES ('$date':marks_obtained,:rollno);";

			$preparedQuery=$dbconn->prepare($sql);
			$result=$preparedQuery->execute($result);
			if($result==1)
			echo "<script> alert('Result has been saved successfully');</script>";
		}
			catch(PDOException $e){
			echo "<script>alert(".$e->getMessage().");</script>";
			}
			catch(Exception $e){
			echo "<script>alert(".$e->getMessage().");</script>";
			}
	}

	Public function get_results_by_user($rollno)
	{
		try
		{
			$conn= new Connection();
			$dbconn= $conn -> getConnection();

			$sql="SELECT * FROM anssheet WHERE RollNo='$rollno' ORDER BY id desc;";

			$results=null;
			foreach($dbconn->query($sql, PDO::FETCH_ASSOC) as $rslt)
				{
					$results[]=$rslt;
				}
				return $results;
		}
			catch(PDOException $e){
			echo "<script>alert(".$e->getMessage().");</script>";
			}
			catch(Exception $e){
			echo "<script>alert(".$e->getMessage().");</script>";
			}

	}
	Public function get_User_by_id($rollno)
	{
		try
		{
			$conn= new Connection();
			$dbconn= $conn -> getConnection();

			$sql="SELECT FirstName FROM registration WHERE RollNo='$rollno';";

			$names=null;
			foreach($dbconn->query($sql, PDO::FETCH_ASSOC) as $name)
				{
					$names[]=$name;
				}
				$_SESSION["firstname"]=$names[0]['FirstName'];
				return $names;
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