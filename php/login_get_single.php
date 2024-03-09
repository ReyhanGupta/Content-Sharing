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

<nav class= "navbar navbar-default navbar-fixed-top" id="my-navbar"/>
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
			<a class="navbar-brand" href="login2_def2.php">
  <img src="ic_spa_white_18dp.png" height="18px" width="18px"style="display: inline-block;">
  <span style="display: inline-block;">&nbsp;Peace Of Mind</span>
</a>
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

				<a href="#" class="dropdown-toggle glyphicon glyphicon-user pull-right" data-toggle="dropdown">
<?php
echo $_SESSION['myValue'];
?>
</a></a>
				<!--when clicked, the user is directed to the feedback section-->
           <span class="glyphicon glyphicon-user pull-right"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Account  <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
            <li class="divider"></li>
            <li><a href="http://localhost/Website/login_write.php">Upload Article<span class="glyphicon glyphicon-plus pull-right"></span></a></li>
            <li class="divider"></li>
            <li><a href="#">Messages <span class="glyphicon glyphicon-envelope pull-right"> </span></a></li>
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

<!-- Modal -->
		
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title " id="exampleModalLabel"><strong>New Comment by
		<?php
echo $_SESSION['myValue'];
?>

&nbsp;
<div class="pull-right">
<?php
			echo date("Y/m/d");
			?>
			</div>
		</strong></h6>
        <button type="button" class=" close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="submit_feedback.php" method="POST">
          <div class="form-group">
			<input type="hidden" id="date" name="date" value="
			
			<?php
			echo date("Y/m/d");
			?>
			
			"/>

          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label">Feedback:</label>
            <textarea class="form-control" id="comment" name="comment"></textarea>
			
			<input type="hidden" id="corres_sno" name="corres_sno" value="
			
			<?php

				#	require "conn.php";
					#$sno = $_POST['extract'];
					#echo $sno;
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
        <button type="submit" class="btn btn-success">Add Feedback</button>
		      </div>

        </form>
      
        
      </div>
    </div>
  </div>
</div>
		


<div class="well text-center ">

	<h3  > More Feedback 
							<button type="submit" class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add Feedback </button>
<img src="">
							<span class="glyphicon glyphicon-thumbs-up pull-left " > &nbsp;  </span> 

	</h3>

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
                    </div>
                </div>
				
				</div>
				
				
				<div class="col-md-3">
				<br>	

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
                    </div>
                </div>
				
				</div>
				
				
				
				<div class="col-md-3">
				<br>

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
                    </div>
                </div>
				
				</div>
				
				
            </div>
			</div></div>



<script src= "http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
