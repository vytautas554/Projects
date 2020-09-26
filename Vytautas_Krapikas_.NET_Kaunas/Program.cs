using System;

namespace uzduotis
{
    class Program
    {
        static void Main(string[] args)
        {
            GetAppInfo();
            GreetUser();

            while (true)
            {
                Random random = new Random();

                int eggFloor = random.Next(1, 10);

                int guess = 0;

                Console.WriteLine("Spėkite kuriame aukšte suduš kiaušinis");

                while (guess != eggFloor)
                {
                    string input = Console.ReadLine();

                    if (!int.TryParse(input, out guess))
                    {

                        PrintColorMessage(ConsoleColor.Red, "Iveskite auksto numeri");

                        continue;
                    }

                    guess = Int32.Parse(input);

                    if (guess != eggFloor)
                    {

                        PrintColorMessage(ConsoleColor.Red, "Neatspėjote, bandykite dar kartą");
                    }
                }

                PrintColorMessage(ConsoleColor.Yellow, "Teisingai!!!");

                Console.WriteLine("Bandyti dar kartą? [Y or N]");

                string answer = Console.ReadLine().ToUpper();

                if (answer == "Y")
                {
                    continue;
                }
                else if (answer == "N")
                {
                    return;
                }
                else
                {
                    return;
                }

            }
        }

        static void GetAppInfo()
        {
            string appName = "Kada sudus kiausinis";
            string appVersion = "1.0.0";
            string appAuthor = "Vytautas";

            Console.ForegroundColor = ConsoleColor.Green;

            Console.WriteLine("{0}: Version {1} by {2}", appName, appVersion, appAuthor);

            Console.ResetColor();
        }

        static void GreetUser()
        {
            Console.WriteLine("Koks jūsų vardas?");

            string inputName = Console.ReadLine();

            Console.WriteLine("Sveiki {0}, atspėkite kada sudus kaiusinis", inputName);
        }

        static void PrintColorMessage(ConsoleColor color, string message)
        {
            Console.ForegroundColor = color;

            Console.WriteLine(message);

            Console.ResetColor();

        }
    }
}
