<?php
session_start();
?>

<html>

<head>
<title> More FeedBack </title>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	
		<meta name="description" content="">

	<meta name="keywords" content="spiritual, healing, articles, upload">

</head>
<style>
		body
		{
			padding-top: 40px;
		}
	</style>
	
	<style>
.red
{
	color:red;
	background:cca;
}
</style>
	<style>
	html {
    font-family: Lato, 'Helvetica Neue', Arial, Helvetica, sans-serif;
    font-size: 14px;
}

h5 {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
    margin: 0;
}

.card {
    font-size: 1em;
    overflow: hidden;
    padding: 0;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
}

.card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    padding: 1em;
    border: none;
    border-top: 1px solid rgba(34, 36, 38, .1);
    box-shadow: none;
}

.card-img-top {
    display: block;
    width: 100%;
    height: auto;
}

.card-title {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
}

.card-text {
    clear: both;
    margin-top: .5em;
    color: rgba(0, 0, 0, .68);
}

.card-footer {
    font-size: 1em;
    position: static;
    top: 0;
    left: 0;
    max-width: 100%;
    padding: .75em 1em;
    color: rgba(0, 0, 0, .4);
    border-top: 1px solid rgba(0, 0, 0, .05) !important;
    background: #fff;
}

.card-inverse .btn {
    border: 1px solid rgba(0, 0, 0, .05);
}

.profile {
    position: absolute;
    top: -12px;
    display: inline-block;
    overflow: hidden;
    box-sizing: border-box;
    width: 25px;
    height: 25px;
    margin: 0;
    border: 1px solid #fff;
    border-radius: 50%;
}

.profile-avatar {
    display: block;
    width: 100%;
    height: auto;
    border-radius: 50%;
}

.profile-inline {
    position: relative;
    top: 0;
    display: inline-block;
}

.profile-inline ~ .card-title {
    display: inline-block;
    margin-left: 4px;
    vertical-align: top;
}

.text-bold {
    font-weight: 700;
}

.meta {
    font-size: 1em;
    color: rgba(0, 0, 0, .4);
}

.meta a {
    text-decoration: none;
    color: rgba(0, 0, 0, .4);
}

.meta a:hover {
    color: rgba(0, 0, 0, .87);
}
	
	</style>
<body>

<nav class= "navbar navbar-inverse navbar-fixed-top" id="my-navbar"/>
	<!-- navbar class helps us create resizable bootstrap navbars. inverse: crats a black inverted navigarion bar. Default bars are white. fixed top: as we scroll, the bar stays fixed. -->
	<div class="container">
	<!--Everyrthing inside this navba is present i this container, separated by the div tag-->
		<div class="navbar-header">
			<!--website logo/name comes here-->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
			<!--here id navbar collapsewill be resued: we have given this button an id which will be reused later to tell exactl what it will do-->
			<!--collape makes it adjustible to msaller screen sizes(hamburger icon, not visilbe on large screens but on smaller ones like tab or mobkle). Icon bars seen inside butons are created next: -->
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<!-- to insert a logo -->
			<a href= "http://localhost/Website/def2.html" class= "navbar-brand">Hello World</a>
		</div>
		<!--Navbar header ends-->
		<!--now, hamburger is made to come alive, when mobile user clicks hamburger, a drop down list shows up which wont show on  computer-->
		 
		<div class= "collapse navbar-collapse" id="navbar-collapse">
		<!--To create a button in the nav bar. Button can be created even using an href ttag with class as button-->
			<!--<a href="http://localhost/Website/" class="btn btn-warning navbar-btn navbar-right">Download Now</a>-->
			<!--navbar-btn aligns the button with the nav bar-->
		
		<!--id navbar collapse tell that hamburger is to be linked to this-->
			<ul class= "nav navbar-nav"> <!--we wish to use an unordered list which will have no numerals but a lot of items within, vsible after hamburger is pressed-->
				<li> <a href= "#feedback">Feedback </a> <!--when clicked, the user is directed to the feedback section-->
				<li> <a href= "http://localhost/Website/def2.html#gallery">Gallery </a>
				<li> <a href= "#features">Features </a>
				<li> <a href= "#faq">FAQ </a>
				<li> <a href= "#contact">Contact Us </a>
			</ul>
			<ul class= "nav navbar-nav navbar-right"> <!--we wish to use an unordered list which will have no numerals but a lot of items within, vsible after hamburger is pressed-->
			
			<li class="dropdown">

				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome
<?php
echo $_SESSION['myValue'];
?>

</a>
				<!--when clicked, the user is directed to the feedback section-->
           <span class="glyphicon glyphicon-user pull-right"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Account  <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
            <li class="divider"></li>
            <li><a href="#">Create  <span class="glyphicon glyphicon-stats pull-right"></span></a></li>
            <li class="divider"></li>
            <li><a href="#">Messages <span class="badge pull-right"> 42 </span></a></li>
            <li class="divider"></li>
            <li><a href="#">Favourites  <span class="glyphicon glyphicon-heart pull-right"></span></a></li>
            <li class="divider"></li>
            <li><a href="http://localhost/Website/logout.php">Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
          </ul>
        </li>
			</ul>
		</div>
	</div> <!--Container ends here-->
</nav>
<br>
<div class="well ">

	<h3 > More Feedback </h3>
<br>
<div class="container">
        <div class="row">
  <!--<div class="col-sm-6 col-md-4 col-lg-3 mt-4">-->
  <div class="col-md-3">
                <div class="card card-inverse card-info ">
                    <img class="card-img-top" src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif">
                    <div class="card-block ">
                        <figure class="profile">
                            <img src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title mt-3">Tawshif Ahsan Khan</h4>
                        <div class="meta card-text">
                            <a>Friends</a>
                        </div>
                        <div class="card-text">
                            Tawshif is a web designer living in Bangladesh.
                        </div>
                    </div>
                    <div class="card-footer">
                        <small>Last updated 3 mins ago</small>
                        <button class="btn btn-info float-right btn-sm">Follow</button>
                    </div>
                </div>
				
				</div>
				  <div class="col-md-3">

				<div class="card card-inverse card-info ">
                    <img class="card-img-top" src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif">
                    <div class="card-block ">
                        <figure class="profile">
                            <img src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title mt-3">Tawshif Ahsan Khan</h4>
                        <div class="meta card-text">
                            <a>Friends</a>
                        </div>
                        <div class="card-text">
                            Tawshif is a web designer living in Bangladesh.
                        </div>
                    </div>
                    <div class="card-footer">
                        <small>Last updated 3 mins ago</small>
                        <button class="btn btn-info float-right btn-sm">Follow</button>
                    </div>
                </div>
				
				</div>
				
				
				
				
				<div class="col-md-3">

				<div class="card card-inverse card-info ">
                    <img class="card-img-top" src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif">
                    <div class="card-block ">
                        <figure class="profile">
                            <img src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title mt-3">Tawshif Ahsan Khan</h4>
                        <div class="meta card-text">
                            <a>Friends</a>
                        </div>
                        <div class="card-text">
                            Tawshif is a web designer living in Bangladesh.
                        </div>
                    </div>
                    <div class="card-footer">
                        <small>Last updated 3 mins ago</small>
                        <button class="btn btn-info float-right btn-sm">Follow</button>
                    </div>
                </div>
				
				</div>
				
				
				<div class="col-md-3">

				<div class="card card-inverse card-info ">
                    <img class="card-img-top" src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif">
                    <div class="card-block ">
                        <figure class="profile">
                            <img src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title mt-3">Tawshif Ahsan Khan</h4>
                        <div class="meta card-text">
                            <a>Friends</a>
                        </div>
                        <div class="card-text">
                            Tawshif is a web designer living in Bangladesh.
                        </div>
                    </div>
                    <div class="card-footer">
                        <small>Last updated 3 mins ago</small>
                        <button class="btn btn-info float-right btn-sm">Follow</button>
                    </div>
                </div>
				
				</div>
				
				
				
				<div class="col-md-3">

				<div class="card card-inverse card-info ">
                    <img class="card-img-top" src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif">
                    <div class="card-block ">
                        <figure class="profile">
                            <img src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title mt-3">Tawshif Ahsan Khan</h4>
                        <div class="meta card-text">
                            <a>Friends</a>
                        </div>
                        <div class="card-text">
                            Tawshif is a web designer living in Bangladesh.
                        </div>
                    </div>
                    <div class="card-footer">
                        <small>Last updated 3 mins ago</small>
                        <button class="btn btn-info float-right btn-sm">Follow</button>
                    </div>
                </div>
				
				</div>
				
				
				
				<div class="col-md-3">

				<div class="card card-inverse card-info ">
                    <img class="card-img-top" src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif">
                    <div class="card-block ">
                        <figure class="profile">
                            <img src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title mt-3">Tawshif Ahsan Khan</h4>
                        <div class="meta card-text">
                            <a>Friends</a>
                        </div>
                        <div class="card-text">
                            Tawshif is a web designer living in Bangladesh.
                        </div>
                    </div>
                    <div class="card-footer">
                        <small>Last updated 3 mins ago</small>
                        <button class="btn btn-info float-right btn-sm">Follow</button>
                    </div>
                </div>
				
				</div>
				
				
            </div>
			</div></div>
<div class="container">




<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start ">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Heading</h5>
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
    <p class="mb-1">Main content comes here</p>
    <small>Name of author</small>
  </a>
  
  
  
  
  <a href="#" class="list-group-item list-group-item-success list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
  
  <a href="#" class="list-group-item list-group-item-info list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
  
  
  <a href="#" class="list-group-item list-group-item-warning list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
  
  
  <a href="#" class="list-group-item list-group-item-danger list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
  
  
  <a href="#" class="list-group-item  list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
  
  <a href="#" class="list-group-item list-group-item-success list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
  
  <a href="#" class="list-group-item list-group-item-info list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
  
  
  <a href="#" class="list-group-item list-group-item-warning list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
  
  
  <a href="#" class="list-group-item list-group-item-danger list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
  
</div>

</div>


<script src= "http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
