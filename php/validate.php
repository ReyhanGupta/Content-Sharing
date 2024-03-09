<?php
	
require "conn.php";

$username=$_POST["username"];
$pass=$_POST["pass"];

if($username=='admin' && $pass=='admin')
{
			$ch = curl_init("http://localhost/Website/admin-messages.php");

	header('Location: http://localhost/Website/admin-messages.php?username='.$username);
			$response=curl_exec($ch);

			exit;
}


$mysql_qryoo="select * from users where username='$username' and pass= '$pass';";


$result = mysqli_query($conn,$mysql_qryoo);

if(mysqli_num_rows($result)>0)
	{
		$ch = curl_init("http://localhost/Website/login_def2.php");
		header('Location:http://localhost/Website/login_def2.php?username='.$username);

		$response=curl_exec($ch);
		
	}
else
{
	//echo "Please input correct details";
	$ch = curl_init("http://localhost/Website/validate_fail_new.php");
curl_exec($ch);
}



?>

