<?php
	
require "conn.php";
$id= $_POST["secret"];
#echo $id;
$mysql_qry="delete from comments where ID = '$id';";
#$result = mysqli_query($conn,$mysql_qry);


if($conn->query($mysql_qry)===TRUE)
{
	 #echo $id;
#echo"delete successfu00l!";
	$ch = curl_init("http://localhost/Website/admin-messages-relay.php");
	curl_exec($ch);
}
else
{
		echo "Error: " . $mysql_qry . "<br>" . $conn->error;

}

$conn->close();

?>
