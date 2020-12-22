<%@ Page Language="C#" AutoEventWireup="true" CodeFile="signup.aspx.cs" UnobtrusiveValidationMode="none" Inherits="signup" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="css/bootstrap.css" rel="stylesheet" />
</head>
<body>
     <form id="form1" runat="server">
    <div class="container-fluid" style="background-color:ghostwhite; height:1000px;" >
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10" style="padding:10px; border:groove;background-color:ghostwhite; margin-top:50px; font-style:italic; font-family:Cambria;">
                <h1 style="text-align:center;">Sign Up</h1>
                <hr>
            
                <div class="form-group">
                    
                    <div class="row">
                        
                        <div class="col-lg-4">
                           <label>Student Name</label>
                            <asp:TextBox runat="server" ID="txtname" CssClass="form-control"></asp:TextBox>
                            <asp:RequiredFieldValidator ID="rfv1" runat="server" ControlToValidate="txtname" Text="*" ForeColor="Red"></asp:RequiredFieldValidator>
                        </div>
                        <div class="col-lg-4">
                             <label>Father's Name</label>
                            <asp:TextBox runat="server" ID="Txtfname" CssClass="form-control"></asp:TextBox>
                            <asp:RequiredFieldValidator ID="rfv2" runat="server" ControlToValidate="txtfname" Text="*" ForeColor="Red"></asp:RequiredFieldValidator>
                        </div>
                        <div class="col-lg-4">
                           <label>Upload Photo</label>
                             <asp:FileUpload ID="FileUpload1" runat="server"/>  
                        </div>

                        
                        <div class="col-lg-3">
                           <label>Date of Birth</label>
                            <asp:TextBox runat="server" ID="dob" CssClass="form-control" TextMode="Date"></asp:TextBox>
                            <asp:RequiredFieldValidator ID="rfv3" runat="server" ControlToValidate="dob" Text="*" ForeColor="Red"></asp:RequiredFieldValidator>
                        </div>

                        <div class="col-lg-2">
                            <label>Gender</label> 
                            <asp:DropDownList runat="server" CssClass="form-control" ID="gender"></asp:DropDownList>
                        </div>

                        <div class="col-lg-3">  
                           <label>CNIC</label>
                            <asp:TextBox runat="server" ID="bform" CssClass="form-control"></asp:TextBox>
                            <asp:RequiredFieldValidator ID="rfv4" runat="server" ControlToValidate="bform" Text="*" ForeColor="Red"></asp:RequiredFieldValidator>
                        </div>
                        <div class="col-lg-4">  
                        </div>

                        <div class="col-lg-4">  
                           <label>City</label>
                            <asp:TextBox runat="server" ID="Txtcty" CssClass="form-control"></asp:TextBox>
                            <asp:RequiredFieldValidator ID="rfv5" runat="server" ControlToValidate="txtcty" Text="*" ForeColor="Red"></asp:RequiredFieldValidator>
                        </div>
                        
                         <div class="col-lg-4">
                           <label>Phone No</label>
                             <asp:TextBox runat="server" ID="phonenumber" CssClass="form-control"></asp:TextBox>
                              <asp:RequiredFieldValidator ID="rfv6" runat="server" ControlToValidate="phonenumber" Text="*" ForeColor="Red"></asp:RequiredFieldValidator>
                        </div>
                        <div class="col-lg-4">
                           <label>Email</label>
                            <asp:TextBox runat="server" ID="email" placeholder="xyz123@Example.com" CssClass="form-control"></asp:TextBox>
                          <asp:RegularExpressionValidator runat="server" ID="rfv7" ControlToValidate="email" ValidationExpression="\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*" Text="*" ForeColor="Red"></asp:RegularExpressionValidator>                
                        </div>
                        
                        <div class="col-lg-6">
                           <label>Postal Address</label>
                            <asp:TextBox runat="server" ID="address" CssClass="form-control"></asp:TextBox>
                            <asp:RequiredFieldValidator ID="rfv8" runat="server" ControlToValidate="address" Text="*" ForeColor="Red"></asp:RequiredFieldValidator>
                        </div>
                         <div class="col-lg-6">
                         <label>Parmanent Address</label>
                            <asp:TextBox runat="server" ID="txtprm" CssClass="form-control"></asp:TextBox>
                            <asp:RequiredFieldValidator ID="rfv9" runat="server" ControlToValidate="txtprm" Text="*" ForeColor="Red"></asp:RequiredFieldValidator>
                        </div>

                         <div class="col-lg-4">
                        <label>program</label>
                        <asp:DropDownList runat="server" CssClass="form-control" ID="ddl">
                            <asp:ListItem Value="select1">----Select----</asp:ListItem>
                        </asp:DropDownList>
                        </div>
                        <div class="col-lg-4">
                        <label>Matric Marks</label>
                            <asp:TextBox runat="server" ID="matric" CssClass="form-control"></asp:TextBox>
                            <asp:RequiredFieldValidator ID="rfv10" runat="server" ControlToValidate="matric" Text="*" ForeColor="Red"></asp:RequiredFieldValidator>
                        </div>
                       
                        <div class="col-lg-4">
                        <label>Roll No</label>
                            <asp:TextBox runat="server" ID="mtrno" CssClass="form-control"></asp:TextBox>
                            <asp:RequiredFieldValidator ID="rfv11" runat="server" ControlToValidate="mtrno" Text="*" ForeColor="Red"></asp:RequiredFieldValidator>
                        </div>

                        <div class="col-lg-4">
                        <label>Inter Marks</label>
                            <asp:TextBox runat="server" ID="inter" CssClass="form-control"></asp:TextBox>
                            <asp:RequiredFieldValidator ID="rfv12" runat="server" ControlToValidate="inter" Text="*" ForeColor="Red"></asp:RequiredFieldValidator>
                        </div>
                       
                        <div class="col-lg-4">
                        <label>Roll No</label>
                            <asp:TextBox runat="server" ID="interno" CssClass="form-control"></asp:TextBox>
                            <asp:RequiredFieldValidator ID="rfv13" runat="server" ControlToValidate="interno" Text="*" ForeColor="Red"></asp:RequiredFieldValidator>
                        </div>
                        <div class="col-lg-5"></div>
                        
                        <div class="col-lg-2">
                             <center><asp:Button runat="server" ID="submit" CssClass="btn btn-dark"  Text="Signup" /></center>
                        </div>
                         <div class="col-lg-5"></div>
                       </div>
                       </div>
                   
                       </div>
                       </div>
                    </div>
        </form>
</body>
</html>
