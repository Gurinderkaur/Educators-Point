<?php
session_start();
include_once("adminheader.php");
require_once("vals.php");
if(isset($_POST["submit"]))
{

	$semesterid=$_POST["sem"];
	$subjectname=$_POST["subjectname"];	
	$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection " . mysqli_connect_error());	
	
	
	
	$q="insert into adminaddsub(semesterid,subjectname) values ( '$semesterid','$subjectname')";
	
	mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	
	$cnt=mysqli_affected_rows($conn);
	
	if($cnt==1)
	{
		$msg="Subject added successfully";
	}
	else
	{
		$msg="Problem while adding, please try again";
	}
}
?>

    <div class="container" id="content">
<h2 align="center">Add Subject</h2><p>&nbsp;</p>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
          <table width="600" border="0" align="center" cellpadding="5" cellspacing="3">

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
				$semid=$_POST["sem"];
				if($x[0]==$semid)
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
               
                <td>&nbsp;</td>
            </tr>
             
   
           
           
             
              
            <tr>
            <td>&nbsp;</td>
            </tr>
            <tr>
              <td align="center">Subject Name</td>
              <td><input type="text" name="subjectname" id="subjectname" /></td>
            </tr><br/>
            <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="submit" id="submit" value="Add Subject" /></td>
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
include_once("adminfooter.php");
?>