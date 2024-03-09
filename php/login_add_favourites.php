<?php
	
require "conn.php";


$user=trim($_POST["user"]);
$pic_no=$_POST["pic_no"];


#$mysql_qry="insert into users(Email, FirstName) values('$email','$first');";#,'$first','$last','$username','$pass','a');";

$mysql_qry="insert into favourites(User, Pic_no) values('$user', '$pic_no');";

#$mysql_qry="insert into comments(Title) values('$tigggtle');";

if($conn->query($mysql_qry)===TRUE)
{
	echo "Insert successful!";
	header('Location: http://localhost/Website/login_full_gallery.php');
exit;
	
}
else
{
		echo "Error: " . $mysql_qry . "<br>" . $conn->error;
#header('Location: http://localhost/Website/login_full_gallery.php');
#exit;
}
$conn->close();



?>