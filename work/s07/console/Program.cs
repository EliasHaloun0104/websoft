using System;
using System.Collections.Generic;
using System.Threading;

namespace console
{
    public class Program
    {

        public const string Path = "data/account.json";
        public static AccountsManager accounts;
        

        public static void Main(string[] args)
        {
            accounts = new AccountsManager(Path);
            int userInput = 0;
            do
            {
                userInput = MainMenu();
                switch (userInput)
                {
                    case 1:
                        ViewAccounts();
                        break;
                    case 2:
                        SearchByAccNum();
                        break;
                    case 3:
                        SearchByText();
                        break;
                    case 4:
                        Move();
                        break;
                    case 5:
                        AddNewAccount();
                        break;
                }
            } while (userInput != 6);
            Environment.Exit(1);
        }

        static public int MainMenu()
        {
            while (true)
            {
                
                HelpModule.WriteLine("-----------------------------");
                HelpModule.WriteLine("|         City Bank         |");
                HelpModule.WriteLine("-----------------------------");
                HelpModule.WriteLine("");
                HelpModule.WriteLine("1. View accounts");
                HelpModule.WriteLine("2. Search By Account Number");
                HelpModule.WriteLine("3. Search By text");
                HelpModule.WriteLine("4. Move");
                HelpModule.WriteLine("5. Add New Account");
                HelpModule.WriteLine("6. Exit");
                HelpModule.WriteLine("-----------------------------");


                var resultInt = HelpModule.LoopUntilValidInt("Please enter a valid number!");

                if (resultInt >= 1 && resultInt <= 6) return resultInt;
                else
                {
                    HelpModule.WriteLine("Please enter a valid number!");
                }

                /*
                while (true)
                {
                    var result = Console.ReadLine();
                    int resultInt = HelpModule.ValidateInt(result);
                    if (resultInt >= 1 && resultInt <= 6) return resultInt;
                    else
                    {
                        HelpModule.WriteLine("Please enter a valid number!");
                    }
                }*/
                
            }
        }

        public static void ViewAccounts()
        {
            HelpModule.TableHeader();
            foreach (Account a in accounts.Accounts)
            {
                HelpModule.WriteLine(a.ToString());
            }
            HelpModule.Line();            
        }

        public static Account SearchByAccNum()
        {
            Account acc = null;
            var foundNumber = false;
            while (!foundNumber)
            {
                HelpModule.WriteLine("Please Enter a valid Account number!");
                var accountNum = Console.ReadLine();
                int accNum = HelpModule.ValidateInt(accountNum);
                if (accNum > 0)
                {
                    foreach (Account a in accounts.Accounts)
                    {
                        if (accNum == a.Number)
                        {
                            acc = a;
                            foundNumber = true;
                            HelpModule.TableHeader();
                            HelpModule.WriteLine(a.ToString());
                            HelpModule.Line();
                            break;

                        }

                    }
                }
            }
            return acc;
        }

        public static void SearchByText()
        {
            HelpModule.WriteLine("Please Enter a text");
            var searchFor = Console.ReadLine();

            var stringList = new List<string>();
            foreach (Account a in accounts.Accounts)
            {
                if (a.TextContain(searchFor))
                    stringList.Add(a.ToString());
            }

            if (stringList.Count > 0)
            {
                HelpModule.TableHeader();
                foreach (string s in stringList) HelpModule.WriteLine(s);
                HelpModule.Line();
            }
            HelpModule.WriteLine("No Match to the entered text");
        }
        private static void Move()
        {
            HelpModule.WriteLine("From:");
            Account accFrom = SearchByAccNum();
            int amount = HandleMoney(accFrom);
            HelpModule.WriteLine("To:");
            Account accTo = SearchByAccNum();

            accFrom.Balance -= amount;
            accTo.Balance += amount;

            HelpModule.WriteLine($"Transfer {amount} from Acccount#{accFrom.Number} to Account#{accTo.Number} done!");
            accounts.Write(Path);
        }

        private static int HandleMoney(Account acc)
        {
            HelpModule.WriteLine("Amount:");
            while (true)
            {
                HelpModule.WriteLine("Please, Enter a Vaild Amount!");
                var read = Console.ReadLine();
                var amount = HelpModule.ValidateInt(read);
                if (amount > 0 && acc.Balance - amount >= 0)
                {
                    return amount;
                }
            }
        }

        public static void AddNewAccount()
        {
            var account = new Account();           
           
            var accNum = -1;
            while (accNum <= -1)
            {
                HelpModule.WriteLine("Enter Vaild Account Number:");
                var read = Console.ReadLine();
                accNum = HelpModule.ValidateInt(read);
            }
            account.Number = accNum;
            account.Balance = 0;

            HelpModule.WriteLine("Enter Account Label:");
            var label = Console.ReadLine();
            account.Label = label;

            var accOwner = -1;
            while (accOwner <= -1)
            {
                HelpModule.WriteLine("Enter Owner Number:");
                var read = Console.ReadLine();
                accOwner = HelpModule.ValidateInt(read);
            }
            account.Owner = accOwner;

            accounts.Accounts.Add(account);
            accounts.Write(Path);
            HelpModule.WriteLine("Success!");
        }
    }        
}
