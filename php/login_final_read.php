<?php
session_start();
?>
<html>

<head>
<title> More FeedBack </title>

	<meta name="keywords" content="spiritual, healing, articles, upload">
	<meta name="robots" content="noindex, nofollow">
    <meta name="description" content="">


<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>


<script>
$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});
</script>

</head>


<style>
body { padding-top:30px; }
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


		body
		{
			padding-top: 40px;

		}
		

</style>

<style>
.red
{
	color:red;
}
</style>
<body >

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
			<a href= "http://localhost/Website/login2_def2.php" class= "navbar-brand">Hello World</a>
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
<br><br>
<br>




<div class="container">
    <div class="well"> 
        <div class="row">
             <div class="col-md-12">
                 <div class="row hidden-md hidden-lg"><h1 class="text-center" >gtgtgtTITULO LARGO DE UNA INVESTIGACION cualquiera</h1></div>
                     
                 <div class="pull-left col-md-4 col-xs-12 thumb-contenido"><img class="center-block img-responsive" src='http://localhost/Website/painting.jpg'  /></div>
                 <div class="">
                     <h1  class="hidden-xs hidden-sm">
					 <?php
					 
					 
					 ?>
					 
					 
					 
					 TffffffITULO LARGO DE UNA INVESTIGACION cualquiera</h1>
                     <hr>
                     <small>10 - 04 -2017</small><br>
                     <small><strong>Author</strong></small>
                     <hr>
                     <p class="text-justify">Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat. 
                 Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh.
                 Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat.
                 Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit.
                 Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, 
                 convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Nulla quis lorem ut libero malesuada feugiat.
                 Donec rutrum congue leo eget malesuada.<br><br>
                 
                 Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat. 
                 Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh.
                 Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat.
                 Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit.
                 Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, 
                 convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Nulla quis lorem ut libero malesuada feugiat.
                 Donec rutrum congue leo eget malesuada.<br><br>
                 
                 Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat. 
                 Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh.
                 Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat.
                 Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit.
                 Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, 
                 convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Nulla quis lorem ut libero malesuada feugiat.
                 Donec rutrum congue leo eget malesuada.<br><br>
                 
                 Nulla quis lorem ut libero malesuada feugiat. <br>
                 
                 Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh.
                 Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat.
                 Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit.
                 Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, 
                 convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Nulla quis lorem ut libero malesuada feugiat.
                 Donec rutrum congue leo eget malesuada.</p></div>
             </div>
        </div>
		
		</div>
		
		
        <div class="panel panel-default widget">
            <div class="panel-heading">
                <h3 class="panel-title">
                     Comments</h3>
					                 <span class="glyphicon glyphicon-comment"></span>

                <span class="label label-info">
                    78</span>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-2 col-md-1">
                                <img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>
                            <div class="col-xs-10 col-md-11">
                                <div>
                                    <a href="http://www.jquery2dotnet.com/2013/10/google-style-login-page-desing-usign.html">
                                        Google Style Login Page Design Using Bootstrap</a>
                                    <div class="mic-info">
                                        By: <a href="#">Bhaumik Patel</a> on 2 Aug 2013
                                    </div>
                                </div>
                                <div class="comment-text">
                                    Awesome design
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
                                    <a href="http://bootsnipp.com/BhaumikPatel/snippets/Obgj">Admin Panel Quick Shortcuts</a>
                                    <div class="mic-info">
                                        By: <a href="#">Bhaumik Patel</a> on 11 Nov 2013
                                    </div>
                                </div>
                                <div class="comment-text">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                                </div>
                                <div class="action">
                                   
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
                                    <a href="http://bootsnipp.com/BhaumikPatel/snippets/4ldn">Cool Sign Up</a>
                                    <div class="mic-info">
                                        By: <a href="#">Bhaumik Patel</a> on 11 Nov 2013
                                    </div>
                                </div>
                                <div class="comment-text">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                                </div>
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
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

    
</div>



	
<script src= "http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>