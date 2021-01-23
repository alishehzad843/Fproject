<%@ Page Title="" Language="C#" MasterPageFile="~/Admin.master" AutoEventWireup="true" CodeFile="userrecords.aspx.cs" Inherits="userrecords" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <div class="container-fluid" style="background-color: aliceblue; height:577px; padding-top:50px">
    <div class="shadow rounded" runat="server" style="border:2px solid black; width:928px; margin-left:200px;">
        <div class="row">
                    <div class="col-lg-5"></div>
                    <div class="col-lg-2">
                    <asp:HyperLink ForeColor="Blue" NavigateUrl="~/Adminadduser.aspx" runat="server" Text="Add User"></asp:HyperLink>
                    </div>
                    <div class="col-lg-5"></div>
                    </div>
       
    <asp:GridView runat="server" ID="GV" AutoGenerateColumns="false" OnRowEditing="GV_RowEditing" OnRowDeleting="GV_RowDeleting" OnRowCommand="GV_RowCommand">
            <Columns>
                <asp:BoundField DataField="userid" HeaderText="UserID" />
                <asp:BoundField DataField="username" HeaderText="Username" />
                <asp:BoundField DataField="email" HeaderText="Email" />
                <asp:BoundField DataField="password" HeaderText="Password" />

               
                <asp:TemplateField HeaderText="Action">
                    <ItemTemplate>
                      
                        <asp:LinkButton runat="server" ForeColor="Blue" ID="lnkdelete" Text="Delete" CommandName="Delete" CommandArgument='<%# Eval("userid") %>'></asp:LinkButton>
                    </ItemTemplate>
                </asp:TemplateField>

            </Columns>
        </asp:GridView>
                    
        </div>
    </div>
</asp:Content>

