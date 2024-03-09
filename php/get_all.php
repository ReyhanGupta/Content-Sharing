<?php

require "conn.php";
$query= "SELECT * FROM Content;";

$result= mysqli_query($conn, $query);
$number_Rows= mysqli_num_rows($result);

$tempArray= array();

if($number_Rows>0)
{
	while($row= mysqli_fetch_assoc($result))
	{
		//$tempArray=$row;
		//echo json_encode(array("students"=>$tempArray));
		
		$acdata[] = array(
     'Sno' => $row["Sno"],
     'Name' => $row["Name"],
     'Content' => $row["Content"],
     'Date' => $row["Date"]

);

	}

}
header('Content-Type: application/json');
echo json_encode(array('acdata'=>$acdata));
//echo json_encode(array("students"=>$tempArray));
mysqli_close($conn);





?>