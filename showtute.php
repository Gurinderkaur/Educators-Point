
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="975" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><?php
	session_start();
    
	require_once("adminheader.php");
	
	?></td>
  </tr>
  <tr>
    <td><table width="975" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
        <td valign="top">
        <div class="container" id="content">
        <form id="form1" name="form1" method="post" action="">
          <table width="975" border="0" align="center" cellspacing="0" cellpadding="5">
            <tr>
            <td>&nbsp;</td>
              <td align="center"><h2>List of Tutorials</h2></td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2"><?php
require_once("vals.php");
       
	   $nm=$_SESSION["n"];
	  
	   
	$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection " . mysqli_connect_error());	
	$q="select * from adminaddtutorial ";
	$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==0)
	{
		$msg = "No Tutorials available";
	}
	else
	{
		print "<table class='mynewtab' align='center' cellspacing='0' cellpadding='10'>
		<tr align='left' bgcolor='#666666'>
			
			<th><font color='#FFFFFF'>User Name</font></th>
			<th><font color='#FFFFFF'>Usertype</font></th>
			<th><font color='#FFFFFF'>Semester</font></th>
			<th><font color='#FFFFFF'>Subject</font></th>
			<th><font color='#FFFFFF'>Tutorial Name</font></th>
			
			<th><font color='#FFFFFF'>Tutorial File</font></th>
			<th><font color='#FFFFFF'>Delete</font></th>
			
			
		</tr>";
		while($x=mysqli_fetch_array($res))
		{
			print "<tr>
			<td>$x[7]</td>
			<td>$x[6]</td>
			<td>$x[1]</td>
			<td>$x[2]</td>
			<td>$x[3]</td>
			<td>$x[4]</td>
			<td><a href='deltute.php?tutorialid=$x[0]'>Delete</a></td>
			
		    
		
			
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
        </div></td>
        </tr>
    </table></td>
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
  <tr>
    <td><?php
    
	require_once("adminfooter.php");
	
	?></td>
  </tr>
</table>
</body>
</html>