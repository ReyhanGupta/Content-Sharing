<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="canonical" href="http://localhost/Website/login_final_read1.php">
	<meta name="robots" content="noindex, nofollow">
	<meta name="keywords" content="spiritual, healing, articles, upload">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

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
  background: url(img/crystal.jpg) center center no-repeat;
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
body {  }
.widget .panel-body { padding:0px; }
.widget .list-group { margin-bottom: 0; }
.widget .panel-title { display:inline }
.widget .label-info { float: right; }
.widget li.list-group-item {border-radius: 0;border: 0;border-top: 1px solid #ddd;}
.widget li.list-group-item:hover { background-color: rgba(86,61,124,.1); }
.widget .mic-info { color: #666666;font-size: 11px; }
.widget .action { margin-top:5px; }
.widget .comment-text { font-size: 12px; }
.widget .btn-block { border-top-left-radius:0px;border-top-right-radius:0px; }
</style>

<style>
.full {
    width: 100%;	
}
.gap {
	height: 30px;
	width: 100%;
	clear: both;
	display: block;
}
.footer {
	background: #EDEFF1;
	height: auto;
	padding-bottom: 15px;
	position: relative;
	width: 100%;
	border-bottom: 1px solid #CCCCCC;
	border-top: 1px solid #DDDDDD;
}
.footer p {
	margin: 0;
}
.footer img {
	max-width: 100%;
}
.footer h3 {
	border-bottom: 1px solid #BAC1C8;
	color: #54697E;
	font-size: 18px;
	font-weight: 600;
	line-height: 27px;
	padding: 40px 0 10px;
	text-transform: uppercase;
}
.footer ul {
	font-size: 13px;
	list-style-type: none;
	margin-left: 0;
	padding-left: 0;
	margin-top: 15px;
	color: #7F8C8D;
}
.footer ul li a {
	padding: 0 0 5px 0;
	display: block;
}
.footer a {
	color: #78828D
}
.supportLi h4 {
	font-size: 20px;
	font-weight: lighter;
	line-height: normal;
	margin-bottom: 0 !important;
	padding-bottom: 0;
}
.newsletter-box input#appendedInputButton {
	background: #FFFFFF;
	display: inline-block;
	float: left;
	height: 30px;
	clear: both;
	width: 100%;
}
.newsletter-box .btn {
	border: medium none;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-o-border-radius: 3px;
	-ms-border-radius: 3px;
	border-radius: 3px;
	display: inline-block;
	height: 40px;
	padding: 0;
	width: 100%;
	color: #fff;
}
.newsletter-box {
	overflow: hidden;
}
.bg-gray {
	background-image: -moz-linear-gradient(center bottom, #BBBBBB 0%, #F0F0F0 100%);
	box-shadow: 0 1px 0 #B4B3B3;
}
.social li {
	background: none repeat scroll 0 0 #B5B5B5;
	border: 2px solid #B5B5B5;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	-o-border-radius: 50%;
	-ms-border-radius: 50%;
	border-radius: 50%;
	float: left;
	height: 36px;
	line-height: 36px;
	margin: 0 8px 0 0;
	padding: 0;
	text-align: center;
	width: 36px;
	transition: all 0.5s ease 0s;
	-moz-transition: all 0.5s ease 0s;
	-webkit-transition: all 0.5s ease 0s;
	-ms-transition: all 0.5s ease 0s;
	-o-transition: all 0.5s ease 0s;
}
.social li:hover {
	transform: scale(1.15) rotate(360deg);
	-webkit-transform: scale(1.1) rotate(360deg);
	-moz-transform: scale(1.1) rotate(360deg);
	-ms-transform: scale(1.1) rotate(360deg);
	-o-transform: scale(1.1) rotate(360deg);
}
.social li a {
	color: #EDEFF1;
}
.social li:hover {
	border: 2px solid #2c3e50;
	background: #2c3e50;
}
.social li a i {
	font-size: 16px;
	margin: 0 0 0 5px;
	color: #EDEFF1 !important;
}
.footer-bottom {
	background: #E3E3E3;
	border-top: 1px solid #DDDDDD;
	padding-top: 8px;
	padding-bottom: 8px;
}
.footer-bottom p.pull-left {
	padding-top: 6px;
}
.payments {
	font-size: 1.5em;	
}
</style>


<style>
.bgimg {
    background-image: url(img/eee.jpg);
}
</style>

<!--Navbar -->
<body id="page-top" class="index bgimg">

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
                <ul class="nav navbar-nav navbar-left">

                    <li>
                        <a href="login2_def2.php#services">Features</a>
                    </li>
                    <li class="active">
                        <a  href="">Articles</a>
                    </li>
                    <li>
                        <a  href="login2_def2.php#about">Gallery</a>
                    </li>
                    <li>
                        <a  href="login_write.php">Upload</a>
                    </li>
                    <li>
                        <a href="login_favourites.php">Favourites</a>
                    </li>

                </ul>
				
				
				<ul class= "nav navbar-nav navbar-right"> <!--we wish to use an unordered list which will have no numerals but a lot of items within, vsible after hamburger is pressed-->
								<li class="dropdown">

				<a href="#" class="dropdown-toggle " data-toggle="dropdown"><span class="fa fa-user-o pull-right"> </span>

<?php
echo $_SESSION['myValue'];
?>
</a></a>
				
				<!--when clicked, the user is directed to the feedback section-->
           <span class="glyphicon glyphicon-user pull-right"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Account  <span class="fa fa-cog pull-right"></span></a></li><br>
            <li><a href="http://localhost/Website/login_write.php">Upload<span class="fa fa-plus pull-right"></span></a></li><br>
            <li><a href="#">Messages <span class="fa fa-envelope pull-right"> </span></a></li><br>
            <li><a href="http://localhost/Website/login_favourites.php">Favourites  <span class="fa fa-heart pull-right"></span></a></li><br>
            <li><a href="http://localhost/Website/logout.php">Sign Out<span class="fa fa-sign-out pull-right"></span></a></li>
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
                <div class="intro-lead-in">Welcome To Our Studio!</div>
                <div class="intro-heading">It's Nice To Meet You</div>
                <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

	
	
	
	
	<br>	<br>
				 
<!-- Navbar Ends-->

		
	
	
	
<div class="container">
    <div class="well"> 
        <div class="row">
             <div class="col-md-12">
                 <div class="row hidden-md hidden-lg"><h1 class="text-center" >gtgtgtTITULO LARGO DE UNA INVESTIGACION cualquiera</h1></div>
                     
                 <div class="pull-left col-md-4 col-xs-12 thumb-contenido"><img class="center-block img-responsive" src='http://localhost/Website/painting.jpg'  /></div>
                 <div class="">                    
					<!--Heading Titile to be extracted-->
					<h1  class="hidden-xs hidden-sm">
					 
					 <?php

					require "conn.php";
					$sno = $_POST['extract'];

					$mysql_qry="select * from content where Sno=$sno;";
					$result= mysqli_query($conn,$mysql_qry );
					while($row= mysqli_fetch_assoc($result))
						{
						$title=$row["Title"];	
						echo $title  ;
						}
					?>

					</h1>
					<hr>
                      
					  <!--Date-->
					<small>
					 
					 <?php

					require "conn.php";
					$sno = $_POST['extract'];
					$mysql_qry="select * from content where Sno=$sno;";
					$result= mysqli_query($conn,$mysql_qry );
					while($row= mysqli_fetch_assoc($result))
						{
						$Date=$row["Date"];	
						echo $Date  ;
						}
					?>
					 
					 
					 </small>
					 <br>
                     
					 
					 <small>
					 <strong>
					 <!--Author name-->
					 <?php

					require "conn.php";
					
					$sno = $_POST['extract'];
					$mysql_qry="select * from content where Sno=$sno;";					
					$result= mysqli_query($conn,$mysql_qry );
					while($row= mysqli_fetch_assoc($result))
						{
						$Name=$row["Name"];	
						echo $Name  ;
						}
					?>
					
					</strong>
					</small>
					
                     <hr>
                     <p class="text-justify">
					 
					 
					  <!--Text-->
					 <?php

					require "conn.php";
					$sno = $_POST['extract'];
					$mysql_qry="select * from content where Sno=$sno;";					
					$result= mysqli_query($conn,$mysql_qry );
					while($row= mysqli_fetch_assoc($result))
						{
						$Content=$row["Content"];	
						echo $Content  ;
						}
					?>
					 
					 
					 
					 
					 
					 </p></div>
             </div>
        </div>
		
		</div>
		<!-- Modal -->
		
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel">New Comment by
		<?php
echo $_SESSION['myValue'];
?>

&nbsp;
<div class="pull-right">
<?php
			echo date("Y/m/d");
			?>
			</div>
		</h5>
        <button type="button" class=" close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="submit_comment.php" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title">
			<input type="hidden" id="date" name="date" value="
			
			<?php
			echo date("Y/m/d");
			?>
			
			"/>

          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label">Comment:</label>
            <textarea class="form-control" id="comment" name="comment"></textarea>
			
			<input type="hidden" id="corres_sno" name="corres_sno" value="
			
			<?php

					require "conn.php";
					$sno = $_POST['extract'];
					echo $sno;
			?>   
			"/>
			
          </div>
		  
		  <div class="modal-footer">
		  			<input type="hidden" id="commentor" name="commentor" value="
					
					
					<?php
echo $_SESSION['myValue'];
?>
					
					"/>

		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Add Comment</button>
		      </div>

        </form>
      
        
      </div>
    </div>
  </div>
</div>
		
		
		
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
			
		
        <div class="panel panel-default widget">
		
            <div class="panel-heading text-center">
			<br>
                <h3 class="panel-title">
                     Comments</h3>
					                 <span class="fa fa-comment"></span>

                <span class="label label-info">
				 

				 <?php

					require "conn.php";
					$sno = $_POST['extract'];
					$mysql_qry="select * from comments where Corres_Sno=$sno;";
					$result= mysqli_query($conn,$mysql_qry);
					
						 echo mysqli_num_rows($result);
						   
						
					?>
					
					
                    </span>
					
					<button type="submit" class="btn btn-sm btn-primary pull-left" data-toggle="modal" data-target="#myModal"> Add Comment </button>
					
					
					
					<br>
					<br>
	

            </div>

            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-2 col-md-1">
                                <img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>
                            <div class="col-xs-10 col-md-11">
                                <div>
								
								<?php
									require "conn.php";
									$sno = $_POST['extract'];
									
									$mysql_qry="select * from comments where Corres_Sno=$sno and ID=1;";					
									$result= mysqli_query($conn,$mysql_qry);
									
									while($row= mysqli_fetch_assoc($result))
										{
										$Title=$row["Title"];	
										echo $Title ;
										}	
										
								?>
								
                                    <div class="mic-info">
                                        By: 
										
								<?php
									require "conn.php";
									$sno = $_POST['extract'];
									
									$mysql_qry="select * from comments where Corres_Sno=$sno and ID=1;";					
									$result= mysqli_query($conn,$mysql_qry);
									
									while($row= mysqli_fetch_assoc($result))
										{
										$Author=$row["Author"];	
										echo $Author ;
										}	
										
								?>		
										
										on 
										
								
								<?php
									require "conn.php";
									$sno = $_POST['extract'];
									
									$mysql_qry="select * from comments where Corres_Sno=$sno and ID=1;";					
									$result= mysqli_query($conn,$mysql_qry);
									
									while($row= mysqli_fetch_assoc($result))
										{
										$Date=$row["Date"];	
										echo $Date ;
										}	
										
								?>				
                                    </div>
                                </div>
                                <div class="comment-text">
								
								<?php
									require "conn.php";
									$sno = $_POST['extract'];
									
									$mysql_qry="select * from comments where Corres_Sno=$sno and ID=1;";					
									$result= mysqli_query($conn,$mysql_qry);
									
									while($row= mysqli_fetch_assoc($result))
										{
										$Content=$row["Content"];	
										echo $Content ;
										}	
										
								?>				
                         
                                </div>
                                
                            </div>
                        </div>
                    </li>
					
					
					<li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-2 col-md-1">
                                <img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>
                            <div class="col-xs-10 col-md-11">
                                <div>
								
								
								<?php
									require "conn.php";
									$sno = $_POST['extract'];
									
									$mysql_qry="select * from comments where Corres_Sno=$sno and ID=2;";					
									$result= mysqli_query($conn,$mysql_qry);
									
									while($row= mysqli_fetch_assoc($result))
										{
										$Title=$row["Title"];	
										echo $Title ;
										}	
										
								?>
								
                                    <div class="mic-info">
                                        By: 
										
								<?php
									require "conn.php";
									$sno = $_POST['extract'];
									
									$mysql_qry="select * from comments where Corres_Sno=$sno and ID=2;";					
									$result= mysqli_query($conn,$mysql_qry);
									
									while($row= mysqli_fetch_assoc($result))
										{
										$Author=$row["Author"];	
										echo $Author ;
										}	
										
								?>		
										
										on 
										
								
								<?php
									require "conn.php";
									$sno = $_POST['extract'];
									
									$mysql_qry="select * from comments where Corres_Sno=$sno and ID=2;";					
									$result= mysqli_query($conn,$mysql_qry);
									
									while($row= mysqli_fetch_assoc($result))
										{
										$Date=$row["Date"];	
										echo $Date ;
										}	
										
								?>				
                                    </div>
                                </div>
                                <div class="comment-text">
								
								<?php
									require "conn.php";
									$sno = $_POST['extract'];
									
									$mysql_qry="select * from comments where Corres_Sno=$sno and ID=2;";					
									$result= mysqli_query($conn,$mysql_qry);
									
									while($row= mysqli_fetch_assoc($result))
										{
										$Content=$row["Content"];	
										echo $Content ;
										}	
										
								?>				
                         
                                </div>
                                
                            </div>
                        </div>
                    </li>
					
                    
					
					<li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-2 col-md-1">
                                <img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>
                            <div class="col-xs-10 col-md-11">
                                <div>
								
								
								<?php
									require "conn.php";
									$sno = $_POST['extract'];
									
									$mysql_qry="select * from comments where Corres_Sno=$sno and ID=8;";					
									$result= mysqli_query($conn,$mysql_qry);
									
									while($row= mysqli_fetch_assoc($result))
										{
										$Title=$row["Title"];	
										echo $Title ;
										}	
										
								?>
								
                                    <div class="mic-info">
                                        By: 
										
								<?php
									require "conn.php";
									$sno = $_POST['extract'];
									
									$mysql_qry="select * from comments where Corres_Sno=$sno and ID=8;";					
									$result= mysqli_query($conn,$mysql_qry);
									
									while($row= mysqli_fetch_assoc($result))
										{
										$Author=$row["Author"];	
										echo $Author ;
										}	
										
								?>		
										
										on 
										
								
								<?php
									require "conn.php";
									$sno = $_POST['extract'];
									
									$mysql_qry="select * from comments where Corres_Sno=$sno and ID=8;";					
									$result= mysqli_query($conn,$mysql_qry);
									
									while($row= mysqli_fetch_assoc($result))
										{
										$Date=$row["Date"];	
										echo $Date ;
										}	
										
								?>				
                                    </div>
                                </div>
                                <div class="comment-text">
								
								<?php
									require "conn.php";
									$sno = $_POST['extract'];
									
									$mysql_qry="select * from comments where Corres_Sno=$sno and ID=8;";					
									$result= mysqli_query($conn,$mysql_qry);
									
									while($row= mysqli_fetch_assoc($result))
										{
										$Content=$row["Content"];	
										echo $Content ;
										}	
										
								?>				
                         
                                </div>
                                
                            </div>
                        </div>
                    </li>
					
                    
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
                               <!-- <div class="action">
                                    <button type="button" class="btn btn-primary btn-xs" title="Edit">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                    <button type="button" class="btn btn-success btn-xs" title="Approved">
                                        <span class="glyphicon glyphicon-ok"></span>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-xs" title="Delete">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </div>-->
                         
                </ul>
            </div>
        </div>
    </div>
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
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
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