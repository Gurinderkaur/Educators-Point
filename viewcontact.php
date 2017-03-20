<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Feedback</title>
</head>
<?php
session_start();
include_once("adminheader.php")
?>
<body>
<div class="container" id="content">
<form id="form1" name="form1" method="post" action="">


<table width="700" align="center">
<tr>
<tr>
<td align="center"><h1>View Contact</h1></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<td> 
<?php
require_once("vals.php");


	$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection " . mysqli_connect_error());	
	$q="select * from contactus2 ";
	$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==0)
	{
		$msg = "No Content to display";
	}
	else
	{
		print "<table class='mynewtab' align='center' cellspacing='0' cellpadding='10'>
		<tr align='left' bgcolor='#666666'>
			
			<th><font color='#FFFFFF'>Name</font></th>
			<th><font color='#FFFFFF'>Email</font></th>
			
			<th><font color='#FFFFFF'>Message</font></th>
			
			<th><font color='#FFFFFF'>Date</font></th>
			
			
			
		</tr>";
		while($x=mysqli_fetch_array($res))
		{
			print "<tr>
		
			<td>$x[0]</td>
			<td>$x[1]</td>
			
			<td>$x[3]</td>
			
			<td>$x[4]</td>
			
			
			</tr>";
		}
		print "</table>";
	}
?></td>
            </tr>
            </table>
            </form>
</div>
</body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p></td>
<?php include_once("adminfooter.php");
?>
</html>