<?php
session_start();
require_once("vals.php");
	$tutorialid=$_GET["tutorialid"];
	$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection" . mysqli_connect_error());
	$q="delete from adminaddtutorial where tutorialid='$tutorialid'";
	mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==1)
	{
		header("location:aggarwal.php");
	}
	else
	{
		$msg="Problem while deleting, please try again";
	}
?>