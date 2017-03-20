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
	$semesterid=$_POST["semester"];
	$subjectname=$_POST["subjectname"];
	
		
	$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection" . mysqli_connect_error());
	
	$q="update adminaddsub set semesterid='$semesterid',subjectname='$subjectname' where subjectid='$subjectid'";
	mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==1)
	{
		header("location:updation.php");
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
</head>
<?php
    
	include_once("adminheader.php");
	
	?>

<body>
<table width="975" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>	
	</td>
  </tr>
  <tr>
    <td>
    <div class="container" id="content">
    <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table width="400" border="0"  align="center"cellspacing="0" cellpadding="2">
        <tr>
          <td align="center"><h2>Update  Subject Details</h2></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Choose Semester</td>
          <td><select name="semester" id="semester">
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
		print "<option>No Semesters</option>";
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
          <td>Subject Name</td>
          <td><label for="subjectname"></label>
<input type="text" name="subjectname" id="subjectname" 
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
      </table>
    </form>
    </div>
    </td>
  </tr>
  <tr>
    <td></td>
  </tr>
</table>
</body>
<?php
    
	include_once("adminfooter.php");
	
	?>

</html>