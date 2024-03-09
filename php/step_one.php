<?php

require "conn.php";


$mysql_qryoo="select * from Content;";


$result = mysqli_query($conn,$mysql_qryoo);

if(mysqli_num_rows($result)>0)
{
	echo "Welcome!";
}
else
{
	//echo "Email ID doesnt exist in the Database. Please enter correct ID";
	echo "Creating Account...";
}
