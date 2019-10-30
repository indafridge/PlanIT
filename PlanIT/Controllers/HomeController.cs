using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
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
            ViewBag.Message = "Your application description page :|| good one retard.";

            return View();
        }
         
        public ActionResult Contact()
        {
            ViewBag.Message = "Your contact pagesssssss.";

            return View();
        }
    }
}