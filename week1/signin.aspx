<%@ Page Language="C#" AutoEventWireup="true" UnobtrusiveValidationMode="none" CodeFile="Default.aspx.cs" Inherits="_Default" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" />
</head>
<body>
    <form id="form1" runat="server">
    <div class="container-fluid" style="background-color:ghostwhite; height:750px;">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4" style="padding:10px; background-color:ghostwhite; border:groove; margin-top:180px;">
                <h1 style="text-align:center;">Log In</h1>
                <hr />
                <div class="form-group">
                    <div class="row">

                        <div class="col-lg-12">
                            <label><h5>Email</h5></label>
                            <asp:TextBox runat="server" ID="email" placeholder="xyz123@Example.com" CssClass="form-control"></asp:TextBox>
                          <asp:RegularExpressionValidator runat="server" ID="rev" ControlToValidate="email" ValidationExpression="\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*" Text="*" ForeColor="Red"></asp:RegularExpressionValidator>
                        </div>
                        <div class="col-lg-12">
                             <label><h5>Password</h5></label>
                            <asp:TextBox runat="server" ID="passwd" TextMode="Password" CssClass="form-control"></asp:TextBox><br />
                            <asp:Label runat="server" ID="lbl" ForeColor="Red" ></asp:Label>
                        </div>
                        <div class="col-lg-5"></div>
                        <div class="col-lg-2">
                             <asp:Button runat="server" ID="loginbtn" CssClass="btn btn-dark" Text="Login" />
                        </div>
                        <div class="col-lg-5"></div>
                    </div>
                </div>
                    </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
    
    </form>
</body>
</html>
