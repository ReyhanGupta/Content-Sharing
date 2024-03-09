<html>

<head>
<title> More FeedBack </title>
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

				<li> <a href= "http://localhost/Website/signup.php">Signup </a>
			</ul>
		</div>
	</div> <!--Container ends here-->
</nav>
<br><br>
<br>




<!--Contact us-->
	<div class="container">
		<section>
			<div class= "page header" id="contact">
				<h3>Contact Us<small> Contact us for more</small></h3>
					<!--Divide row in 2 colums 4- address and 8 blocks -form-->
					<p>Send a mesage or contact us from address below</p>
			</div> 
			<!--Creating a row with 12 blocks-->
			<div class="row">
				<div class="col-lg-4">
					<address>
						<strong>X Company Pvt. Ltd. </strong><br>
						123, MG Road, Noida Sector 1 <br>
						C-14, Plot 56 <br>
						New Delhi-1100017 <br>
						P: +91 9083827382
					</address>
				
				</div>
				
				<div class="col-lg-8">
					<form action="https://www.google.co.in" class= "form-horizontal">
						<div class="form-group">
							<label for="user-name" class="col-lg-2 control-label">Name</label>
							<div class="col-lg-10">
								<!--Nested eleemtn inside 8 blocks, we further divide 8 into 10 parts-->
								<!--This column also has its own 10 blocks-->
								<input type="text" class="form-control" id="user-name" placeholder="Enter Name">
							</div>
						</div><!--End form group-->
						
						<div class="form-group">
							<label for="user-email" class="col-lg-2 control-label">Email</label>
							<div class="col-lg-10">
								<!--Nested eleemtn inside 8 blocks, we further divide 8 into 10 parts-->
								<!--This column also has its own 10 blocks-->
								<input type="text" class="form-control" id="user-email" placeholder="Enter Email">
							</div>
						</div><!--End form group-->
						
						<div class="form-group">
							<label for="user-url" class="col-lg-2 control-label">URL</label>
							<div class="col-lg-10">
								<!--Nested eleemtn inside 8 blocks, we further divide 8 into 10 parts-->
								<!--This column also has its own 10 blocks-->
								<input type="text" class="form-control" id="user-email" placeholder="Enter Company URL if any">
							</div>
						</div><!--End form group-->
						
						<div class="form-group">
							<label for="user-message" class="col-lg-2 control-label">Message</label>
							<div class="col-lg-10">
								<!--Nested eleemtn inside 8 blocks, we further divide 8 into 10 parts-->
								<!--This column also has its own 10 blocks-->
								<textarea name="user-message" id="user-message" class="form-control" cols="20", rows="10" placeholder="Enter your message">
								</textarea>
							</div>
						</div><!--End form group-->
						
						<div class="form-group">
							<div class="col-lg-10 col-lg-offset-2">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
						
					</form>
				</div>
			</div>
		</section>
	</div>
	
	
	
	
<script src= "http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>