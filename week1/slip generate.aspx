<%@ Page Language="C#" AutoEventWireup="true" CodeFile="slip generate.aspx.cs" Inherits="slip_generate" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" />
</head>
<body>
    <form id="form1" runat="server">
    <div>
    <div class="container-fluid" style="background-color:ghostwhite; height:750px;">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <label style="margin-left:75px; margin-top:120px; font-size:40px;">Documents have been Submitted Successfully</label>
                <div class="form-group">
                    <div class="row">
                        
                       <div class="col-lg-5"></div>
                        <div class="col-lg-2" style="margin-top:50px">
                             <asp:Button runat="server" ID="slip" CssClass="btn btn-dark" Text="Get Your Slip" />
                        </div>
                              <div class="col-lg-5"></div>      
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>

        </div>
    </div>
    </div>
    </form>
</body>
</html>
