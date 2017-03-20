<?php
session_start();
include_once("header.php");
require_once("vals.php");
if(isset($_POST["submit"]))
{
	$semesterid=$_POST["sem"];
	$subjectid=$_POST["subject"];
	
		
			
	
	$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection " . mysqli_connect_error());	
	
	
	
	
	$q="select * from adminaddtutorial where subjectid='$subjectid' and approval='yes'";
	
	$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	
	$cnt=mysqli_affected_rows($conn);
	
	
}
?>


<div class="container" id="content">
<h1 class="heading text-center">Download Tutorial</h1><p>&nbsp;</p>
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  
  <tr>
    <td><table width="700" border="0" cellspacing="0" cellpadding="0" align="center" >
      <tr>
        <td valign="top"><form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
          <table width="700" border="0" cellspacing="0" cellpadding="5">

            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td align="center">Choose Semester</td>
              <td><label for="sem"></label>
                <select name="sem" id="sem">
                  <option>Select</option>
                  <?php
				  
				  $conn=mysqli_connect(host,username,password,dbname) or die(mysqli_connect_error());
				  $q="select * from adminaddsem";
	$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	
	$cnt=mysqli_affected_rows($conn);
	
	if($cnt==0)
	{
		print "<option>No Semester available</option>";
	}
	else
	{
		while($x=mysqli_fetch_array($res))
		{
			if(isset($_POST["viewsub"]))
			{
				$semesterid=$_POST["sem"];
				if($x[0]==$semesterid)
				{
					
					print "<option value='$x[0]' selected='selected'>$x[1]</option>";	
				}
				else
				{
					print "<option value='$x[0]'>$x[1]</option>";						
				}
			}
			else
			{
				print "<option value='$x[0]'>$x[1]</option>";	
			}
		}
	}
				  
				  
				  
				  ?>
                </select>
                &nbsp;                
                <input type="submit" name="viewsub" id="viewsub" value="GO" /></td>
                <td>&nbsp;</td>
            </tr>
             <tr>
              <td>&nbsp;</td>
              </tr>
            <tr>
              <td align="center">Choose Subject</td>
              <td><select name="subject" id="subject">
                <option>Select</option>
                <?php
				  if(isset($_POST["viewsub"]))
				  {
					  $semesterid=$_POST["sem"];
					  $conn=mysqli_connect(host,username,password,dbname) or die("Error in connection " . mysqli_connect_error());	

	$q="select * from adminaddsub where semesterid=$semesterid";
	
	$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	
	$cnt=mysqli_affected_rows($conn);
	
	if($cnt==0)
	{
		print "<option>No subject available</option>";
	}
	else
	{
		while($x=mysqli_fetch_array($res))
		{
			print "<option value='$x[0]'>$x[2]</option>";	
		}
	}
}
				  
				  
				  ?>
              </select></td>
              
               
            </tr>
           <tr>
              <td>&nbsp;</td>
               <tr>
              <td>&nbsp;</td>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="submit" id="submit" value="View Tutorial" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><?php
              if(isset($msg))
			  {
			  	print $msg;
			  }
			  
			  ?></font></td>
            </tr>
           
          </table>
        </form>
        <tr>
        <td><table width="975" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td valign="top"><form id="form1" name="form1" method="post" action="">
          <table width="975" border="0" cellspacing="0" cellpadding="5">
           
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2"><?php
			  if(isset($_POST["submit"]))
			  {
require_once("vals.php");

   $subjectid=$_POST["subject"];
	$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection " . mysqli_connect_error());	
	$q="select * from adminaddtutorial where subjectid='$subjectid'";
	$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==0)
	{
		$msg = "No tutorials available";
	}
	else
	{
		print "<table class='mynewtab' align='center' cellspacing='0' cellpadding='10'>
		<tr align='left' bgcolor='#666666'>
			<th><font color='#ffffff'>Tutorialname</font></th>
			<th><font color='#ffffff'>Tutorial File</font></th>
				<th><font color='#ffffff'>Download</font></th>
				
		
		</tr>";
		while($x=mysqli_fetch_array($res))
		{
			print "<tr>
			<td>$x[3]</a></td>
			<td>$x[4]</td>
			<td><a href='useruploads/$x[4]'>Download</a></td>
			
			
 			</tr>";
		}
		print "</table>";
	
	
	}}
?></td></tr>
<tr><td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr><td>&nbsp;</td>
<td>&nbsp;</td>
</tr><tr><td>&nbsp;</td>
<td>&nbsp;</td>
</tr><tr><td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td colspan="2">
<table width="100%" cellspacing="0" cellpadding="0" align="center">
<tr>
<?php
if(isset($_POST["submit"]))
{
print"<td><img src='images/bulb.jpeg' width='30'>&nbsp; &nbsp; Right click on Downloads to download tutorials.
</td>";
}
?>
</tr></table></td></tr></table></form></td></tr></table></td></tr></table></td></tr></table>
</div>
<?php
include_once("footer.php");
?>