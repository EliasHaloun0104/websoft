using Newtonsoft.Json;
using System;
using System.Collections.Generic;
using System.IO;

namespace console
{
    public class AccountsManager
    {
        private List<Account> accounts;

        public List<Account> Accounts { get => accounts; set => accounts = value; }

        public AccountsManager(string path)
        {
            Read(path);   
        }

        public void Read(string path)
        {
            StreamReader r = null;
            string json = null;
            try
            {
                r = new StreamReader(path);
                json = r.ReadToEnd();
                accounts = JsonConvert.DeserializeObject<List<Account>>(json);
                r.Close();
            }
            catch (JsonException)
            {
                
            }            
        }

        public void Write(string Path)
        {
            using (StreamWriter file = File.CreateText(Path))
            {
                JsonSerializer serializer = new JsonSerializer();
                //serialize object directly into file stream
                serializer.Serialize(file, accounts);
                file.Close();
            }
        }

    }
}
