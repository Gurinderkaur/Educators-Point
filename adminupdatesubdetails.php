<?php
session_start();
require_once("vals.php");

$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection" . mysqli_connect_error());
	$subjectid=$_GET["subjectid"];
	
	$q="select * from adminaddsub where subjectid='$subjectid'";
	$res=mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
	$y=mysqli_fetch_array($res);
	mysqli_close($conn);


if(isset($_POST["submit"]))
{
	$semesterid=$_POST["semesterid"];
	$subjectname=$_POST["subjectname"];
	
	$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection" . mysqli_connect_error());
	
	$q="update adminaddsub set semesterid='$semesterid',subjectname='$subjectname' where subjectid='$subjectid'";
	mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==1)
	{
		header("location:adminupdatesubject.php");
	}
	else
	{
		$msg="Problem while updating, please try again";
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
<table width="975" border="0" align="center" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td>	
	<?php
    
	include_once("adminheader1.php");
	
	?></td>
  </tr>
  <tr>
    <td><form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table width="775" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td><h2><font color="#000000">Update  Subject Details</font></h2></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong><font color="#000000">Choose Semester</font></strong></td>
          <td><select name="cat" id="cat">
            <option>Select</option>
			<?php
			require_once("vals.php");
			$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection" . mysqli_connect_error());
	
	$q="select * from adminaddsem";
	$res=mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==0)
	{
		print "<option>No Categories</option>";
	}
	else
	{
		while($x=mysqli_fetch_array($res))
		{
			if($x[0]==$y[1])
			{
			print "<option value='$x[0]' selected='selected'>$x[1]</option>";
			}
			else
			{
				print "<option value='$x[0]'>$x[1]</option>";
			}
		}
	}
			
			?>
            
            
          </select></td>
        </tr>
        <tr>
          <td><strong><font color="#000000">Subject Name</font></strong></td>
          <td><label for="subjectname"></label>
<input type="text" name="subjectname" id="subjectame" 
			value="<?php print $y[2]; ?>" /></td>
        </tr>
       
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="submit" id="submit" value="Update" />
            <input type="submit" name="s2" id="s2" value="Back" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><?php
          if(isset($msg))
		  {
			print $msg;  
		  }
		  
		  
		  ?></td>
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
    </form></td>
  </tr>
  <tr>
    <td><?php
    
	include_once("footer.php");
	
	?></td>
  </tr>
</table>
</body>
</html>