<?php
session_start();
include_once("adminheader.php");
require_once("vals.php");
?>
 <div class="container" id="content">

<form id="form1" name="form1" method="post" action="">
          <table width="100%" style="width:100%" border="0" align="center" cellspacing="0" cellpadding="5">
            <tr>
            <td>&nbsp;</td>
              <td align="center"><h2>List of Users</h2></td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2"><?php


	$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection " . mysqli_connect_error());	
	$q="select * from signup";
	$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==0)
	{
		$msg = "No members available";
	}
	else
	{
		print "<table class='mynewtab' align='center' cellspacing='0' cellpadding='10'>
		<tr align='left' bgcolor='#666666'>
			
			<th><font color='#FFFFFF'>Name</font></th>
			<th><font color='#FFFFFF'>Username</font></th>
			
			<th><font color='#FFFFFF'>Phone No</font></th>
			
			<th><font color='#FFFFFF'>DOB</font></th>
			<th><font color='#FFFFFF'>Gender</font></th>
			<th><font color='#FFFFFF'>Country</font></th>
			<th><font color='#FFFFFF'>Usertype</font></th>
			
		</tr>";
		while($x=mysqli_fetch_array($res))
		{
			print "<tr>
		
			<td>$x[0]</td>
			<td>$x[1]</td>
			
			<td>$x[3]</td>
			<td>$x[4]</td>
			<td>$x[5]</td>
		    <td>$x[6]</td>
		
			<td>$x[7]</td>
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
        </form></div>
        