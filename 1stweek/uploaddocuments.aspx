<%@ Page Language="C#" AutoEventWireup="true" CodeFile="uploaddocuments.aspx.cs" Inherits="uploaddocuments" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
     <form id="form1" runat="server" style="background-color:ghostwhite;">
    <div class="container-fluid" style="background-color:ghostwhite; height:1000px;" >
        <div class="row">
            <div class="form-group">
            <div class="col-lg-3"> <h1 style="margin:0px 0px 0px 20px; padding-top:20px;">Upload documents</h1></div>
            <div class="col-lg-9"></div>
             <div class="col-lg-4" style="padding:20px;">
             <label><h2>B-Form:</h2></label>
             <asp:FileUpload ID="FileUpload1" CssClass="form-control" runat="server"/>  
             </div>
            <div class="col-lg-8"></div>
            <div class="col-lg-4" style="padding:20px;">
             <label><h2>Matric certificate:</h2></label>
             <asp:FileUpload ID="FileUpload2" CssClass="form-control" runat="server"/>  
             </div>
            <div class="col-lg-8"></div>
            <div class="col-lg-4" style="padding:20px;">
             <label><h2>Inter certificate:</h2></label>
             <asp:FileUpload ID="FileUpload3" CssClass="form-control" runat="server"/>  
             </div>
            <div class="col-lg-8"></div>
            <div class="col-lg-2" style="padding:20px;">
             <asp:Button runat="server" BorderStyle="Dotted" ID="submit" CssClass="btn btn-dark"  Text="Verify" />
             </div>
           
                       </div>
                    </div>
                    </div>
        </form>
</body>
</html>
