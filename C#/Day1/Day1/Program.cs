using System;

namespace Day1
{
    class Program
    {
        static void Main(string[] args)
        {
           // Console.WriteLine("Hello World!");
            int veselsSkaitlis = 5;
            double arKomatu = 4.5;
            String simboluVirkne = "definejas sadi";
            char simbols = 'g';
            bool patiessVaiNe = true;
            veselsSkaitlis = 6;

            // Console.WriteLine("Ievadiet vardu");
            // simboluVirkne = Console.ReadLine();
            // Console.WriteLine("Sveiki, " + simboluVirkne);

            /*Console.WriteLine("Ievadiet skaitli");
            simboluVirkne = Console.ReadLine();
            int jaunaisSkaitlis = Convert.ToInt16(simboluVirkne);
            Console.WriteLine(jaunaisSkaitlis);
            */
            


            Console.WriteLine("Ievadiet skaitli");
            simboluVirkne = Console.ReadLine();
            int jaunaisSkaitlis = Convert.ToInt16(simboluVirkne);

            Console.WriteLine("Ievadiet skaitli 2");
            simboluVirkne = Console.ReadLine();
            int jaunaisSkaitlis2 = Convert.ToInt16(simboluVirkne);
            Console.WriteLine(jaunaisSkaitlis + jaunaisSkaitlis2);
            




            Console.ReadLine();

            
        }
    }
}
