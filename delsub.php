<?php
session_start();
require_once("vals.php");
	$subjectid=$_GET["subjectid"];
	$conn=mysqli_connect(host,username,password,dbname) or die("Error in connection" . mysqli_connect_error());
	$q="delete from adminaddsub where subjectid='$subjectid'";
	mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==1)
	{
		header("location:showsubject.php");
	}
	else
	{
		$msg="Problem while deleting, please try again";
	}
?>