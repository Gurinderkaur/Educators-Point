<?php
include_once("adminheader.php")

?>
<div class="container" id="content">


<h2 align="center">Show Subject</h2><p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="">
      <table width="975" border="0" cellspacing="0" cellpadding="0" align="center">

        <tr>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td valign="top"><table width="900" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="center"><font color="#000000">Choose Semester</font></td>
              <td ><select name="semester" id="semester">
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
			$q="select * from adminaddsub where semesterid='$semesterid'";
	$res=mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
			$cnt=mysqli_affected_rows($conn);
			mysqli_close($conn);
			if($cnt==0)
			{
				$msg="No subject found";
			}
			else
			{
				print "<table class='mynewtab' width='700' cellspacing='0'>
				<tr align='center' bgcolor='#666666'>
					
					<th>Subject Name</th>
					</tr>";
				while($x=mysqli_fetch_array($res))
				{
					print "<tr>
					<td>$x[2]</td>
					</tr>";
				}
			}
				print "</table>";	
				}
?></td>
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
          
         
      </table>
    </form>
    </div>
	<?php
    
	include_once("adminfooter.php");
	
	?>