using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace PlanIT.Views.Home
{
    public partial class WebForm1 : System.Web.UI.Page
    {
        public class Button : WebControl, IButtonControl
        {
            public bool CausesValidation { get => throw new NotImplementedException(); set => throw new NotImplementedException(); }
            public string CommandArgument { get => throw new NotImplementedException(); set => throw new NotImplementedException(); }
            public string CommandName { get => throw new NotImplementedException(); set => throw new NotImplementedException(); }
            public string PostBackUrl { get => throw new NotImplementedException(); set => throw new NotImplementedException(); }
            public string Text { get => throw new NotImplementedException(); set => throw new NotImplementedException(); }
            public string ValidationGroup { get => throw new NotImplementedException(); set => throw new NotImplementedException(); }

            public event EventHandler Click;
            public event CommandEventHandler Command;


        }

        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void Calendar1_SelectionChanged(object sender, EventArgs e)
        {

        }

        protected void Button1_Click(object sender, EventArgs e)
        {
            Label1.Text = TextBox1.Text + " added";
        }
    }
}