<?php
	
require "conn.php";


$title=$_POST["title"];
$comment=$_POST["comment"];
$commentor=$_POST["commentor"];
$date=$_POST["date"];
$corres_sno=$_POST["corres_sno"];


#$mysql_qry="insert into users(Email, FirstName) values('$email','$first');";#,'$first','$last','$username','$pass','a');";

$mysql_qry="insert into comments(Title, Author, Date, Content, Corres_Sno) values('$title', '$commentor','$date','$comment',$corres_sno);";

#$mysql_qry="insert into comments(Title) values('$tigggtle');";

if($conn->query($mysql_qry)===TRUE)
{
	echo "Insert successful!";
	
}
else
{
		echo "Error: " . $mysql_qry . "<br>" . $conn->error;

}
$conn->close();



?>

