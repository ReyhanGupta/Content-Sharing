<?php
	
require "conn.php";


$email=$_POST["email"];
$first=$_POST["first"];
$last=$_POST["last"];
$username=$_POST["username"];
$pass=$_POST["pass"];


#$mysql_qry="insert into users(Email, FirstName) values('$email','$first');";#,'$first','$last','$username','$pass','a');";
$mysql_qry="insert into users(Email, FirstName, LastName, Username, pass) values('$email', '$first','$last','$username','$pass');";

if($conn->query($mysql_qry)===TRUE)
{
	#echo "Insert successful!";
	$ch = curl_init("http://localhost/Website/login_postSignup.php");
	curl_exec($ch);
}
else
{
		echo "Error: " . $mysql_qry . "<br>" . $conn->error;

}
$conn->close();



?>

