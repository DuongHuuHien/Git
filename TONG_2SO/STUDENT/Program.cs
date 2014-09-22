using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace StudentInfo
{
    class Student
    {
        private int age;
        private string name;
        //Constructor
        public Student(int age, string name)
        {
            this.age = age;
            this.name = name;
        }
        //Method
        public void display()
        {
            Console.WriteLine("Student Name: " + name);
            Console.WriteLine("Student Ages: " + age);
        }
    }
    class Detail : Student
    {
        private string stu_Adreess = "Paris";
        private int stu_ID = 101;
        public Detail()
            : base(25, "Thao")
        {
            //this.stu_Adreess = "Paris";
            //this.stu_ID = 101;
        }
        public void Display()
        {
            base.display();
            Console.WriteLine("Adress: " + stu_Adreess);
            Console.WriteLine("ID: " + stu_ID);
        }
        static void Main(string[] args)
        {
            Detail sv = new Detail();
            sv.Display();
            Console.ReadLine();
        }
    }
}

