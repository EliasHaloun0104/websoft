using System;
using System.Collections.Generic;
using System.Diagnostics;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Logging;
using Newtonsoft.Json;
using webapp.Models;

namespace webapp.Controllers
{
    public class HomeController : Controller
    {
        private readonly ILogger<HomeController> _logger;

        public HomeController(ILogger<HomeController> logger)
        {
            _logger = logger;
        }

        public IActionResult Index()
        {
            var json = new Service().Read("account.json", "Database");
            List<Account> accounts = JsonConvert.DeserializeObject<List<Account>>(json);
            return View(accounts);
        }

        public IActionResult Privacy()
        {
            return View();
        }

        public IActionResult About()
        {
            return View();
        }
        
        public IActionResult Navigator()
        {
            var json = new Service().Read("account.json", "Database");
            List<Account> accounts = JsonConvert.DeserializeObject<List<Account>>(json);
            return View(accounts);
        }

        public IActionResult Transfer()
        {
            var json = new Service().Read("account.json", "Database");
            List<Account> accounts = JsonConvert.DeserializeObject<List<Account>>(json);
            return View(accounts);
        }

        [ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
        public IActionResult Error()
        {
            return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
        }
    }
}
