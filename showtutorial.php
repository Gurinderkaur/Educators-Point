<?php
include_once("adminheader.php");

?>
<div class="container" id="content">
<form id="form1" name="form1" method="post" action="">
      <table width="975" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td valign="top"><h2><font color="#000000">Show Tutorial</font></h2></td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td valign="top"><table width="900" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="191"><font color="#000000">Choose Semester</font></td>
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
              <td width="191"><font color="#000000">Choose Subject</font></td>
              <td width="709"><select name="subject" id="subject">
                <option>Select</option>
                <?php
			require_once("vals.php");
			$semesterid=$_POST["semester"];
			
			$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection" . mysqli_connect_error());
	
	$q="select * from adminaddsub where semesterid='$semesterid'";
	$res=mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==0)
	{
		print "<option>No Subject</option>";
	}
	else
	{
		while($x=mysqli_fetch_array($res))
		{
			print "<option value='$x[1]'>$x[2]</option>";
		}
	}
			
			?>
              </select>
                <input type="submit" name="viewsubcat" id="viewsubcat" value="GO" /></td>
            </tr>
            
            
            
           <tr>
              <td>&nbsp;</td>
              <td><?php
			  if(isset($_POST["viewsubcat"]))
			  {
				 $subjectid=$_POST["subject"];
		require_once("vals.php");
				$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection" . mysqli_connect_error());
			$q="select * from adminaddtutorial where subjectid='$subjectid'";
	$res=mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
			$cnt=mysqli_affected_rows($conn);
			mysqli_close($conn);
			if($cnt==0)
			{
				$msg="No tutorial found";
			}
			else
			{
				print "<table width='700' cellspacing='0'>
				<tr align='left' bgcolor='#666666'>
					
					<th>Tutorial Name</th>
					<th>Update</th>
					<th>Delete</th>
				</tr>";
				while($x=mysqli_fetch_array($res))
				{
					print "<tr bgcolor='#EFC7C8'>
					<td>$x[3]</td>
		<td><a href='adminupdatesubjectdetails.php?subjectid=$x[0]'>Update</a></td>
					<td><a href='admindelsubject.php?subjectid=$x[0]'>Delete</a></td>
					</tr>";
				}
				print "</table>";
			}
			  }
		?></td>
            </tr> 
            
            
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            
          </table></td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
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