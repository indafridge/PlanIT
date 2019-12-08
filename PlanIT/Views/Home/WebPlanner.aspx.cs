using System;
using System.Collections;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace PlanIT.Views.Home
{
    
    public partial class WebForm1 : System.Web.UI.Page
    {
        public static object Textbox1 { get; private set; }
        public static object Textbox2 { get; private set; }
        public static object Textbox3 { get; private set; }
        public static object Textbox4 { get; private set; }

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

        public static void Main()
        {
            ArrayList eL = new ArrayList();
        }

            private static void Button1_Click(object sender, EventArgs e, ArrayList eL)
            {
            eL.Add(Textbox1);
            eL.Add(Textbox2);
            eL.Add(Textbox3);
            eL.Add(Textbox4);
        }

    }
}