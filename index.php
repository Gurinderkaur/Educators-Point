
<?php
session_start();
require_once("vals.php");
if(isset($_POST["submit"]))
{
	$username=$_POST["username"];
	$password=$_POST["password"];
	$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection".mysqli_connect_error());
	$q="select * from signup where username='$username' and password='$password'";
$res=mysqli_query($conn,$q) or die("Error in query".mysqli_error($conn));
$cnt=mysqli_affected_rows($conn);
mysqli_close($conn);
if($cnt==1)
          {
				$x=mysqli_fetch_array($res);
				$_SESSION["n"]=$x[0];
				$_SESSION["username"]=$x[1];
				$_SESSION["utype"]=$x[7];
				if($x[7]=="admin")
				{
				header("location:adminlogin.php");	
			    }
				else
				{
				 header("location:index12.php");
					
				}
     }
	else
		{
			$msg="Incorrect Username/Password";
		}
			
	}

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
<title>Literacy a Education Category Flat Bootstrap responsive Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Literacy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
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
				<p> <a href="signup.php"><font color="#FFFFFF">Create An Account</font></a></p>
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
                    <form name="ab" method="post">
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							  <ul class="nav navbar-nav">
								<li><font color="#FFFFFF">Email</font></li>
								<li><input type="text" name="username" placeholder="abc@example.com"></li>
								
								<li><font color="#FFFFFF">Password</font></li>
                                <li><input type="password" name="password" placeholder="*****"></li>
                                <li><input type="submit" name="submit" value="Sign In"></li>
                                
							  </ul>
						  <div class="clearfix"></div>
                          </form>
						</div><!-- /.navbar-collapse -->
					</nav>
			</div>
			<!-- //navigation -->
		</div>
	</div>
    
     <!-- header-section-ends-here -->
    <div class="slider">
	    <ul class="rslides" id="slider1">
	      <li><img src="images/2.jpg" alt=""></li>
	      <li><img src="images/1.jpg" alt=""></li>
	    </ul>
    </div>
	
	<!-- content-section-starts-here -->
	
        
        
			
	<!-- //News-section -->
	<!-- //content-section-ends-here -->
	<!-- footer-section-starts-here -->
	<!-- footer-section -->
	<?php
	include_once("footer1.php");
	?>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 

</body
></html>