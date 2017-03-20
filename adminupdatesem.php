<?php
include_once("adminheader.php");
require_once("vals.php");

$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection" . mysqli_connect_error());
	$semid=$_GET["semesterid"];
	$q="select * from adminaddsem where semesterid='$semid'";
	$res=mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
	$x=mysqli_fetch_array($res);
	mysqli_close($conn);


if(isset($_POST["submit"]))
{
	$sname=$_POST["semestername"];
	
	
	$q="update adminaddsem set semestername='$sname' where semesterid='$semid'";
	$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection" . mysqli_connect_error());
	mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==1)
	{
		header("location:adminupdatesemmain.php");
		
	}
	else
	{
		$msg="Problem while updating Semester, please try again";
	}
}

if(isset($_POST["s2"]))
{
	header("location:adminupdatesemmain.php");
}

?>
<div class="container" id="content">
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table width="600" border="0" cellspacing="0" cellpadding="2" align="center">
        <tr>
          <td width>&nbsp;</td>
          <td width><h2>Update Semester Details</h2></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Semester Name</td>
          <td><label for="semestername"></label>
            <input type="text" name="semestername" id="semestername" value="<?php print $x[1];	?>" /></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="submit" id="submit" value="Update Semester" />
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
    <?php
	include_once("footer.php");
	?>