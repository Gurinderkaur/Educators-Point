
<?php
session_start();
require_once("vals.php");
$tid=$_GET["tutorialid"];

$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection" . mysqli_connect_error());
	
	
	$q="update adminaddtutorial set approval='yes' where tutorialid='$tid'";

	mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==1)
	{
		header("location:approval.php");
		
	}
	else
	{
		$msg="Problem while approving, please try again";
	}


?>
