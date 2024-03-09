<?php
require "conn.php";

$uploaddir = "C:\wamp\www\Website\User\New";
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';




if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) 

	{
	#echo "Success";
	
	$name=trim($_POST["name"]);
foreach($_FILES as $file){
  $name_of_file= $file['name']; 
}


	#$mysql_qry="insert into users(Email, FirstName) values('$email','$first');";#,'$first','$last','$username','$pass','a');";
	$mysql_qry="insert into admin(Articles, Information) values('$name_of_file', '$name');";

	if($conn->query($mysql_qry)===TRUE)
		{
			echo "Insert successful!";
			header('Location: http://localhost/Website/s.php');
			exit;
			}
	else
		{
			echo "Error: " . $mysql_qry . "<br>" . $conn->error;

		}
$conn->close();

##header('Location: http://localhost/Website/s.php');
##exit;


#  echo 'Here is some more debugging info:';
#	print_r($_FILES);
#	print "</pre>";
	#$ch = curl_init("http://localhost/Website/s.php");
	#curl_exec($ch);
   
}
	

else 
	{
		header('Location: http://localhost/Website/f.php');
		exit;
 # echo "Failure.\n";
  # echo 'Here is some more debugging info:';
#	print_r($_FILES);
	#print "</pre>";
	#$ch = curl_init("http://localhost/Website/f.php");
	#curl_exec($ch);
	}


?>