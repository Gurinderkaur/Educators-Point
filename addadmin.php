<?php
session_start();
include_once("adminheader.php");
require_once("vals.php");
 	if(isset($_POST["submit"]))
	{
	$name=$_POST["name"];
	$username=$_POST["username"];
	
	
	$password=$_POST["password"];
	$phone=$_POST["phone"];
	$dob=$_POST["day"] . "-" . $_POST["month"] . "-" . $_POST["year"];
	$gender=$_POST["gen"];
	$country=$_POST["country"];
	
	$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection" . mysqli_connect_error());
	$q="insert into signup(name,username,password,phone,dob,gender,country,usertype) values('$name','$username','$password','$phone','$dob','$gender','$country','admin')";
	
	mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
	
	$cnt=mysqli_affected_rows($conn);
		
		mysqli_close($conn);
		
		if($cnt==1)
		{
		   header("location:adminlogin.php");
		}
		else
		{
		$msg="signup unsuccessfull,Please try again";	
		}
	
	
	
	}




?>


<div class="container" id="content">

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table width="700" border="0" align="center" cellpadding="3" cellspacing="3">
        <tr>
          <td width="252">
          <div class="register-top-grid">
			&nbsp;</td>
          <td width="713"><h2>ADD ADMIN</h2></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Name</td>
          <td><label>
            <input type="text" name="name" id="name" />
          </label></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>Email id(username)</td>
          <td><input type="text" name="username" id="username" /></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password" id="password" /></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>Confirm Password</td>
          <td><input type="password" name="password" id="password" /></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          </tr>
        
        
        <tr>
          <td>Phone</td>
          <td><input type="text" name="phone" id="phone" /></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>Day of birth</td>
          <td>
         
            <select name="day" id="day">
            <?php
		  for($x=1; $x<=31; $x++)
		  {
			print "<option value='$x'> $x </option>" ;
			}
		  ?>
            </select>
       
          
              <select name="month" id="month">
                    <?php
		  for($x=1; $x<=12; $x++)
		  {
			print "<option value='$x'> $x </option>" ;
			}
		  ?>
              </select>
          
        
              <select name="year" id="year">
                  <?php
		  for($x=1950; $x<=2016; $x++)
		  {
			print "<option value='$x'> $x </option>" ;
			}
		  ?>
              </select>
            
            </td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          </tr>
        
        <tr>
          <td>Gender</td>
          <td><label>
            <input type="radio" name="gen" id="male" value="male" />
            Male</label>
            <label>
            <input type="radio" name="gen" id="female" value="female" />
            Female</label></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>Country</td>
          <td><label>
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
            </select>
          </label></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="submit" id="submit" value="Sign up" />
            <input type="reset" name="reset" id="reset" value="Clear all" /></td>
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