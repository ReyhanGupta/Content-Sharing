
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="canonical" href="http://localhost/Website/login2_def2.php">
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
  background: url(http://www.antoniodisalvo.com/wp-content/uploads/2016/02/old-books-37393-3840x2160.jpg) center center no-repeat;
  background-size: cover;
}
</style>

<style>

<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

@import url(https://fonts.googleapis.com/css?family=Cedarville+Cursive);

h1,
p,
.div,
#result {
    margin: 0.8em auto;
    
    color: #524f4e;
    font-family: 'Open Sans', sans-serif;
}

body {
    background-color: rgba(252, 237, 202, 0.4); 
    text-align: center;
}

h1 {
    margin-bottom: 0;
}

p,
#button {
    font-weight: bold;
}

#button {
    font-size: 0.8em;
    padding: 5px;
    border-radius: 5px;
    background-color: #fff;
    border: none;
    outline: none;
}

#button:hover {
    color: #fff;
    background-color: #1B95E0;
}

#result {
    margin: 1em auto;
    padding: 20px;
    
    height: auto;
    width: 500px;
    
    position: relative;
}

#result p,
#result blockquote {
    margin: 0;
    padding: 0; 
}

#result blockquote {
    position: relative;
    
    background: #fff;
	padding: 30px;
    border: 0;
	border-radius: 5px;
	box-shadow: 
		inset 0 2px 0 rgba(252, 237, 202, 0.1),
		-5px -4px 25px rgba(0, 0, 0, 0.3);
}

/* http://www.cssarrowplease.com/ */
#result blockquote:after, 
#result blockquote:before  {
	top: 100%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
}

#result blockquote:after  {
	border-top-color: #ffffff;
	border-width: 10px;
	left: 65%;
	margin-left: -10px;
}

#result blockquote:before {
	border-top-color: rgba(0,0,0,0.01);
	border-width: 11px;
	left: 65%;
	margin-left: -11px;
}

#quote,
#author {
    padding: 0;
    margin: 0;
    
    font-family: 'Cedarville Cursive', cursive;
}

#result blockquote p {
	line-height: 2.5em;
    text-align: left;
	font-style: italic;
    font-size: 1.1em;
    font-weight: 600;
    text-indent: 100px;
    
	position: relative;
}

#result blockquote p:before{
	content: '\201C';
	font-family: serif;
	font-style: normal;
	font-weight: 700;
	position: absolute;
	font-size: 10em;
	top: 0px;
	left: -105px;
	color: rgba(0, 0, 0, 0.6);
	text-shadow: 7px 14px 10px rgba(0, 0, 0, 0.1);
}

#result .attribution {
	text-align: right;
	padding: 20px 100px 20px 20px;
	position: relative;
}

#result .thumbnail {
	display: block;
	width: 70px;
	height: 70px;
	border: 5px solid #fff;
	border-radius: 50%;
    
    padding: 0;
    
    overflow: hidden;
	
	position: absolute;
	right: 10px;
	bottom: 5px;
	box-shadow: 
		inset 1px 1px 4px rgba(0,0,0,0.5),
		0 2px 3px rgba(0,0,0,0.6);
}

#result .thumbnail img {
    height: 100%;
    border: 0 solid #fff;
	border-radius: 50%;
}

p#author,
p#work {
	font-weight: 700;
	font-size: 18px;
	text-shadow: 0 1px 1px rgba(255,255,255,0.7);
}

p#work {
    font-size: 1em;
}
</style>


<style>

.carousel-control
{
  background: none;
  margin-top: 235px;
}


 
</style>

<style>
<style>
/* carousel */
#quote-carousel 
{
  padding: 0 10px 30px 10px;
  margin-top: 30px;
}

/* Control buttons  */
#quote-carousel .carousel-control
{
  background: none;
  color: #222;
  font-size: 2.3em;
  text-shadow: none;
  margin-top: 30px;
}
/* Previous button  */
#quote-carousel .carousel-control.left 
{
  left: -12px;
}
/* Next button  */
#quote-carousel .carousel-control.right 
{
  right: -12px !important;
}
/* Changes the position of the indicators */
#quote-carousel .carousel-indicators 
{
  right: 50%;
  top: auto;
  bottom: 0px;
  margin-right: -19px;
}
/* Changes the color of the indicators */
#quote-carousel .carousel-indicators li 
{
  background: #c0c0c0;
}
#quote-carousel .carousel-indicators .active 
{
  background: #333333;
}
#quote-carousel img
{
  width: 250px;
  height: 100px
}
/* End carousel */

.item blockquote {
    border-left: none; 
    margin: 0;
}

.item blockquote img {
    margin-bottom: 10px;
}

.item blockquote p:before {
    content: "\f10d";
    font-family: 'Fontawesome';
    float: left;
    margin-right: 10px;
}



/**
  MEDIA QUERIES
*/

/* Small devices (tablets, 768px and up) */
@media (min-width: 768px) { 
    #quote-carousel 
    {
      margin-bottom: 0;
      padding: 0 40px 30px 40px;
    }
    
}

/* Small devices (tablets, up to 768px) */
@media (max-width: 768px) { 
    
    /* Make the indicators larger for easier clicking with fingers/thumb on mobile */
    
    #quote-carousel .carousel-indicators {
        bottom: -20px !important;  
    }
    #quote-carousel .carousel-indicators li {
        display: inline-block;
        margin: 0px 5px;
        width: 15px;
        height: 15px;
    }
    #quote-carousel .carousel-indicators li.active {
        margin: 0px 5px;
        width: 20px;
        height: 20px;
    }
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

 <style> .carousel-inner > .item > img{ width:100%; height:500px; } </style>

<body id="page-top" class="index">
<style>
.header {
  width: 100%;
  height: 100%;
  background: url(http://www.antoniodisalvo.com/wp-content/uploads/2016/02/old-books-37393-3840x2160.jpg) center center no-repeat;
  background-size: cover;
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
    <link href="font-awesome.min.css" rel="stylesheet" type="text/css">

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
<li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll"href="#services">Features</a>
                    </li>
                    <li >
                        <a class="page-scroll" href="#portfolio">Articles</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll"href="login_write.php">Upload</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="login_favourites.php">Favourites</a>
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
                <a href="#services" class="page-scroll btn btn-xl">More</a>
            </div>
        </div>
    </header>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

	
	
	
	
	<br>	<br>
				 
<!-- Navbar Ends-->
      		
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content text-left">
      <div class="modal-header text-left">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload Articles</h4>
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
		
	<!--Quote of the day-->
	    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

<h1>Quote Of The Day!</h1>

<!--<p>Everyone loves Oscar Wilde!</p>-->

<div class="div">
    <button id="button">Get A Quote</button>
</div>

<div id="result">
    <div class="thumbnail">
        <img src="https://pbs.twimg.com/profile_images/44488162/oscar-small-sq_400x400.jpg" alt="" />
    </div>
    <blockquote>
        <p id="quote">We are all in the gutter, but some of us are looking at the stars.</p>
    </blockquote>
    <div class="attribution">
        <p id="author">Oscar Wilde</p>
        <p id="work"></p>
    </div>
</div>

                         <a href="#"> <i class=" fa fa-facebook">   </i> </a> 
                        <a href="#"> <i class="fa fa-twitter">   </i> </a> 
                        <a href="#"> <i class="fa fa-google-plus">   </i> </a> 
                         <a href="#"> <i class="fa fa-pinterest">   </i> </a> 
					<a href="#"><i class="fa fa-instagram"></i></a>

</div>
				<br>				<br>

	<!--Quote end-->
	
	
	
    <!-- Services Section -->
    <section id="services" class="bg-light-gray" >
        <div class="container" >
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Features</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row ">
			<!--Under the columns come the rows-->
				<div class="col-sm-3">
					<div class= "panel panel-default text-center">
						<div class="panel-body">
						
						<!--Optional add span tag now, otherwise even with pure panels its okay-->
							<img src="browser.png" >
							<h4> <br>Articles</h4>
							<p>Read great articles on topics ranging from spiritualism, healing, crystals, religions and practices, Buddhism, and many others alike to help you find peace and tranquility in the daily lives that we lead! </p>
						</div>
						<div class="panel-footer">
<a href="http://localhost/Website/login_badgeList.php"><strong> Get started</strong> </a>
						</div>
					</div>
				</div>
				
				
				
			
				
				
				
				<div class="col-sm-3">
					<div class= "panel panel-default text-center">
						<div class="panel-body">
														<img src="bookmark.png" >

							<h4> <br>Bookmark </h4>
								<p>Bookmark and add your favourite articles and images to your personal collection and read them offline or share them with frineds and family! All the great content right at your fingertips anytime you want! </p>
							</div>
						
						<div class="panel-footer">
						<a href="login_favourites.php"><strong>Get Started</strong></a>
						</div>
						
					</div>
				</div>
				
				
				
				
				
				<div class="col-sm-3">
					<div class= "panel panel-default text-center">
						<div class="panel-body">
														<img src="magic.png" >

							<h4> <br>Create Your Own! </h4>
								<p>Get a chance to become a valuable member of the XYxxxxxZzzzzz family ! Write great articles or choose great quotes based on the themes featured on this site and get them posted under your name and garner your own followers!</p>
						</div>
						
						<div class="panel-footer">
						<a href="login_write.php" ><strong>Get Started</strong></a>
						</div>
						
					</div>
				</div>
				
				
				
				
				
				<div class="col-sm-3">
					<div class= "panel panel-default ">
						<div class="panel-body">
								<img src="bag.png" >

							<h4><br> Embark on an exciting journey! </h4>
								<p>With new articles, quotes and pictures updated daily, you'll get a ride like never before on the road to personal growth and development! So fasten your seatbelts and don't stop!  </p>
						</div>
						<div class="panel-footer">
<a href=""> <strong>Get started</strong> </a>
						</div>
					</div>
				</div>
				
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Latest Articles!</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://localhost/Website/badgeList.php" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-chevron-circle-right fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/roundicons.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Round Icons</h4>
                        <p class="text-muted">Graphic Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-chevron-circle-right fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/startup-framework.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Startup Framework</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-chevron-circle-right fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/treehouse.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Treehouse</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
             
          <div class="container text-center">
	<form action= "http://localhost/Website/login_badgeList.php">
		<button type="submit" class="btn btn-primary" > See More </button>
		</form>
	</div>
                
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about"class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Gallery</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div></div>
				<div class="carousel slide" id= "screenshot-carousel" data-ride= "carousel">
			<ol class= "carousel-indicators">
				<li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
				<!--The number of images to be there in our gallery. And if active ,we see this by default-->
				<li data-target="#screenshot-carousel" data-slide-to="1"></li>
				<li data-target="#screenshot-carousel" data-slide-to="2"></li>
				<li data-target="#screenshot-carousel" data-slide-to="3"></li>
				<li data-target="#screenshot-carousel" data-slide-to="4"></li>
			</ol>
			
		<div class= "carousel-inner">
		<!--All images are a part of this class-->
			<div class="item active">
				<img src="8.png" alt="Text of the image" height="600" width="1200">
				<div class="carousel-caption">
					<h4> Lightining </h4>
					<p> This is the caption </p>
				</div>
			</div>
			<div class="item">
				<img src="street.jpg" alt="Text of the image" height="600" width="1200">
				<div class="carousel-caption">
					<h4> Lightining </h4>
					<p> This is the caption </p>
				</div>
			</div>
			<div class="item">
				<img src="painting.jpg" alt="Text of the image" height="600" width="1200">
				<div class="carousel-caption">
					<h4> Lightining </h4>
					<p> This is the caption </p>
				</div>
			</div>
			<div class="item">
				<img src="highway.jpg" alt="Text of the image" height="600" width="1200">
				<div class="carousel-caption">
					<h4> Lightining </h4>
					<p> This is the caption </p>
				</div>
			</div>
			<div class="item">
				<img src="http://images.all-free-download.com/images/graphiclarge/beautiful_scenery_highdefinition_picture_166210.jpg" alt="Text of the image" height="600" width="1200">
				<div class="carousel-caption">
					<h4> Lightining </h4>
					<p> This is the caption </p>
				</div>
			</div>
			
		</div> <!--End carousal inner-->
		<a href= "#screenshot-carousel" class="left carousel-control" data-slide="prev">
			<span class="fa fa-chevron-circle-left fa-3x">
			</span>
		<a href= "#screenshot-carousel" class="right carousel-control" data-slide="next">
			<span class="fa fa-chevron-circle-right fa-3x">
			</span>
		</a>
		</a>
		
		</div> <!--End Carousel-->
	<br>
	<div class="container text-center">
	<form action= "http://localhost/Website/login_full_gallery.php">
		<button type="submit" class="btn btn-primary" > See More </button>
		<hr>
		</form>
	</div>
				
            </div>
            
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">User Testimonials</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            
			
			<div class='row'>
    <div class='col-md-offset-2 col-md-8'>
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
        <!-- Bottom Carousel Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#quote-carousel" data-slide-to="1"></li>
          <li data-target="#quote-carousel" data-slide-to="2"></li>
        </ol>
        
        <!-- Carousel Slides / Quotes -->
        <div class="carousel-inner">
        
          <!-- Quote 1 -->
          <div class="item active">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="users.png" style="width: 100px;height:100px;">
                  <!--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="width: 100px;height:100px;">-->
                </div>
                <div class="col-sm-9">
                  <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
                  <small>Someone famous</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 2 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/mijustin/128.jpg" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.</p>
                  <small>Someone famous</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 3 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/keizgoesboom/128.jpg" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit,</p>
                  <small>Someone famous</small>
                </div>
              </div>
            </blockquote>
          </div>
        </div>
        <!-- Carousel Buttons Next/Prev -->
        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
</div>                    
                    
    </div>
  </div>
          
        </div>
    </section>

    <!-- Clients Aside -->
    

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
				
				
                    <form method="post" action="submit_message.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email"class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel"name="phone" class="form-control" placeholder="Your Phone *" id="phone" required  pattern="[0-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message"placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">	
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl" href="" >Send Message</button> <!--data-toggle="modal" data-target="#myModal"-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

	
	
	
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
				
				
				