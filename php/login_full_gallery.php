<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="canonical" href="http://localhost/Website/login_full_gallery.php">
	<meta name="robots" content="noindex, nofollow">
	<meta name="keywords" content="spiritual, healing, articles, upload">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gallery</title>

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
  background: url(img/camera2.jpg) center center no-repeat;
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
    background-image: url(img/wallpaper.jpg);
}
</style>
<!--Navbar -->
<body id="page-top" class="index">

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
                    <li >
                        <a  href="login2_def2.php#portfolio">Articles</a>
                    </li>
                    <li class="active">
                        <a  href="">Gallery</a>
                    </li>
                    <li >
                        <a  href="login_write.php">Upload</a>
                    </li>
                    <li>
                        <a href="login_favourites.php">Favourites</a>
                    </li>

                </ul>
				
				
				<ul class= "nav navbar-nav navbar-right"> <!--we wish to use an unordered list which will have no numerals but a lot of items within, vsible after hamburger is pressed-->
								<li class="dropdown">

				<a href="#" class="dropdown-toggle " data-toggle="dropdown">

<?php
echo $_SESSION['myValue'];
?>
</a></a>
				
				<!--when clicked, the user is directed to the feedback section-->
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
               <!-- <div class="intro-lead-in">Welcome To Our Studio!</div>-->
                <div class="intro-heading">GALLERY</div>
                <a href="login_write.php" class=" btn btn-xl">UPLOAD PHOTOS</a>
            </div>
        </div>
    </header>

	    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

	
	
	
				 
<!-- Navbar Ends-->





<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Favourites</h4>
      </div>
      <div class="modal-body">
        <p>Picture Added To Your Favourites List</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
			
		
<div class="bgimg text-center ">
<div class="container">     
	<div class="row">
		<div id="image-grid">
			<div class="row">
<br><br>


				<div class=" col-md-4 img wrapper"> 
					<a class="thumbnail text-center" href="http://localhost/Website/painting.jpg"> 
					<img alt="Img 0259" src="painting.jpg" class="img-responsive">
					</a>
					
					<div class="carousel-caption">
					
					
					<form action="http://localhost/Website/login_add_favourites.php" method="POST">
					<input type="hidden" id="pic_no" name="pic_no" value="http://localhost/Website/painting.jpg"/>
					<input type="hidden" id="user" name="user" value="
					<?php
						echo $_SESSION['myValue'];
					?> 
					"/>
			
						<button><a class="fa fa-heart" type="submit"></a> 
						<button><a href="http://localhost/Website/painting.jpg" download class="fa fa-download "> </a>
					</form>
					</div>
				</div>

				
				<div class=" col-md-4 img wrapper"> 
					<a class="thumbnail text-center" href="/images/3"> 
					<img alt="Img 0034" src="painting.jpg" class="img-responsive">
				</a>
				<div class="carousel-caption">
					<button><a href="http://localhost/Website/def2.html" download class="fa fa-heart"> </a>
					<button><a href="http://localhost/Website/def2.html" download class="fa fa-download "> </a>
				</div>
				</div>
				
				<div class=" col-md-4 img wrapper"> 
					<a class="thumbnail text-center" href="/images/2"> 
					<img alt="Img 0008" src="painting.jpg" class="img-responsive">
					</a>
					<div class="carousel-caption">
					<button><a href="http://localhost/Website/def2.html" download class="fa fa-heart"> </a>
					<button><a href="http://localhost/Website/def2.html" download class="fa fa-download "> </a>
				</div>
				</div>

				<div class=" col-md-4 img wrapper"> 
					<a class="thumbnail text-center" href="/images/4"> 
					<img alt="Rsz 1971061 10153145204760484 336557482 n" src="painting.jpg" class="img-responsive">
					</a>
					<div class="carousel-caption">
					<button><a href="http://localhost/Website/def2.html" download class="fa fa-heart"> </a>
					<button><a href="http://localhost/Website/def2.html" download class="fa fa-download "> </a>
				</div>
				</div>

				<div class=" col-md-4 img wrapper"> 
					<a class="thumbnail text-center" href="/images/5"> 
					<img alt="Digital radiograph1" src="painting.jpg" class="img-responsive">
					</a>
					
					<div class="carousel-caption">
					<button><a href="http://localhost/Website/def2.html" download class="fa fa-heart"> </a>
					<button><a href="http://localhost/Website/def2.html" download class="fa fa-download "> </a>
				</div>
				</div>
				
				<div class=" col-md-4 img wrapper"> 
					<a class="thumbnail text-center" href="/images/5"> 
					<img alt="Digital radiograph1" src="painting.jpg"  class="img-responsive">
					</a>
					<div class="carousel-caption">
					<button><a href="http://localhost/Website/def2.html" download class="fa fa-heart"> </a>
					<button><a href="http://localhost/Website/def2.html" download class="fa fa-download "> </a>
				</div>
				</div>

				<div class="col-md-4 img wrapper"> 
					<a class="thumbnail text-center" href="/images/6"> 
					<img alt="Pamo" src="painting.jpg" class="img-responsive">
					</a>
					<div class="carousel-caption">
					<button><a href="http://localhost/Website/def2.html" download class="fa fa-heart"> </a>
					<button><a href="http://localhost/Website/def2.html" download class="fa fa-download "> </a>
				</div>

				</div>
				
				
				

		</div>


</div>
</div>	
</div>







	
	<!--Footer-->
	
    <footer >
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