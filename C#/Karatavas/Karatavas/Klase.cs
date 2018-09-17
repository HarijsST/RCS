using System;
using System.Collections.Generic;
using System.Text;

namespace Karatavas
{
    class Klase
    {

        private void Vards()
        {
            char[] chars = new char[13];
            chars[0] = 'p';
            chars[1] = 'r';
            chars[2] = 'o';
            chars[3] = 'g';
            chars[4] = 'r';
            chars[5] = 'a';
            chars[6] = 'm';
            chars[7] = 'm';
            chars[8] = 'e';
            chars[9] = 's';
            chars[10] = 'a';
            chars[11] = 'n';
            chars[12] = 'a';
        }
        

            public void Menu()
        {
            Sakums();
            Console.ReadLine();
        }
                
        private void Sakums()
        {
            String izvele = "";
            Console.WriteLine("Ievadiet spelet, lai speletu vai iziet, lai izetu");
            while (izvele != "iziet")
            {
                izvele = Console.ReadLine();
                switch (izvele)
                {
                    case "spelet":
                        Svitra();
                        Ievade();
                        break;

                    case "iziet":
                        break;

                    default:
                        Console.WriteLine("Nepareiza ievade");
                        break;
                }
            }
        }

        private void Parbaude()
        {
            if ()
            {

            }
            else
            {

            }
        }

        private char Ievade()
        {
            Console.WriteLine("Ievadiet pārbaudamo burtu");
            String burts = Console.ReadLine();
            char result = Convert.ToChar(burts);
            return result;
        }

        private void Svitra()
        {
            int skaititajs = 0;
            String svitra = "_ " ;
            while (skaititajs < 13)
            {
                Console.Write(svitra);
                skaititajs++;
            }
        }
    }
}
