using System;
using System.Collections.Generic;
using System.Linq;
using System.ComponentModel;
using System.Data;
using System.Text;
using System.Drawing;
using System.Web;
using System.Threading.Tasks;
using System.Web.Mvc;

namespace PlanIT.Controllers
{
    public class HomeController : Controller
    {
        public ActionResult Index()
        {
            return View();
        }

        public ActionResult About()
        {
            ViewBag.Message = "Your application description page.";

            return View();
        }
         
        public ActionResult Contact()
        {
            ViewBag.Message = "Your contact page.";

            return View();
        }
        public ActionResult WebPlanner()
        {
            ViewBag.Message = "This is our planner.";

            return View();
        }
        
        
        public ActionResult Login()
        {
            ViewBag.Message = "Your login page.";
            /* textbox first name ENTER
             void textBoxFirstname_Enter(object sender, EventArgs e)
            {
                String fname = textBoxFirstname.Text;
                if (fname.ToLower().Trim().Equals("first name"))
                {
                    textBoxFirstname.Text = "";
                    textBoxFirstname.ForeColor = Color.Black;
                }
            }
            return View();
        }
        */

        public ActionResult Register()
        {
            ViewBag.Message = "Your Register page.";

            return View();
        }



    }
}