<?php
session_start();

include_once("adminheader.php");
require_once("vals.php");
?>

<link href="../../../xampp/htdocs/cse/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../../../xampp/htdocs/cse/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="../../../xampp/htdocs/cse/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- for bootstrap working -->
	<script type="text/javascript" src="../../../xampp/htdocs/cse/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script src="../../../xampp/htdocs/cse/js/responsiveslides.min.js"></script>
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
  <script type="text/javascript" src="move-top.js"></script>
<script type="text/javascript" src="easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>


    <div class="container" id="content">
<h2 align="center">Show Semester</h2><p>&nbsp;</p>
    <form id="form1" name="form1" method="post" action="">
      <table width="100%" border="0"  align="center"cellspacing="0" cellpadding="0" align="center">

        <tr>
          <td >&nbsp;</td>
        </tr>
  
	
            
           <tr>
              <td><?php
			 
		require_once("vals.php");
				$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection" . mysqli_connect_error());
			$q="select * from adminaddsem";
	$res=mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
			$cnt=mysqli_affected_rows($conn);
			mysqli_close($conn);
			if($cnt==0)
			{
				$msg="No Semester found";
			}
			else
			{
				print "<table class='mynewtab' width='700' cellspacing='0'>
				<tr align='center' bgcolor='#666666'>
					
					<th>Semester Name</th>
					</tr>";
				while($x=mysqli_fetch_array($res))
				{
					print "<tr>
					<td>$x[1]</td>
					</tr>";
				}
				print "</table>";
			}
			  
		?></td>
            </tr> 
            
            
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            
          </table></td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
          <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
          <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
          <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
          <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
          <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
          <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      </table>
    </form>
    </div>
    <?php
    
	include_once("adminfooter.php");
	
	?>
