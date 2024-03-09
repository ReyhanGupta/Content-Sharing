<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="canonical" href="http://localhost/Website/admin_messages_relay.php">
	<meta name="robots" content="noindex, nofollow">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator</title>
	<meta name="keywords" content="spiritual, healing, articles, upload">

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="agency.min.css" rel="stylesheet">
    <link href="agency.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>
<style>
.header {
  width: 100%;
  height: 100%;
  background: url(img/header-bg.jpg) center center no-repeat;
  background-size: cover;
}
</style>

<style>
.dropdown-toggle:active, .open .dropdown-toggle {
        background:	#fbd90c !important; 
        color:#111 !important;
		    background-color:#fb180c;
}


.navbar-nav > li > .dropdown-menu { background-color: #000000; }
</style>

  
 <style>
.bgimg {
    background-image: url(img/admin.jpg);
}
</style>

<!--Navbar -->
<body id="page-top" class="index bgimg"">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="login2_def2.php">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
				
				
				<ul class= "nav navbar-nav navbar-right"> <!--we wish to use an unordered list which will have no numerals but a lot of items within, vsible after hamburger is pressed-->
								<li class="dropdown active">

				<a href="#" class="dropdown-toggle" data-toggle="dropdown"> admin 


</a>
				<!--when clicked, the user is directed to the feedback section-->
           <span class="glyphicon glyphicon-user pull-right"></span></a>
          <ul class="dropdown-menu">
            
            <li><a href="http://localhost/Website/logout.php">Sign Out <span class="fa fa-sign-out pull-right"></span></a></li>
          </ul>
        </li>
			</ul>
		</div>
	</div> <!--Container ends here-->
</nav>

    <!-- Header -->
    <header>
        <div class="container header">
            <div class="intro-text">
                <!--<div class="intro-lead-in">Welcome To Our Studio!</div>-->
                <div class="intro-heading">ADMINISTRATOR LOGIN</div>
                <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

	
	
	
	
	
	
<br><br>


<div class="text-center well container">
<strong>Users</strong>
</div>
<div class="container   ">
    <div class="row col-md-6 col-md-offset-3 custyle">
    <table class="table table-striped custab">	
    <thead>
    <a href="#" class="btn btn-primary btn-xs pull-left fa fa-refresh"><b></b></a>

        <tr>
            <th>SNo</th>
            <th>Email</th>
            <th>First Name</th>
			<th>Username</th>
            <th class="text-center">Actionabciuiuide</th>
        </tr>
    </thead>
	
	<?php
	
require "conn.php";

$mysql_qry="select * from users;";
$result = mysqli_query($conn,$mysql_qry);


while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr>";
$id=$row['Sno'];
echo "<td>".$row['Sno']."</td>";
echo"<td>".$row['Email']."</td>";
echo "<td>".$row['FirstName']."</td>";
echo "<td>".$row['Username']."</td>";

#echo " <td class=' " . " text-center'><a class='". " btn btn-info btn-xs " . "href='ggg.php'><span class='fa fa-edit'></span> Edit</a>&nbsp;&nbsp;<a href='' class='btn btn-danger btn-xs'><span class='fa fa-remove'></span> Del</a></td>";
#echo "<td> <a href='jjj.php'><i class='fa fa-trash-o'></i> </a></td> ";
##echo "<td> <a href='jjj.php'><i class='fa fa-check'></i></a>&nbsp;&nbsp;&nbsp; <a href='jjj.php'><i class='fa fa-trash-o'></i> </a> </td> ";

echo "<form action='delete_user.php' method='POST'>";
echo "<input type='hidden' value='$id' name='secret'/>";

echo "<td> <button type='submit' class='btn '><span class='fa fa-check'></span>  </button>&nbsp;&nbsp;<button type='submit' class='btn '><span class='fa fa-trash-o'></span>  </button></td>";#<a class='btn  fa fa-check' type='submit'></a> <a  class='btn  fa fa-trash-o' type='submit'> </a> </td> </td>";
 # echo"<button type='submit' class='btn btn-success'><span class='fa fa-check'></span>  Upload File</button>";

echo "</form>";
echo "</tr>";  //$row['index'] the index here is a field name

}


echo "</table>"; //Close the table in HTML

$conn->close();

?>

    </div>
</div><br><br>


<div class="text-center well container">
<strong>Uploaded Content</strong>
</div>
<!--col-md-offset-2-->
<div class="container   ">
    <div class="row col-md-6 col-md-offset-3 custyle">
    <table class="table table-striped custab">	
    <thead>
    <a href="#" class="btn btn-primary btn-xs pull-left fa fa-refresh"><b></b></a>

        <tr>
            <th>ID</th>
            <th> Name</th>
            <th>Article</th>
			<th>Download</th>
            <th class="text-center">Actionabciuiuide</th>
        </tr>
    </thead>
	
	<?php
	
require "conn.php";

$mysql_qry="select * from admin;";
$result = mysqli_query($conn,$mysql_qry);


while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr>";
$id=$row['ID'];
echo"<td>".$row['ID']."</td>";
echo "<td>".$row['Information']."</td>";
echo "<td>".$row['Articles']."</td>";
echo "<td>http://localhost/Website/User/New".$row['Articles']."</td>";

#echo " <td class=' " . " text-center'><a class='". " btn btn-info btn-xs " . "href='ggg.php'><span class='fa fa-edit'></span> Edit</a>&nbsp;&nbsp;<a href='' class='btn btn-danger btn-xs'><span class='fa fa-remove'></span> Del</a></td>";
#echo "<td> <a href='jjj.php'><i class='fa fa-trash-o'></i> </a></td> ";
##echo "<td> <a href='jjj.php'><i class='fa fa-check'></i></a>&nbsp;&nbsp;&nbsp; <a href='jjj.php'><i class='fa fa-trash-o'></i> </a> </td> ";

echo "<form action='delete_article.php' method='POST'>";
echo "<input type='hidden' value='$id' name='secret'/>";

echo "<td> <button type='submit' class='btn '><span class='fa fa-check'></span>  </button>&nbsp;&nbsp;<button type='submit' class='btn '><span class='fa fa-trash-o'></span>  </button></td>";#<a class='btn  fa fa-check' type='submit'></a> <a  class='btn  fa fa-trash-o' type='submit'> </a> </td> </td>";
 # echo"<button type='submit' class='btn btn-success'><span class='fa fa-check'></span>  Upload File</button>";

echo "</form>";
echo "</tr>";  //$row['index'] the index here is a field name

}


echo "</table>"; //Close the table in HTML

$conn->close();

?>

    </div>
</div><br><br>
<div class="text-center well container">
<strong>Comments Section</strong>
</div>
<!--comments table-->
<div class="container   ">
    <div class="row col-md-6 col-md-offset-1 custyle">
    <table class="table table-striped custab">
    <thead>
    <a href="#" class="btn btn-primary btn-xs pull-left fa fa-refresh"><b></b></a>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Date</th>
            <th>Content</th>
            <th>Image</th>
            <th>Article</th>




            <th class="text-center">Actionabcopopopde</th>
        </tr>
    </thead>
	
	<?php
	
require "conn.php";
$mysql_qry="select * from comments;";
$result = mysqli_query($conn,$mysql_qry);


while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
$id=$row['ID'];

echo "<tr>";
echo"<td>".$row['ID']."</td>";
echo "<td>".$row['Title']."</td>";
echo "<td>".$row['Author']."</td>";
echo "<td>".$row['Date']."</td>";
echo "<td>".$row['Content']."</td>";
echo "<td>".$row['Image']."</td>";
echo "<td>".$row['Corres_Sno']."</td>";

echo "<form action='delete_comments.php' method='POST'>";
echo "<input type='hidden' value='$id' name='secret'/>";

#echo " <td class=' " . " text-center'><a class='". " btn btn-info btn-xs " . "href=''><span class='fa fa-edit'></span> Edit</a>&nbsp;&nbsp;<a href='' class='btn btn-danger btn-xs'><span class='fa fa-remove'></span> Del</a></td>";
##echo "<td><button > <a href='jjj.php'><i class='fa fa-check'></i></a>&nbsp;&nbsp;&nbsp; <a href='jjj.php'><i class='fa fa-trash-o'></i> </a> </td> ";
echo "<td> <button type='submit' class='btn '><span class='fa fa-check'></span>  </button>&nbsp;&nbsp;<button type='submit' class='btn '><span class='fa fa-trash-o'></span>  </button></td>";#<a class='btn  fa fa-check' type='submit'></a> <a  class='btn  fa fa-trash-o' type='submit'> </a> </td> </td>";
echo"</form>";
echo "</tr>";  //$row['index'] the index here is a field name

}


echo "</table>"; //Close the table in HTML

$conn->close();

?>

    </div>
</div>

	
	
	
	
	
	
	
	
	
	
	
	<!--Footer-->
	
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebocheck"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    
    <!-- jQuery -->
    <script src="jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>