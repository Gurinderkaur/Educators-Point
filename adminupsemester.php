<?php
session_start();
include_once("adminheader.php");
?>

    <div class="container" id="content">
<h2 align="center">List of Semesters</h2><p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="">
          <table width="100%" border="0"  align="center" cellspacing="0" cellpadding="5">

            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
      <td colspan="2"><?php
	  
       require_once("vals.php");
	   $nm=$_SESSION["n"];
	$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection " . mysqli_connect_error());	
	$q="select * from adminaddsem";
	$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==0)
	{
		$msg = "No members available";
	}
	else
	{
		print "<table class='mynewtab' align='center' cellspacing='0'>
		<tr align='left' bgcolor='#666666'>

	
			<th><font color='#FFFFFF'>Semester Name</font></th>
			
			
			
			<th>Update</th>
			<th>Delete</th>
			
		</tr>";
		while($x=mysqli_fetch_array($res))
		{
			print "<tr>
			
	
		<td>$x[1]</td>
			
	
			
			<td><a href='adminupdatesem.php?semesterid=$x[0]'>Update</a></td>
			<td><a href='admindeletesemmain.php?semesterid=$x[0]'>Delete</a></td>
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
        <?php
		include_once("adminfooter.php");
		?>