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
    public class TransferController : Controller
    {

        
        // POST: Transfer/Edit/5
        [HttpPost("/Transfer/Transfer")]
        public ActionResult Transfer(IFormCollection collection)
        {           
            // TODO: Add update logic here
            string idFrom = collection["idFrom"];
            string idTo = collection["idTo"];
            string idAmount = collection["idAmount"];

            int idFromInt = Int32.Parse(idFrom);
            int idToInt = Int32.Parse(idTo);
            int idAmountInt = Int32.Parse(idAmount);
                
            var json = new Service().Read("account.json", "Database");
            List<Account> accounts = JsonConvert.DeserializeObject<List<Account>>(json);
            Account from = null;
            Account to = null;

            for (int i = 0; i < accounts.Count; i++)
            {
                if (accounts[i].Number == idFromInt) from = accounts[i];
                if (accounts[i].Number == idToInt) to = accounts[i];
            }
            if (idAmountInt <= from.Balance)
            {
                from.Balance -= idAmountInt;
                to.Balance += idAmountInt;
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
        
    }
}