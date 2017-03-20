<?php
if(!isset($_SESSION["utype"]))
{
	header("location:index.php");
}
else if($_SESSION["utype"]!="admin")
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Educators Point</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary tyfor Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 1
      $("#slider1").responsiveSlides({
         auto: true,
		 nav: true,
		 speed: 500,
		 namespace: "callbacks",
      });
    });
  </script>
  <!-- web-fonts -->
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600italic,400italic,600,300italic,300,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- web-fonts -->
  <script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
</head>
<body>
	<!-- header-section-starts-here -->
	<div class="header" id="movetop">
		<div class="container">
			<div class="header-top">
				<p>Welcome ,<font size="+1" color="#FFFFFF"><?php 
			   if(isset($_SESSION["n"]))
			   {
				
				print $_SESSION["n"];
				
			   }

	   else
			   {
				   
				print "Guest";
				   
			   }
			   
			   
			   ?></font></p>
				<div class="logo">
				  <h1><a href="index.php">Educators Point</a></h1>
				</div>
				<div class="social-icons">
					<ul>
						<li><a class="facebook" href="#"></a></li>
						<li><a class="twitter" href="#"></a></li>
						<li><a class="google-plus" href="#"></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- navigation -->
			<div class="navigation">
					<nav class="navbar navbar-default">
					 
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							  <ul class="nav navbar-nav">
								<li class="active"><a href="adminlogin.php">Home <span class="sr-only">(current)</span></a></li>
								<li><a href="userlist.php">Users</a></li>
                                <li><a href="show.php">Show </a></li>
								<li><a href="addadmin.php">Add Admin</a></li>
                                <li><a href="updation.php">Updation</a></li>

                                <li><a href="signout.php">Sign Out</a></li>
                                
					  <div class="clearfix"></div>
						</div><!-- /.navbar-collapse -->
                        
					</nav>
			</div>
			<!-- //navigation -->
		</div>
	</div>
	<!-- header-section-ends-here -->
    
	
    <!-- content-section-starts-here --><!-- //News-section -->
	<!-- //content-section-ends-here -->
	<!-- footer-section-starts-here -->
	<!-- footer-section --><!-- //footer-section -->
	<!-- //footer-section-ends-here -->
	<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script><!----> 

