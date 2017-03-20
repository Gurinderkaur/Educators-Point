<?php
ob_start();


include_once("headersignup.php");


?>


<div class="container" id="content">
<?php
session_start();
require_once("vals.php");
if(isset($_POST["signup"]))
{
	$name=$_POST["name"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	$cpassword=$_POST["password2"];
$dob=$_POST["date"].$_POST["month"].$_POST["year"];
	$gender=$_POST["radio"];
	$country=$_POST["country"];
	$phone=$_POST["phone"];

$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection".mysqli_connect_error());
$q="insert into signup(name,username,password,dob,gender,country,phone,usertype) values('$name','$username','$password' , '$dob'  , '$gender' , '$country','$phone','normal')";
$res=mysqli_query($conn,$q) or die("Error in query".mysqli_error($conn));
$cnt=mysqli_affected_rows($conn);
mysqli_close($conn);
if($cnt==1)
{
    header("location:index.php");
}
	
else
{
	$msg="signup unsuccessful,please try again later";
	print $msg;
	}	
	
	}
?>

<html>
<head>
   <link rel="stylesheet" href="css/pikaday.css">
    <link rel="stylesheet" href="css/site.css">
<title></title>

<script type="text/javascript">
function xyz()
{
	
	
	if(document.form1.name.value.length<4)
	{
		alert("please fill your name");
		return false;
	}
	if(document.form1.username.value.length<1||document.form1.username.value.indexOf("@")<3||document.form1.username.value.indexOf(".")<4)
	{
		alert("please fill proper email id");
		return false;
	}
	var p1,p2;
	p1=document.form1.password.value
	p2=document.form1.password2.value
	if(p1!=p2)
	{
		alert("Passwords doesn't match");
	    return false
	}
	if(document.form1.radio[0].checked==false&&document.form1.radio[1].checked==false)
	{
		alert("Choose gender");
		return false;
	
	}
	if (document.form1.country.selectedIndex == 0) 
	{
 		alert('please choose country');
		return false;
	}
	if(document.form1.phone.value.length<4)
	{
		alert("please fill your phone no ");
		return false;
	}
	

	
	}
    

  <!--
       function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
       //-->


</script>
</head>

<body>

<form name="form1" method="post" action="" onSubmit="return xyz()">
<table width="970" border="0" align="center" cellpadding="3" cellspacing="5">
        <tr >
          <td align="center">&nbsp;</td>
          <td><font size="+2">SIGN UP</font></td>
        </tr>
        <tr>
          <td >&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="center">Name</td>
         <td>
          <input type="text" name="name" id="name"></td>
        </tr>
         <tr>
        <td align="center">Username</td>
          <td><label for="username"></label>
      <input type="text" name="username" id="username" /></td>
        </tr>
        
         
       <tr>
         <td align="center">Password</td>
      <td><input type="password" name="password" id="password" /></td>
        </tr>
        
         <tr>
          <td>&nbsp;</td>
          </tr>
        <tr>
        <td align="center">Confirm Password</td>
      <td><input type="password" name="password2" id="password2" /></td>
        </tr>
        
         <tr>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td align="center">Birthday</td>
      <td><label for="date"></label>
     
         <label for="datepicker"></label>
         <input type="text" name="datepicker" id="datepicker" />
         <script src="moment.min.js"></script>
 <script src="pikaday.js"></script>

    <script>

    var picker = new Pikaday(
    {
        field: document.getElementById('datepicker'),
		format: 'YYYY-MM-DD',
        firstDay: 1,
        minDate: new Date(),
        maxDate: new Date(2020, 12, 31),
        yearRange: [2000,2020],
		
    });

    </script>

      </td>
        </tr>
        
         <tr>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td align="center">Gender</td>
      <td><input type="radio" name="radio" id="Male" value="Male" />
      <label for="Male">Male</label>&nbsp;
      
      <label>
        <input type="radio" name="radio" id="Female" value="Female" />Female
      </label></td></font>
        </tr>
        
         <tr>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td align="center">Country</td>
      <td><label for="country"></label>
        <select name="country" id="country">
          <option>Afghanistan</option>
          <option>Albania</option>
          <option>Algeria</option>
          <option>Aruba</option>
          <option>Australia</option>
          <option>Austria</option>
          <option>Belarus</option>
          <option>belgium</option>
          <option>Bhutan</option>
          <option>Bolivia</option>
          <option>Brazil</option>
          <option>Burundi</option>
          <option>Colombia</option>
          <option>Cameroon</option>
          <option>Canada</option>
          <option>Cuba</option>
          <option>Cyprus</option>
          <option>Denmark</option>
          <option>Dominica</option>
          <option>Egypt</option>
          <option>Estonia</option>
          <option>Ethiopia</option>
          <option>Fiji</option>
          <option>Finland</option>
          <option>France</option>
          <option>Georgia</option>
          <option>Ghana</option>
          <option>Germany</option>
          <option>Hondurus</option>
          <option>Hong Kong</option>
          <option>Hungary</option>
          <option>Iceland</option>
          <option selected="selected">India</option>
          <option>Indonesia</option>
          <option>Iran</option>
          <option>Iraq</option>
          <option>Ireland</option>
          <option>Israel</option>
          <option>Italy</option>
          <option>Jamaica</option>
          <option>Japan</option>
          <option>Jordan</option>
          <option>Kenya</option>
          <option>Kiribati</option>
          <option>Kuwait</option>
          <option>Laos</option>
          <option>Latvia</option>
          <option>Lesotho</option>
          <option>Liberia</option>
          <option>Libya</option>
          <option>Macau</option>
          <option>Malawi</option>
          <option>Malaysia</option>
          <option>Maldives</option>
          <option>Malli</option>
          <option>Marshal island</option>
          <option>Mauritius</option>
          <option>Mexico</option>
          <option>Monacoo</option>
          <option>Moraco</option>
          <option>Nepal</option>
          <option>Netherland</option>
          <option>New Zealand</option>
          <option>Nigeria</option>
          <option>North Korea</option>
          <option>Norway</option>
          <option>Oman</option>
          <option>Pakistan</option>
          <option>Palau</option>
          <option>Palestine</option>
          <option>Peru</option>
          <option>Philippines</option>
          <option>Poland</option>
          <option>Portugal</option>
          <option>Qatar</option>
          <option>Romania</option>
          <option>Russia</option>
          <option>Rwanda</option>
          <option>Samao</option>
          <option>San Marino</option>
          <option>Saudi Arebia</option>
          <option>Serbia</option>
          <option>Sudan</option>
          <option>Suriname</option>
          <option>Swedan</option>
          <option>Singapore</option>
          <option>Solovia</option>
          <option>St. Lucia</option>
          <option>St. Peri</option>
          <option>Syria</option>
          <option>Tajikistan</option>
          <option>Thailang</option>
          <option>Timor</option>
          <option>Tonga</option>
          <option>Turkey</option>
          <option>Tunisia</option>
          <option>US Virgin land</option>
          <option>Uganda</option>
          <option>United Kingdom</option>
          <option>United States</option>
          <option>Uruguay</option>
          <option>Ukraine</option>
          <option>Vatican city</option>
          <option>Vietnam</option>
          <option>Wallis nad futana</option>
          <option>Yemen</option>
          <option>Zambia</option>
          <option>Zimbabwe</option>
        </select></td>
        </tr>
         <tr>
          <td>&nbsp;</td>
       </tr>
        <tr>
          <td align="center">Phone</td>
          <td><label for="phone"></label>
          <input type="text" name="phone" id="phone" onKeyPress="return isNumberKey(event)"></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          </tr>
          <tr >
          
           <td ><input type="submit" name="signup" id="signup" value="signup" /></td>
            <input type="reset" name="Clear All" id="Clear All" value="Clear All" /></td>
        </tr>
      </table>

</form>
&nbsp;
&nbsp;
</div>
<?php
include_once("footer1.php");

?>
</body>
</html>