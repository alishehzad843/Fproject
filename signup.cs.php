<?php
include_once "conn.php";

if (isset($_POST["submit"]))
{
	// getting values from the form which user enter for the signup
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$phoneno=$_POST['phoneno'];
	
	// inserting values in the datbase table
	$insertQuery="insert into `usertbl` (`name`, `email`, `password`, `phoneno`) value ('$name', '$email', '$password', '$phoneno')";
	
	// executing query
	$res=mysqli_query($conn,$insertQuery);
	
	if($res)
	{
		echo"data inserted";
	}
	else
	{
		echo"something went wrong";
	}
}
?>

