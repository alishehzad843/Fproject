<?php
include_once "signup.cs.php";

?>


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">

    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="css/bootstrap.css" rel="stylesheet" />
</head>
<body>
    <form id="form1" method="POST">

    <div class="container-fluid">
	
	<div class="row" style="margin-top:100px;">
	
	<div class="col-md-3"></div>
	
	<div class="col-md-6">
	
	<form action="" method="post" enctype="multipart/form-data">
	
	<h1><center>Sign up</center></h1>
	
	<label>Name</label>
	<input type="text" class="form-control" name="name" value="Enter name"><br>
	
	<label>Email</label>
	<input type="text" class="form-control" name="email" value="Enter your Email"><br>
	
	<label>Password</label>
	<input type="text"class="form-control" name="password" value="Enter your password"><br>
	
	<label>Phone no</label>
	<input type="text"class="form-control" name="phoneno" value="Enter your phoneno"><br>
	
	<br>
	<center><input type="submit" name="submit" value="Signup"></center>

    </form>
</body>
</html>