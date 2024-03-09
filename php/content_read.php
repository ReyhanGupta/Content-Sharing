
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="canonical" href="http://localhost/Website/content_read.php">
	<meta name="robots" content="noindex, nofollow">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>
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
  background: url(img/stone.jpg) center center no-repeat;
  background-size: cover;
}
</style>

<style>

body {   

}

.container {
  padding: 20px;
}

.profile-card {
    background-color: #222222;
  margin-bottom: 20px;
			
		}
		
.profile-pic {
  border-radius: 50%;
  position: absolute;
  top: -65px;
  left: 0;
  right: 0;
  margin: auto;
  z-index: 1;
  max-width: 100px;
  -webkit-transition: all 0.4s;
		  transition: all 0.4s;
				}

				
.profile-info {
		color: #BDBDBD;
		padding: 25px;
	    position: relative;
	    margin-top: 15px;
				}
		
.profile-info h2 {
	color: #E8E8E8;
    letter-spacing: 4px;
	  padding-bottom: 12px;
				}
				
.profile-info span {
	display: block;
    font-size: 12px;
    color: #4CB493;
	letter-spacing: 2px;
			}

.profile-info a {
	 color: #4CB493;
		}
.profile-info i {
	    padding: 15px 35px 0px 35px;
		}
		

.profile-card:hover .profile-pic {
	
	transform: scale(1.1);
		}

.profile-card:hover .profile-info hr  {
	opacity: 1;
		}
		
		
		
		
/* Underline From Center */
.hvr-underline-from-center {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  overflow: hidden;
}
.hvr-underline-from-center:before {
  content: "";
  position: absolute;
  z-index: -1;
  left: 52%;
  right: 52%;
  bottom: 0;
  background: #FFFFFF;
  border-radius: 50%;
  height: 3px;
  -webkit-transition-property: all;
  transition-property: all;
  -webkit-transition-duration: 0.2s;
  transition-duration: 0.2s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.profile-card:hover .hvr-underline-from-center:before, .profile-card:focus .hvr-underline-from-center:before, .profile-card:active .hvr-underline-from-center:before {
  left: 0;
  right: 0;
  height: 1px;
  background: #CECECE;
}

</style>
<style>
.bgimg {
    background-image: url(img/rrr.jpg);
}
</style>



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
               <!-- <div class="intro-lead-in">Welcome To Our Studio!</div>-->
                <div class="intro-heading">Healing</div>
                <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

	
	
	
	
	<br>	<br>
				 
<!-- Navbar Ends-->


	 
    <div class="col-lg-12 ">


        <div class="col-md-4 ">
          <div class="profile-card text-center">

            <img class="img-responsive" src="https://images.unsplash.com/photo-1454678904372-2ca94103eca4?crop=entropy&fit=crop&fm=jpg&h=975&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1925">
            <div class="profile-info">

								  			   		

             <!--Profilepic of writer can come here <img class="profile-pic" src="https://pbs.twimg.com/profile_images/711000557742395396/jzm8hqwW.jpg">-->

              <h2 class="hvr-underline-from-center">Rod<span>Digital / Design Consultant</span></h2>

              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>

			  <form action="http://localhost/Website/final_read.php" method="POST">
			<a href="http://www.twitter.com/mike_youngg"><i class="fa fa-twitter fa-2x"></i></a>
			<input type="hidden" name="extract" value="3"/>

             <input type="Submit" class="btn btn-danger" value="Read">   
			 <a href="mailto:michael_y@live.co.uk"><i class="fa fa-envelope-o fa-2x"></i></a>
            <!--  <a href="http://www.linkedin.com"><i class="fa fa-linkedin fa-2x"></i></a> -->
			</form>
			  
			  
            </div>

          </div>
        </div>
      
       
	    <div class="col-md-4 ">
          <div class="profile-card text-center">

            <img class="img-responsive" src="https://images.unsplash.com/photo-1454678904372-2ca94103eca4?crop=entropy&fit=crop&fm=jpg&h=975&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1925">
            <div class="profile-info">


              <h2 class="hvr-underline-from-center">Rod<span>Digital / Design Consultant</span></h2>
              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
              <a href="http://www.twitter.com/mike_youngg"><i class="fa fa-twitter fa-2x"></i></a>
             <button type="submit" class="btn btn-danger" > Read </button> 
             
			 <a href="mailto:michael_y@live.co.uk"><i class="fa fa-envelope-o fa-2x"></i></a>
              <a href="http://www.linkedin.com"><i class="fa fa-linkedin fa-2x"></i></a>
            </div>

          </div>
        </div>
		
		
		
		
		
		 <div class="col-md-4 ">
          <div class="profile-card text-center">

            <img class="img-responsive" src="https://images.unsplash.com/photo-1454678904372-2ca94103eca4?crop=entropy&fit=crop&fm=jpg&h=975&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1925">
            <div class="profile-info">


              <h2 class="hvr-underline-from-center">Rod<span>Digital / Design Consultant</span></h2>
              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
              <a href="http://www.twitter.com/mike_youngg"><i class="fa fa-twitter fa-2x"></i></a>
                           <button type="submit" class="btn btn-danger" > Read </button> 

						   <a href="mailto:michael_y@live.co.uk"><i class="fa fa-envelope-o fa-2x"></i></a>
              <a href="http://www.linkedin.com"><i class="fa fa-linkedin fa-2x"></i></a>
            </div>

          </div>
        </div>
		
		
		
		
		 <div class="col-md-4 ">
          <div class="profile-card text-center">

            <img class="img-responsive" src="https://images.unsplash.com/photo-1454678904372-2ca94103eca4?crop=entropy&fit=crop&fm=jpg&h=975&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1925">
            <div class="profile-info">


              <h2 class="hvr-underline-from-center">Rod<span>Digital / Design Consultant</span></h2>
              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
              <a href="http://www.twitter.com/mike_youngg"><i class="fa fa-twitter fa-2x"></i></a>
             <button type="submit" class="btn btn-danger" > Read </button> 
             
			 <a href="mailto:michael_y@live.co.uk"><i class="fa fa-envelope-o fa-2x"></i></a>
              <a href="http://www.linkedin.com"><i class="fa fa-linkedin fa-2x"></i></a>
            </div>

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