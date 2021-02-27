<?php
include_once "conn.php";


if (isset($_POST["Add"]))
{
	// getting values from the form which user enter
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


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">

    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="Adminadduser.css">
    <link href="css/bootstrap.css" rel="stylesheet" />
</head>
<body>

<?php

include_once "header.php";

?>


    <form id="form1" method="POST">

    <div class="container-fluid" id="container" style="background-color:ghostwhite; height:590px;">
	
	<div class="row" id="mainrow">
	
	<div class="col-md-3"></div>
	
	<div class="col-md-6">
	
	<form action="" method="post" enctype="multipart/form-data">
	
	<h1><center>Add user</center></h1>
	
	<label>Name</label>
	
	<input type="text" class="form-control" name="name" placeholder="Enter name"><br>
	
	<label>Email</label>
	
	<input type="text" class="form-control" name="email" placeholder="Enter your Email"><br>
	
	<label>Password</label>
	
	<input type="text"class="form-control" name="password" placeholder="Enter your password"><br>
	
	<label>Phone no</label>
	
	<input type="text"class="form-control" name="phoneno" placeholder="Enter your phoneno"><br>
	
	<br>
	
	<center><input id="btnadd" type="submit" name="Add" value="Add"></center>

    </form>
</body>
</html>