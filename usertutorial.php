<?php
session_start();
include_once("adminheader.php");
?>
<div class="container" id="content">
<form id="form1" name="form1" method="post" action="">
          <table width="975" border="0"  align="center"cellspacing="0" cellpadding="5">
            <tr>
              <td colspan="2" align="center"><h2>List of Tutorial</h2></td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2"><?php
require_once("vals.php");
       
	   $nm=$_SESSION["n"];
	  
	   
	$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection " . mysqli_connect_error());	
	$q="select * from adminaddtutorial";
	$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==0)
	{
		$msg = "No members available";
	}
	else
	{
		print  "<table class='mynewtab' align='center' cellspacing='0' cellpadding='10'>
		<tr align='left' bgcolor='#666666'>
			
	
			<th><font color='#ffffff'>Tutorial Name</font></th>
			
			
			<th><font color='#ffffff'>Approval</font></th>
			<th><font color='#ffffff'>Update</font></th>
			<th><font color='#ffffff'>Delete</font></th>
			
		</tr>";
		while($x=mysqli_fetch_array($res))
		{
			print "<tr>
			
	
		<td>$x[3]</td>
			
	
			<td>$x[5]</td>
			<td><a href='adapprove.php?tutorialid=$x[0]'>Approve</a></td>
			<td><a href='deltut.php?tutorialid=$x[0]'>Disapprove</a></td>
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
        </div>
        <?php
		include_once("adminfooter.php");
		?>