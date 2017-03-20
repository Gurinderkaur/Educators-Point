
<?php

session_start();
include_once("header.php");

require_once("vals.php");
if(isset($_POST["Login"]))
{
	$username=$_POST["username"];
	$password=$_POST["password"];
	$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection".mysqli_connect_error());
	$q="select * from signup where username='$username' and password='$password'";
$res=mysqli_query($conn,$q) or die("Error in query".mysqli_error($conn));
$cnt=mysqli_affected_rows($conn);
mysqli_close($conn);
if($cnt==1)
          {
				$x=mysqli_fetch_array($res);
				$_SESSION["n"]=$x[0];
				$_SESSION["username"]=$x[1];
				if($x[7]=="admin")
				{
				header("location:adminheader.php");	
			    }
				else
				{
				 header("location:footer.php");
					
				}
     }
	else
		{
			$msg="Incorrect Username/Password";
		}
			
	}

	?>

&nbsp;
&nbsp;

<div class="container" id="content">
    
<form name="form1" method="post" action="">
<table width="355" border="0" align="center" cellpaddding="0" cellspacing="0">
   <tr >
          <td width="151" align="center">&nbsp;</td>
          <td width="780"><font size="+2"><I>SIGN IN<I></font></td>
        </tr>
          <tr >
       <td>&nbsp;</td>
       <td>&nbsp;</td>
    </tr>
        

    <tr>
     <td>Email(Username)</td>
      <td align="center">
      <input name="username" type="text" id="username" placeholder="Enter your Email"/></td>
    </tr>
     <tr >
       <td>&nbsp;</td>
    </tr>
  <tr>
   <td>Password</td>
      <td align="center"><label for="password"></label>
      <input type="password" name="password" id="password"  placeholder="Password"/></td>
    </tr>
  <tr >
       <td>&nbsp;</td>
    </tr>
    <tr align="center">
     <td></td>
      <td class=button grey><input type="submit" name="Login" id="Login" value="Login" /></td>
    </tr>
     <tr >
       <td>&nbsp;</td>
    </tr>
    <tr align="center">
     <td></td>
      <td class=button grey><font size="+1"><a href="signup.php">Create New Account</a></font></td>
    </tr>
  </table>    
    
    
    
</form>
</div>
<?php
include_once("footer.php");
?>