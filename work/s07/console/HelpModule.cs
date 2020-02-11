using System;
using System.Threading;

namespace console
{
    public class HelpModule
    {
        public static int sleepTime = 100;

        public static int ValidateInt(string str)
        {
            try
            {
                var num = Convert.ToInt32(str);
                return num;
            }
            catch (FormatException) { };
            return -1;
        }

        //This method to add effect
        public static void WriteLine(string str)
        {
            Console.WriteLine(str);
            Thread.Sleep(sleepTime);
        }

        public static void Line()
        {
            string temp = String.Format("-{0,-10}-{1,-10}-{2,-10}-{3,-10}-", "----------", "----------", "----------", "----------");
            Console.WriteLine(temp);
            Thread.Sleep(sleepTime);

        }

        public static void TableHeader()
        {
            Line();
            string temp = String.Format("|{0,-10}|{1,-10}|{2,-10}|{3,-10}|", "number", "balance", "label", "owner");
            Console.WriteLine(temp);
            Thread.Sleep(sleepTime);
            Line();
        }

        public static int LoopUntilValidInt(string msg)
        {
            while (true)
            {
                WriteLine(msg);
                var read = Console.ReadLine();
                var readInt = ValidateInt(read);
                if (readInt != -1)
                {
                    return readInt;
                }
            }         

        }

    }
}
