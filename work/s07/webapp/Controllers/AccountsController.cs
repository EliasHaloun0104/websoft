using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Newtonsoft.Json;
using webapp.Models;

namespace webapp.Controllers
{
    public class AccountsController : Controller
    {
        [HttpGet ("/api/Accounts")]
        public ActionResult Index()
        {
            var json = new Service().Read("account.json", "Database");
            List<Account> accounts = JsonConvert.DeserializeObject<List<Account>>(json);
            return Json(accounts);
            
        }

        [HttpGet("/api/Accounts/{id?}")]
        public ActionResult Details(int id)
        {
            var json = new Service().Read("account.json", "Database");
            List<Account> accounts = JsonConvert.DeserializeObject<List<Account>>(json);
            for (int i = 0; i < accounts.Count; i++)
            {
                if (accounts[i].Number == id) return Json(accounts[i]);
            }
            var value = "{Attention: The entered account not match any account in database}";

            return Json(value);
        }
        
        [HttpPost("/api/Accounts/{id?}")]
        public ActionResult Details2(int id)
        {
            var json = new Service().Read("account.json", "Database");
            List<Account> accounts = JsonConvert.DeserializeObject<List<Account>>(json);
            for (int i = 0; i < accounts.Count; i++)
            {
                if (accounts[i].Number == id)
                {
                    try
                    {
                        return Json(accounts[i+1]);
                    }
                    catch (Exception)
                    {
                        return Json(accounts[0]);
                    }
                    
                }
            }
            return Json("{ Attention: The entered account not match any account in database}");
        }
        

        [HttpPost("/api/Accounts/{idFrom?}/{idTo?}/{idAmount?}")]
        public ActionResult Transfer(int idFrom, int idTo, int idAmount)
        {
            var json = new Service().Read("account.json", "Database");
            List<Account> accounts = JsonConvert.DeserializeObject<List<Account>>(json);
            Account from = null;
            Account to = null;
            
            for (int i = 0; i < accounts.Count; i++)
            {
                if (accounts[i].Number == idFrom) from = accounts[i];
                if (accounts[i].Number == idTo) to = accounts[i];
            }
            if(idAmount<= from.Balance)
            {
                from.Balance -= idAmount;
                to.Balance += idAmount;
                var toWrite = JsonConvert.SerializeObject(accounts, Formatting.Indented);
                var service = new Service();
                service.Write("account.json", "Database", toWrite);
                return Json("{Attention:Amount Transfer successfully}");
            }
            else
            {
               return Json("{Attention: The entered account not match any account in database or the transfer amount exceed the balance}");
            }  
        }

        // GET: Accounts/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: Accounts/Create
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create(IFormCollection collection)
        {
            try
            {
                // TODO: Add insert logic here

                return RedirectToAction(nameof(Index));
            }
            catch
            {
                return View();
            }
        }

        // GET: Accounts/Edit/5
        public ActionResult Edit(int id)
        {
            return View();
        }

        // POST: Accounts/Edit/5
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit(int id, IFormCollection collection)
        {
            try
            {
                // TODO: Add update logic here

                return RedirectToAction(nameof(Index));
            }
            catch
            {
                return View();
            }
        }

        // GET: Accounts/Delete/5
        public ActionResult Delete(int id)
        {
            return View();
        }

        // POST: Accounts/Delete/5
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Delete(int id, IFormCollection collection)
        {
            try
            {
                // TODO: Add delete logic here

                return RedirectToAction(nameof(Index));
            }
            catch
            {
                return View();
            }
        }
    }
}