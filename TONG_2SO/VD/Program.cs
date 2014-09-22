using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace IMultiple
{
      
    interface ITeresstrialAnimal
    {
        string Eat();
    }
    interface IMarineAnimal
    {
        string Eat();
    }
    class Corcodile:ITeresstrialAnimal,IMarineAnimal
    {
        string IMarineAnimal.Eat()
        {
            string mariCor = "Corcodile eat Fish and Marine animals";
            return mariCor;
        }

        string ITeresstrialAnimal.Eat()
        {
            string tereCor = "Corcodile eat other Teresstrial animals";
            return tereCor;
        }
        public string EatTeresstrial()
        {
            ITeresstrialAnimal objTer;
            objTer = this;
            return objTer.Eat();            
        }
        public string EatMarine()
        {
            IMarineAnimal objMar;
            objMar = this;
            return objMar.Eat();
        }
        static void Main(string[] args)
        {
            Corcodile cor = new Corcodile();
            //cor.EatTeresstrial();
            Console.WriteLine(cor.EatTeresstrial());
            //cor.EatMarine();
            Console.ReadLine();
        }

    }
}
    

