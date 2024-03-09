<?php
	
require "conn.php";

$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$message=$_POST["message"];

$qry="insert into messages (Name, Email, Phone, Message) values('$name','$email','$phone','$message');";

if($conn->query($qry)===TRUE)
	{
		header('Location: http://localhost/Website/login2_def2.php');
			exit;
	}
else
	{
		echo 'unsuccessful';		echo "Error: " . $qry . "<br>" . $conn->error;


	}


?>