<?php
session_start();

?>



<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Educators Point</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
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
	<?php
	include_once("header.php");
	?>
    <!-- header-section-ends-here -->
    <div class="slider">
	    <ul class="rslides" id="slider1">
	      <li><img src="images/2.jpg" alt=""></li>
	      <li><img src="images/3.jpg" alt=""></li>
	      <li><img src="images/4.jpg" alt=""></li>
	      <li><img src="images/5.jpg" alt=""></li>
	    </ul>
    </div>
	
	<!-- content-section-starts-here -->
	<div class="content">
		<div class="welcome-top">
			<div class="container">
				<div class="col-md-6 welcome_top_left">
					<h3>WELCOME</h3>
					<h5>TO OUR EDUCATION GROUP</h5>
					<p>Ramninder Singh is simply dummy printing industry. It has survived not. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently.</p>
				</div>
				<div class="col-md-6 welcome_top_right">
					<h3>WE'RE OPEN</h3>
					<h5>In Sed Ut perspiciatis Street</h5>
					<div class="welcome_right_location">
						<div class="location_img">
							<img src="images/loc.jpg" alt="" />
						</div>
						<div class="location">
							<p>Lorem Ipsum has been the industry's since the 1500s. It has survived centuries.</p>
							<p class="location_text"><span class="glyphicon glyphicon-map-marker"></span>795 Folsom Ave, Suite 600,San Francisco, CA 94107</p>
							<p class="location_text"><span class="glyphicon glyphicon-dashboard"></span>Mon to Sat 8:30am - 4:30pm,  Sunday - Holiday</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
	
		</div>
		<!-- //Our-staff-ends -->
        
        
			
	<!-- //News-section -->
	<!-- //content-section-ends-here -->
	<!-- footer-section-starts-here -->
	<!-- footer-section -->
	<div class="footer">
		<div class="footer-top">
			
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="copyrights text-center">
					<p>© 2016 Educators Point. All Rights Reserved</p>					
				</div>
				<div class="footer-nav">
							  <ul>
						<li><a class="scroll" href="#movetop">Home <span class="sr-only">(current)</span></a></li>
								<li><a href="download.php">Tutorials</a></li>								
								<li><a href="contact.php">Contact Us</a></li>
                                <li><a href="feedback.php">FeedBack</a></li>
                                <li><a href="headerch.php">Sign Out</a></li>
                                
							  </ul>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div><!-- header-section-ends-here -->
	
	<!-- //footer-section -->
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
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 

</body>
</html>