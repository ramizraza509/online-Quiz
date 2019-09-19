<?php
class Connection{
// this code use to connect database db 
	/*public function getConnection(){
		$conn_error='could not connected';
		$select_error='could not selected';
		$mysql_host='localhost';
		$mysql_user='root';
		$mysql_pass='';
		$mysql_db='db';

		$conn=mysqli_connect($mysql_host,$mysql_user, $mysql_pass, $mysql_db) or die($conn_error);
		mysqli_select_db($conn,$mysql_db) or die($select_error);
		return;
		}*/
//mysqli_select_db pass two parameter connection obj and string database name 

		public function getConnection(){
			return new PDO("mysql:host=localhost; dbname=db","root","",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		}

}
?>