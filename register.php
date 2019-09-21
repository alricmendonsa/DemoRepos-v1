<?php
require "db_connect.php";

$user_name = $_POST["user_name"];
$employee_id = $_POST["employee_id"];
$user_pass = $_POST["password"];
$mysql_qry = "insert into register (full_name, employee_id, password) values ('$user_name', '$employee_id', '$user_pass')";

	if(mysqli_query($conn, $mysql_qry))
	{
		echo "done";
	}
	else
	{
		echo "error";
	}
	

?>