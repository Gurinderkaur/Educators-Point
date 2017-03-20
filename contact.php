<?php
session_start();
include_once("header.php");
require_once("vals.php");

if(isset($_POST["submit"]))
{
	$name=$_POST["name"];
	$email=$_POST["email"];
	$message=$_POST["message"];
	date_default_timezone_set("Asia/Kolkata"); 
	$dt=date('Y-m-d H:i:s');
	
	

$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection".mysqli_connect_error());
$q="insert into contactus2 (name,email,message,cdate) values('$name','$email','$message','$dt' )";
$res=mysqli_query($conn,$q) or die("Error in query".mysqli_error($conn));
$cnt=mysqli_affected_rows($conn);
mysqli_close($conn);
if($cnt==1)
{
   print "Message Sent Successfully";
}
	
else
{
	$msg="Problem while filling form,please try again later";
	print $msg;
	}	
	
	}
?>

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
	if(document.form1.message.value.length<4)
	{
		alert("please fill your message");
		return false;
	}
	
}


</script>




 <div class="contact-section">
	    <div class="container">
		  <h1 class="heading text-center">Contact Us</h1>
<div class="contact-main">
					<div class="col-md-6 contact-grid">
						<form method="post" name="form1" action=""  enctype="multipart/form-data" onsubmit="return xyz()">
							<p class="your-para">Your Name:</p>
							<input type="text" name="name" onfocus="this.value='';" >
							<p class="your-para">Your Mail:</p>
							<input type="text" name="email" onfocus="this.value='';" >
							<p class="your-para">Your Message:</p>
							<textarea cols="77" rows="6" name="message"></textarea>
							<div class="send">
								<input type="submit"  name="submit" value="Send" >
							</div>
						</form>
					</div>
					<div class="col-md-6 contact-in">
<iframe style="margin-top:20px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5737.4001608925155!2d75.5512350275403!3d31.235173244680954!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5cebac000001%3A0x54b9fee3d950da40!2sCT+Institute+of+Engineering!5e0!3m2!1sen!2sin!4v1468861501509" width="500" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
						<p class="sed-para"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor.</p>

						<div class="more-address"> 
								<address>
								  <strong>CT Institute</strong><br>
								  795 Folsom Ave, Suite 600<br>
								  San Francisco, CA 94107<br>
								  <abbr title="Phone">P:</abbr> 0181-5055127
								</address>
						  </div>
					</div>
						<div class="clearfix"> </div>
			    

	</div>
   </div>
   </div> 
    
    <?php
	include_once("footer.php");
	?>