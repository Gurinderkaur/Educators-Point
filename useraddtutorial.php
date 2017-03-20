<?php
session_start();
include_once("header.php");
require_once("vals.php");
if(isset($_POST["submit"]))
{
	$semesterid=$_POST["sem"];
	
	$subjectid=$_POST["subject"];
	$nm=$_SESSION["n"];
$tutorialname=$_POST["tutorialname"];		
			
	
	$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection " . mysqli_connect_error());	
	
	$err=$_FILES["tutorialpic"]["error"];
	if($err==0)
	{
		$date = date_create();//current date
		$tstamp=date_timestamp_get($date);//2016-1970(seconds)
		$tpic=$tstamp.$_FILES["tutorialpic"]["name"];
		$tname=$_FILES["tutorialpic"]["tmp_name"];
		move_uploaded_file($tname,"useruploads/$tpic");
	}
	else
	{
		$tpic="no_image_thumb.gif";
	}
	
	
	$q="insert into adminaddtutorial(semesterid,subjectid,tutorialname,tutorialpic,approval,usertype,name) values ('$semesterid','$subjectid','$tutorialname','$tpic','no','normal','$nm')";
	
	mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	
	$cnt=mysqli_affected_rows($conn);
	
	if($cnt==1)
	{
		$msg="Tutorial added successfully";
	}
	else
	{
		$msg="Problem while adding, please try again";
	}
}
?>

<div class="container" id="content">
<h1  class="heading text-center">Add Tutorial</h1><p>&nbsp;</p>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">

         <table width="975" border="0" align="center" cellspacing="0" cellpadding="5">

            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Choose Semester</td>
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
					
					print "<option value=$x[0] selected='selected'>$x[1]</option>";	
				}
				else
				{
					print "<option value=$x[0]>$x[1]</option>";						
				}
			}
			else
			{
				print "<option value=$x[0]>$x[1]</option>";	
			}
		}
	}
				  
?>
                </select>
                &nbsp;                
                <input type="submit" name="viewsub" id="viewsub" value="GO"></td>
                <td>&nbsp;</td>
            </tr>
             <tr>
              <td>&nbsp;</td>
              </tr>
            <tr>
              <td>Choose Subject</td>
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
              </select>
              </td>
              <td>&nbsp;</td>
            </tr>
            
             <tr>
              <td>&nbsp;</td>
              </tr>
            </tr>
           
            <tr>
              <td>Tutorial Name</td>
              <td><input type="text" name="tutorialname" id="tutorialname" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              </tr>
           <tr>
              <td>Tutorial File</td>
              <td><label for="tutorialpic"></label>
                <input type="file" name="tutorialpic" id="tutorialpic" /></font></td>
            </tr>
            
             <tr>
              <td>&nbsp;</td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="submit" id="submit" value="Add Tutorial" /></td>
            </tr>
            
             <tr>
              <td>&nbsp;</td>
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
          </table>

</form>

</div>

<?php
include_once("footer.php");
?>