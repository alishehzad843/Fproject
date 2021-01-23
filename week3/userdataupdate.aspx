﻿<%@ Page Title="" Language="C#" MasterPageFile="~/Admin.master" AutoEventWireup="true" CodeFile="userdataupdate.aspx.cs" Inherits="userdataupdate" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <div class="container-fluid card" runat="server" id="container" style="background-image:url(1.jfif);">
        
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 shadow rounded" style="margin:0px; border-radius:20px; ">
                <div class="form-group" style="background-color: ghostwhite; color:black; padding:10px; border-radius:10px;">
                <h3 style="text-align:center">Update User Record</h3>
                <hr />
                
                <label>Name</label>
                <br />
                <asp:TextBox runat="server" ID="usrname" CssClass="form-control"></asp:TextBox>
                <br />
                <label>Email</label>
                <br />
                <asp:TextBox runat="server" ID="email" CssClass="form-control"></asp:TextBox>
                <br />
                <label>Password</label>
                <br />
                <asp:TextBox runat="server" ID="usrpassword" TextMode="Password" CssClass="form-control"></asp:TextBox>
                
                <br />
                <label>Confirm Password</label>
                <br />
                <asp:TextBox runat="server" ID="confirmpassword" TextMode="Password" CssClass="form-control"></asp:TextBox>
                
                <br />
                <asp:Button runat="server" ID="updateuser" CssClass="btn btn-dark" OnClick="updateuser_Click" Text="Update User" />
                <br /><br />
               
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    
    </div>
</asp:Content>
