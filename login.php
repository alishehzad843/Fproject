<?php
include_once "login.cs.php";

?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">

    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="login.css">
    <link href="css/bootstrap.css" rel="stylesheet" />
</head>
<body>
	
    <form id="form1" method="post">
    
	<div>
    
	<div class="container-fluid card" runat="server" id="container" style=" height:650px;">
        
        <div class="row" id="mainrow">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 shadow rounded" id="col4" >
                <div class="form-group" id="form-group">
                <h1 style="text-align:center">Login</h1>
                <hr />
                
                <label>Username</label>
                <br />
                <input type="email" class="form-control" name="usrname" placeholder="Username">
                <br />
                
		       <label>Password</label>
                <br />
                <input type="password" class="form-control" name="password" placeholder="Password">
                
                <br />
                <center><input type="submit" name="login" value="Login"></center>
                <br /><br />
                <center><h6>New to us?</h6></center>
                
		
                
		<center><a href="signup.php"> Sign up</a></center>
               
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    
    </div>
    </div>
    </form>
</body>
</html>