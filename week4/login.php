<?php
include_once "login.cs.php";

?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">

    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="css/bootstrap.css" rel="stylesheet" />
</head>
<body>
    <form id="form1" method="post">
    
	<div>
    
	<div class="container-fluid card" runat="server" id="container" style=" height:650px;">
        
        <div class="row" style="margin-top:100px;">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 shadow rounded" style=" border-radius:20px; " >
                <div class="form-group" style="background-color: ghostwhite; color:black; padding:10px; border-radius:10px;">
                <h1 style="text-align:center">Login</h1>
                <hr />
                
                <label>Username</label>
                <br />
                <input type="text" class="form-control" name="usrname" value="Username">
                <br />
                
		<label>Password</label>
                <br />
                <input type="text" class="form-control" name="password" value="Password">
                
                <br />
                <center><input type="submit" name="login" value="Signup"></center>
                <br /><br />
                <center><h6>New to us?</h6></center>
                
		<center><asp:HyperLink runat="server" NavigateUrl="~/usersetup.aspx" ID="HyperLink2" CssClass="btn btn-link" Text="Sign up"></asp:HyperLink></center>
                
		<center><asp:Label runat="server" ForeColor="Red" ID="lgnlabel"></asp:Label></center>
               
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    
    </div>
    </div>
    </form>
</body>
</html>