<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
        </html>