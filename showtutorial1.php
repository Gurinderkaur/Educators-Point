<?php
session_start();
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
<table width="975" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>	
	<?php
    
	include_once("adminheader.php");
	
	?></td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="">
      <table width="975" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td valign="top"><h2><font color="#000000">Update/Delete Subject</font></h2></td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td valign="top"><table width="900" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="191"><font color="#000000">Choose Semester</font></td>
              <td width="709"><select name="semester" id="semester">
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
		print "<option>No Semester</option>";
	}
	else
	{
		while($x=mysqli_fetch_array($res))
		{
			print "<option value='$x[0]'>$x[1]</option>";
		}
	}
			
			?>
              </select>
                <input type="submit" name="viewsubcat" id="viewsubcat" value="GO" /></td>
            </tr>
            <tr>
              <td width="191"><font color="#000000">Choose Subject</font></td>
              <td width="709"><select name="subject" id="subject">
                <option>Select</option>
                <?php
			require_once("vals.php");
			$semesterid=$_POST["semester"];
			
			$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection" . mysqli_connect_error());
	
	$q="select * from adminaddsub where semesterid='$semesterid'";
	$res=mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==0)
	{
		print "<option>No Subject</option>";
	}
	else
	{
		while($x=mysqli_fetch_array($res))
		{
			print "<option value='$x[1]'>$x[2]</option>";
		}
	}
			
			?>
              </select>
                <input type="submit" name="viewsubcat" id="viewsubcat" value="GO" /></td>
            </tr>
            
            
            
           <tr>
              <td>&nbsp;</td>
              <td><?php
			  if(isset($_POST["viewsubcat"]))
			  {
				 $subjectid=$_POST["subject"];
		require_once("vals.php");
				$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection" . mysqli_connect_error());
			$q="select * from adminaddtutorial where subjectid='$subjectid'";
	$res=mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
			$cnt=mysqli_affected_rows($conn);
			mysqli_close($conn);
			if($cnt==0)
			{
				$msg="No tutorial found";
			}
			else
			{
				print "<table width='700' cellspacing='0'>
				<tr align='left' bgcolor='#990000'>
					
					<th>Tutorial Name</th>
					<th>Update</th>
					<th>Delete</th>
				</tr>";
				while($x=mysqli_fetch_array($res))
				{
					print "<tr bgcolor='#EFC7C8'>
					<td>$x[3]</td>
		<td><a href='adminupdatesubjectdetails.php?subjectid=$x[0]'>Update</a></td>
					<td><a href='admindelsubject.php?subjectid=$x[0]'>Delete</a></td>
					</tr>";
				}
				print "</table>";
			}
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