<?php
	
require "conn.php";
$id= $_POST["secret"];
$mysql_qry="delete from admin where ID = '$id';";
#$result = mysqli_query($conn,$mysql_qry);


if($conn->query($mysql_qry)===TRUE)
{
	#echo "delete successful!";
	$ch = curl_init("http://localhost/Website/admin-messages-relay.php");
	curl_exec($ch);
}
else
{
		echo "Error: " . $mysql_qry . "<br>" . $conn->error;

}

$conn->close();

?>
