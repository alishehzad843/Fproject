<?php

?>


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">

    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="signup.css">
    <link href="css/bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div class="container-fluid" style="background-color:ghostwhite; height:1000px;" >
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10" style="padding:10px; border:groove; background-color:ghostwhite; margin-top:50px; font-family:Cambria;">
                <h1 style="text-align:center;">User credentials</h1>
                <hr>
            
                <div class="form-group">
                    
                    <div class="row" style=" font-style:italic;">
                        
                        <div class="col-lg-4">
                           <label>Student Name</label><br>
                            <input type="text" runat="server" ID="txtname" CssClass="form-control">
							</div>
                        <div class="col-lg-4">
                             <label>Father's Name</label><br>
                            <input type="text" runat="server" ID="Txtfname" CssClass="form-control">
                        </div>
                        <div class="col-lg-4">
                           <label>Upload Photo</label><br>
                             <input type="file" ID="FileUpload1" runat="server"/>  
                        </div>

                        
                        <div class="col-lg-3">
                           <label>Date of Birth</label><br>
                            <input type="text" runat="server" ID="dob" CssClass="form-control" TextMode="Date">
                        </div>

                        <div class="col-lg-2">
                            <label>Gender</label><br>
                            <select runat="server" CssClass="form-control" ID="gender">
							<option>----Select----</option>
							<option>Male</option>
							<option>Female</option>
							</select>
                        </div>

                        <div class="col-lg-3">  
                           <label>CNIC</label><br>
                            <input type="text" runat="server" ID="bform" CssClass="form-control">
                        </div>
                        

                        <div class="col-lg-4">  
                           <label>City</label><br>
                            <input type="text" runat="server" ID="Txtcty" CssClass="form-control">
                        </div>
                        
                         <div class="col-lg-4">
                           <label>Phone No</label><br>
                             <input type="text" runat="server" ID="phonenumber" CssClass="form-control">
                        </div>
                        <div class="col-lg-4">
                           <label>Email</label><br>
                            <input type="text" runat="server" ID="email" placeholder="xyz123@Example.com" CssClass="form-control">              
                        </div>
                        
                        <div class="col-lg-4">
                           <label>Postal Address</label><br>
                            <input type="text" runat="server" ID="address" CssClass="form-control">
                        </div>
                         <div class="col-lg-4">
                         <label>Parmanent Address</label><br>
                            <input type="text" runat="server" ID="txtprm" CssClass="form-control">
                        </div>

                         <div class="col-lg-4">
                        <label>program</label><br>
                        <select  CssClass="form-control" ID="ddl">
                            <option Value="select1">----Select----</option>
                        </select>
                        </div>
                        <div class="col-lg-4">
                        <label>Matric Marks</label><br>
                            <input type="text" runat="server" ID="matric" CssClass="form-control">
                        </div>
                       
                        <div class="col-lg-4">
                        <label>Roll No</label><br>
                            <input type="text" runat="server" ID="mtrno" CssClass="form-control">
                        </div>

                        <div class="col-lg-4">
                        <label>Inter Marks</label><br>
                            <input type="text" runat="server" ID="inter" CssClass="form-control">
                        </div>
                       
                        <div class="col-lg-4">
                        <label>Roll No</label><br>
                            <input type="text" runat="server" ID="interno" CssClass="form-control">
                        </div>
                        <div class="col-lg-5"></div>
                        
                        <div class="col-lg-2">
                             <center><Button runat="server" ID="submit" CssClass="btn btn-dark"  value="Submit">Submit</button</center>
                        </div>
                         <div class="col-lg-5"></div>
                       </div>
                       </div>
                   
                       </div>
                       </div>
                    </div>
</body>
</html>