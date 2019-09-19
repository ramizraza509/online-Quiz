<?php
	require_once("../connection.php");

class MCQ
{
	public function add_mcq()
	{
		$mcq['statement']=$_POST['statement'];
		$mcq['answer1']=$_POST['answer1'];
		$mcq['answer2']=$_POST['answer2'];
		$mcq['answer3']=$_POST['answer3'];
		$mcq['answer4']=$_POST['answer4'];
		$mcq['correctanswer']= $_POST['correctanswer'];

		try
		{
			$conn= new Connection();
			$dbconn= $conn -> getConnection();

			$sql="INSERT INTO data(Question,Option1,Option2,Option3,Option4,Currect_Ans) VALUES (:statement,:answer1,:answer2,:answer3,:answer4,:correctanswer);";
			$preparedQuery=$dbconn->prepare($sql);
			$result=$preparedQuery->execute($mcq);
			if($result==1)
			{
				echo "<script>alert('mcq has been added');</script>";
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

	function updatemcq()
	{
		$mcq['statement']=$_POST['statement'];
		$mcq['answer1']=$_POST['answer1'];
		$mcq['answer2']=$_POST['answer2'];
		$mcq['answer3']=$_POST['answer3'];
		$mcq['answer4']=$_POST['answer4'];
		$mcq['correctanswer']= $_POST['correctanswer'];
		$mcq["mcqid"]=$_POST["mcqid"];

		try
		{
		$conn= new Connection();
		$dbconn= $conn -> getConnection();

		$sql="UPDATE data SET  Question=:statement, Option1=:answer2,Option2=:answer2,Option3=:answer3,Option4=:answer4,Currect_Ans=:correctanswer WHERE Qno=:mcqid;";

			$preparedQuery=$dbconn->prepare($sql);
			$result=$preparedQuery->execute($mcq);
			if($result==1)
			{
				header("location: view_mcq.php");
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

	public function get_mcq()
	{
		try
		{
		$conn= new Connection();
		$dbconn= $conn -> getConnection();

		$sql="SELECT * FROM data";
		$mcqs=null;

	/*	$result=mysqli_query($dbconn,$sql) or die(mysql_error());
		$mcq=mysqli_fetch_assoc($result); 
			$mcqs[]=$mcq;
		return $mcqs;*/
		foreach ($dbconn-> query($sql, PDO::FETCH_ASSOC)as $mcq) {
			 $mcqs[]=$mcq;
		}
		return $mcqs;

		}
			catch(PDOException $e){
			echo "<script>alert(".$e->getMessage().");</script>";
			}
			catch(Exception $e){
			echo "<script>alert(".$e->getMessage().");</script>";
			}
	}

	public function getmcq($qno)
	{
		try
		{
			$conn= new Connection();
			$dbconn= $conn -> getConnection();

			$sql="SELECT * FROM data WHERE Qno='{$qno}' LIMIT 1;";
			$mcq=null;

			foreach ($dbconn-> query($sql, PDO::FETCH_ASSOC)as $mcqq) {
			 $mcq=$mcqq;
			}
			return $mcq;

		}
			catch(PDOException $e){
			echo "<script>alert(".$e->getMessage().");</script>";
			}
			catch(Exception $e){
			echo "<script>alert(".$e->getMessage().");</script>";
			}
	}

	public function deletemcq()
	{
		$mcq["mcqid"]=$_GET["Qno"];

		try
		{
			$conn= new Connection();
			$dbconn= $conn -> getConnection();

			$sql="DELETE FROM data WHERE Qno=:mcqid;";

			$preparedQuery=$dbconn->prepare($sql);
			$result=$preparedQuery->execute($mcq);
			if($result==1)
			{
				echo "<script>alert('mcq has been Deleted');</script>";
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