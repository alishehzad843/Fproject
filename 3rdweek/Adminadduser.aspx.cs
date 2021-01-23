using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class Adminadduser : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        // container.Attributes.Add("style", "background-color:deepskyblue; color:white");
        container.Attributes.Add("style", "background-color:ghostwhite; color:white; padding:100px; height:657px;");
        Adduser.Attributes.Add("Style", "width:350px;");
        // loginhyp.Attributes.Add("style", "float:right;");
        // HyperLink1.Attributes.Add("style", "float:right;");
        usrname.Focus();
    }
    protected void Adduser_Click(object sender, EventArgs e)
    {

    }
}