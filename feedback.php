<?php
session_start();

require_once("vals.php");
if(isset($_POST["submit"]))
{
	$name=$_POST["name"];
	$email=$_POST["email"];
	$phoneno=$_POST["phone"];
	$ques1=$_POST["ques1"];
	$ques2=$_POST["ques2"];
	$ques3=$_POST["ques3"];
	date_default_timezone_set("Asia/Kolkata"); 
	$dt=date('Y-m-d H:i:s');
	
			$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection".mysqli_connect_error());
	$q="insert into feedback(name,email,phoneno,ques1,ques2,ques3,feedbackdate) values('$name','$email','$phoneno','$ques1','$ques2','$ques3','$dt')";
$res=mysqli_query($conn,$q) or die("Error in query".mysqli_error($conn));
$cnt=mysqli_affected_rows($conn);
mysqli_close($conn);
if($cnt==1)
{

	
	header("location:index.php");
	
	}
else
{
	$msg="Problem while filling feedback,please try again later";	

	}	
}
	?>
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function xyz()
{
	
	
	if(document.form1.name.value.length<4)
	{
		alert("please fill your name");
		return false;
	}
	if(document.form1.email.value.length<1||document.form1.email.value.indexOf("@")<3||document.form1.email.value.indexOf(".")<4)
	{
		alert("please fill proper email id");
		return false;
	}
	
	if(document.form1.phone.value.length<4)
	{
		alert("please fill your phone no");
		return false;
	}


}

</script>

</head>

<body>
<?php

include_once("header.php");
?>
<div class="container" id="content">	

<form id="form1" name="form1" method="post" action="" onsubmit="return xyz()">
  <table width="700" border="0" align="center" height="70">
  <tr>
  	<td colspan="2" align="center"><h1>Feedback</h1></td>
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
      <td>Name</td>
      <td><label for="name"></label>
      <input type="text" name="name" id="name" /></td>
    </tr>
     <tr>
      <td colspan="2">&nbsp;</td>     
    </tr>
    <tr>
      <td>Email Id</td>
      <td><label for="email"></label>
      <input type="text" name="email" id="email" /></td>
    </tr>
    
     <tr>
      <td colspan="2">&nbsp;</td>     
    </tr>
    <tr>
      <td>Phone Number</td>
      <td><label for="phone"></label>
      <input type="text" name="phone" id="phone" /></td>
    </tr>
    
     <tr>
      <td colspan="2">&nbsp;</td>     
    </tr>
    <tr>
      <td>How you will rate our website?</td>
         <td>
            <label>
              <input type="radio" name="ques1" value="excellent" id="ques1_0" />
              Excellent</label>
            
            <label>
              <input type="radio" name="ques1" value="very good" id="ques1_1" />
             Very good</label>
            
            <label>
              <input type="radio" name="ques1" value="good" id="ques1_2" />
             Good</label>
            
            <label>
              <input type="radio" name="ques1" value="average" id="ques1_3" />
             Average</label>
           
            <label>
              <input type="radio" name="ques1" value="poor" id="ques1_4" />
             Poor</label>
            
          </td>
        </tr>
 
     <tr>
      <td colspan="2">&nbsp;</td>     
    </tr>   
    <tr>
      <td>Are you satisfy with our content?</td>
      
      
          <td><label>
            <input type="radio" name="ques2" value="yes" id="ques2_0" />
          yes</label>
                 
            <label>
            <input type="radio" name="ques2" value="no" id="ques2_1" />
            no</label></td>
       
      </td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>     
    </tr>
    <tr>
      <td>Do you need more tutorials?</td>
      <td><label>
            <input type="radio" name="ques3" value="yes" id="ques2_0" />
          Yes</label>
        
          <label>
            <input type="radio" name="ques3" value="no" id="ques2_1" />
           No<br />
          </label></td>
      
    </tr>
     <td>&nbsp;</td>   
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td class="button gray"><input type="submit" name="submit" id="submit" value="Submit Feedback" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  </form>



</div>
<?php
include_once("footer.php");
?>
</body>
</html>