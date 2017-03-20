<?php
session_start();
require_once("vals.php");
	$semid=$_GET["semesterid"];
	
	$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection" . mysqli_connect_error());
	
	$q="delete from adminaddsem where semesterid='$semid'";
	mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==1)
	{
		header("location:adminupsemester.php");
	}
	else
	{
		$msg="Problem while deleting, please try again";
	}
?>