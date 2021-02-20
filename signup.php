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

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="logo.png"><image style="height:50px; width:50px;"  src="logo.png"/></a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="uploaddocuments.php">Verify Documents</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="usercredential.php">Applicant</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="signup.php">Sign in</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="login.php">Log in</a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="contactus.php">Contact us</a>
      </li>
	  
      
      <li class="nav-item">
        <a class="nav-link" href="Admin.php">Admin</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


    <form id="form1" method="POST">

    <div class="container-fluid" style="background-color:ghostwhite; height:590px;"> 
	
	<div class="row" id="mainrow">
	
	<div class="col-md-3"></div>
	
	<div class="col-md-6">
	
	<form action="" method="post" >
	
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