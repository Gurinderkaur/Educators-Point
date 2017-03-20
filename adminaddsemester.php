<?php
session_start();
include_once("adminheader.php");
require_once("vals.php")
;
if(isset($_POST["submit"]))
{
	$semestername=$_POST["semestername"];	
	$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection " . mysqli_connect_error());	
	
	
	
	
	$q="insert into adminaddsem(semestername) values ('$semestername')";
	
	mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	
	$cnt=mysqli_affected_rows($conn);
	
	if($cnt==1)
	{
		$msg="Semester added successfully";
	}
	else
	{
		$msg="Problem while adding, please try again";
	}
}
?>
    <div class="container" id="content">
<h2 align="center">Add Semester</h2><p>&nbsp;</p>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">

          <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" >

            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td align="center">Semester Name</td>
              <td><input type="text" name="semestername" id="semestername" /></td>
            </tr>
            <tr>
           <td>&nbsp;</td>
          
              <td>&nbsp;</td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="submit" id="submit" value="Add Semester"></td>
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
        </form></div>
        <?php
		include_once("adminfooter.php");
		?>