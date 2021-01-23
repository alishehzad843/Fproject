using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class userrecords : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void GV_RowEditing(object sender, GridViewEditEventArgs e)
    {

    }
    protected void GV_RowDeleting(object sender, GridViewDeleteEventArgs e)
    {

    }
    protected void GV_RowCommand(object sender, GridViewCommandEventArgs e)
    {
     //   if (e.CommandName == "Delete")
     //   {
     //       using (var db = new odvsEntities())
     //       {
     //           int usrid = Convert.ToInt32(e.CommandArgument);
     //           db.Deleteuser(usrid);
     //       }
            
     //   }
    }
}