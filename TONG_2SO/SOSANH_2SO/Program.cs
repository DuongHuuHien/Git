using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;
namespace SOSANH_2SO
{
    class Program
    {
        static void Main(string[] args)
        {
            x.WriteLine("Nhap vo so a:");
            int a = int.Parse(x.ReadLine());

            x.WriteLine("Nhap vao so b:");
            int b = int.Parse(x.ReadLine());

            string s = (a > b) ? "a lon hon b" : "a nho hon b";
            x.WriteLine(s);
            x.ReadLine();
        }
    }
}
