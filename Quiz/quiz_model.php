<?php
require_once("../connection.php");

class Quiz
{
	public function get_mcq_ids()
	{
		try
		{
			$conn= new Connection();
			$dbconn= $conn -> getConnection();

			$sql="SELECT Qno FROM data";

			$mcq_ids_array=null;
			foreach($dbconn->query($sql, PDO::FETCH_ASSOC) as $mcq_id_array)
				{
					$mcq_ids_array[]=$mcq_id_array;
				}
				$mcq_ids=null;
				foreach($mcq_ids_array as $mcq_id_array)
				{
					$mcq_ids[]=$mcq_id_array["Qno"];
				}
				return $mcq_ids;
		}
			catch(PDOException $e){
			echo "<script>alert(".$e->getMessage().");</script>";
			}
			catch(Exception $e){
			echo "<script>alert(".$e->getMessage().");</script>";
			}
	}

	public function get_mcqs($mcqids)
	{
		try
		{
			$conn= new Connection();
			$dbconn= $conn -> getConnection();

			$sql="SELECT * FROM data";// WHERE Qno ='$mcqids' ";
			$mcq=null;

			foreach($dbconn->query($sql, PDO::FETCH_ASSOC) as $mcq)
				{
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
}
?>