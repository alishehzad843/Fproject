<?php


?>


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">

    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
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

<div class="container-fluid" style="background-color:ghostwhite; height:580px;">
<div class="row">
<div class="col-md-2"></div>

<div class="col-md-8" style="margin-top:150px;">

<center><h1>Welcome to Home</h1></center>

</div>

<div class="col-md-2"></div>
</div>



</div>
</body>
</html>