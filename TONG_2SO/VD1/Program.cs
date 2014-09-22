using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Abstract.And.Interface.Class
{

    public abstract class Animals
    {
        //Non-Abstract Method
        public void Eat()
        {
            Console.WriteLine("All animals eat somethings in order to serveice");
        }
        //Abstract Method
        public abstract void AnimalSound();
        //public abstract void Habitat();
        
    }

    class Lion : Animals
    {
        public override void AnimalSound()
        {
            Console.WriteLine("Lion Roars");
        }

    }

    class Dog : Animals
    {
        public override void AnimalSound()
        {
            Console.WriteLine("Dog barking!");
        }
        new public void Eat()
        {
            Console.WriteLine("Dog food");
        }
    }

    class Process
    {
        static void Main(string[] args)
        {
            Lion objLi = new Lion();
            Dog objDo = new Dog();
            objLi.AnimalSound();
            objLi.Eat();
            Console.WriteLine("---------------------------");
            objDo.Eat();
            objDo.AnimalSound();
            Console.ReadLine();
        }
    }

}