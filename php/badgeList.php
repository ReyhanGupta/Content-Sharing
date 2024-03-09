
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="canonical" href="http://localhost/Website/badgeList.php">
	<meta name="robots" content="noindex, nofollow">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="keywords" content="spiritual, healing, articles, upload">

    <title>Articles and Themes</title>
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
  background: url(img/pen.jpg) center center no-repeat;
  background-size: cover;
</style>

  
 <style>
.bgimg {
    background-image: url(img/rrr.jpg);
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
                <a class="navbar-brand page-scroll" href="def2.html">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">

                    <li>
                        <a href="def2.html#services">Features</a>
                    </li>
                    <li class="active">
                        <a  href="">Articles</a>
                    </li>
                    <li>
                        <a  href="def2.html#about">Gallery</a>
                    </li>
                    <li>
                        <a data-toggle="modal" data-target="#myModal" href="">Upload</a>
                    </li>
                    <li>
                        <a data-toggle="modal" data-target="#myModal" href="">Favourites</a>
                    </li>

                </ul>
				
				
				<ul class= "nav navbar-nav navbar-right"> <!--we wish to use an unordered list which will have no numerals but a lot of items within, vsible after hamburger is pressed-->
				<li> <a href= "http://localhost/Website/login.php">Login/Signup</a> <!--when clicked, the user is directed to the feedback section-->
			</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container header">
            <div class="intro-text">
                <div class="intro-heading">Articles- Themes and More</div>
                <a href="" data-toggle="modal" data-target="#myModal" href=""class="page-scroll btn btn-xl">UPLOAD ARTICLES</a>
            </div>
        </div>
    </header>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

	
	
	
	
	<br>	<br>
				 
<!-- Navbar Ends-->

					 
				
<div class="">
</div>

		 
            		
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add To Favourites</h4>
      </div>
      <div class="modal-body">
        <p>Please Login To Continue</p>
      </div>
      <div class="modal-footer">
	          <a href="http://localhost/Website/login.php"  class="btn btn-warning">Login</a>

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div class="">
<div class="container ">


<div class="list-group">
 <div class="row">
	<div class=" col-md-3 ">
  		  <img src="http://localhost/Website/river.jpg" width=350px height=130px>
		</div>
		<div class=" col-md-9 "> 
  <a href="http://localhost/Website/content_read.php" class="list-group-item list-group-item-warning list-group-item-action flex-column align-items-start ">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Spiritualism</h5>
      <small>
	<?php

		require "conn.php";
		$mysql_qry="select * from content where Sno=1;";
		$result= mysqli_query($conn,$mysql_qry );
		while($row= mysqli_fetch_assoc($result))
		{
			$Date=$row["Date"];	
			echo $Date  ;
		}
	?>
	  </small>
    </div>
	    <span class="badge">14</span>

    <p class="mb-1">Main content comes here</p>

    <small>Name of author</small>
	
  </a>
  
  </div>
  </div>
  
  
  
  
  
  <div class="row">
	<div class=" col-md-3 ">
  		  <img src="http://localhost/Website/river.jpg" width=330px height=130px>
	</div>
	<div class=" col-md-9 "> 
		<a href="http://localhost/Website/content_read.php" class="list-group-item  list-group-item-action flex-column align-items-start">
		<div class="d-flex w-100 justify-content-between">
			<h5 class="mb-1">Healing</h5>
			<small class="text-muted">3 days ago</small>
		</div>
		 <span class="badge">14</span>

		<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		<small class="text-muted">Donec id elit non mi porta.</small>
		</a>
	</div>
  </div>
  
  
  
  
  
  <div class="row">
	<div class=" col-md-3 ">
  		  <img src="http://localhost/Website/river.jpg" width=330px height=130px>
	</div>


	<div class=" col-md-9 "> 
  
			<a href="#" class="list-group-item  list-group-item-action list-group-item-warning flex-column align-items-start">
			<div class="d-flex w-100 justify-content-between">
				<h5 class="mb-1">List group item heading</h5>
				<small class="text-muted">3 days ago</small>
			</div>
				<span class="badge">14</span>
				<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
				<small class="text-muted">Donec id elit non mi porta.</small>
			</a>
  
	</div>
  </div>
  
   <div class="row">
	<div class=" col-md-3 ">
  		  <img src="http://localhost/Website/river.jpg" width=330px height=130px>
		</div>
		<div class=" col-md-9 "> 
			<a href="#" class="list-group-item	 list-group-item-action flex-column align-items-start">
			<div class="d-flex w-100 justify-content-between">
				<h5 class="mb-1">List group item heading</h5>
				<small class="text-muted">3 days ago</small>
			</div>
			<span class="badge">14</span>

			<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
			<small class="text-muted">Donec id elit non mi porta.</small>
			</a>
			</div>
  
		
  
	</div>
  
  <div class="row">
	<div class=" col-md-3 ">
  		  <img src="http://localhost/Website/river.jpg" width=330px height=130px>
		</div>
		<div class=" col-md-9 "> 
  <a href="#" class="list-group-item  list-group-item-warning list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
	    <span class="badge">14</span>

    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
  </div>
  </div>
  <div class="row">
	<div class=" col-md-3 ">
  		  <img src="http://localhost/Website/river.jpg" width=330px height=130px>
		</div>
		<div class=" col-md-9 "> 
  <a href="#" class="list-group-item  list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
	    <span class="badge">14</span>

    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
  </div></div>
  
  
  <div class="row">
	<div class=" col-md-3 ">
  		  <img src="http://localhost/Website/river.jpg" width=330px height=130px>
		</div>
		<div class=" col-md-9 "> 
  <a href="#" class="list-group-item list-group-item-warning list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
	    <span class="badge">14</span>

    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
  </div></div>
  
  
  <div class="row">
	<div class=" col-md-3 ">
  		  <img src="http://localhost/Website/river.jpg" width=330px height=130px>
		</div>
		<div class=" col-md-9 "> 
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
	    <span class="badge">14</span>

    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
  </div></div>
  
  
  
  
  <div class="row">
	<div class=" col-md-3 ">
  		  <img src="http://localhost/Website/river.jpg" width=330px height=130px>
		</div>
		<div class=" col-md-9 "> 
  <a href="#" class="list-group-item  list-group-item-warning list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
	    <span class="badge">14</span>

    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
  </div></div>
  
  
  <div class="row">
	<div class=" col-md-3 ">
  		  <img src="http://localhost/Website/river.jpg" width=330px height=130px>
		</div>
		<div class=" col-md-9 "> 
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
	    <span class="badge">14</span>

    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
  </div></div>
</div>
</div>
</div>
</section>






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