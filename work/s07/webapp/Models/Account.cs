using Newtonsoft.Json;
using Newtonsoft.Json.Linq;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.ComponentModel.DataAnnotations;

namespace webapp.Models
{
    public class Account
    {
        
        int number;
        int balance;
        string label;
        int owner;
        

        public int Number { get => number; set => number = value; }
        [Key]
        public int Balance { get => balance; set => balance = value; }
        public string Label { get => label; set => label = value; }
        public int Owner { get => owner; set => owner = value; }

       

        public bool TextContain(string value) {
            string temp = $"{number},{balance},{label},{owner}";           
            return temp.Contains(value.ToUpper()) || temp.Contains(value.ToLower());
        }



        public override string ToString()
        {            
            return String.Format("|{0,-10}|{1,-10}|{2,-10}|{3,-10}|", number, balance, label, owner);            
        }
    }
}
