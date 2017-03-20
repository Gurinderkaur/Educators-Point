<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="975" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>	
	<?php
    
	include_once("adminheader.php");
	
	?></td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="">
      <table width="975" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td valign="top"><h2>Update/Delete Subject</h2></td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td valign="top"><table width="900" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="191">Choose Semester</td>
              <td width="709"><select name="semester" id="semester">
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
		print "<option>No Semester</option>";
	}
	else
	{
		while($x=mysqli_fetch_array($res))
		{
			print "<option value='$x[0]'>$x[1]</option>";
		}
	}
			
			?>
              </select>
                <input type="submit" name="viewsubcat" id="viewsubcat" value="GO" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><?php
			  if(isset($_POST["viewsubcat"]))
			  {
				 $semesterid=$_POST["semester"];
		require_once("vals.php");
				$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection" . mysqli_connect_error());
			$q="select * from adminaddsub where semesteerid='$semesterid'";
	$res=mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
			$cnt=mysqli_affected_rows($conn);
			mysqli_close($conn);
			if($cnt==0)
			{
				$msg="No subject found";
			}
			else
			{
				print "<table width='700' cellspacing='0'>
				<tr align='left' bgcolor='#990000'>
					<th>Subject Name</th>
					
					<th>Update</th>
					<th>Delete</th>
				</tr>";
				while($x=mysqli_fetch_array($res))
				{
					print "<tr bgcolor='#EFC7C8'>
					
					<td>$x[2]</td>
		<td><a href='updatesubcatdetails.php?subjectid=$x[0]'>Update</a></td>
					<td><a href='delsubcat.php?subjectid=$x[0]'>Delete</a></td>
					</tr>";
				}
				print "</table>";
			}
			  }
		?></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
        </tr>
      </table>
    </form></td>
  </tr>
  <tr>
    <td><?php
    
	include_once("adminfooter.php");
	
	?></td>
  </tr>
</table>
</body>
</html>