using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;
namespace SOSANH_3SO
{
    class Program
    {
        static void Main(string[] args)
        {
            x.Write("Nhap vao so a:");
            int a = int.Parse(x.ReadLine());

            x.Write("Nhap vao so b:");
            int b = int.Parse(x.ReadLine());

            string sosanh = (a >= b) ? a > b ? "a > b" : "a = b" : " a < b";
            x.WriteLine(sosanh);
            x.ReadLine();
        }
    }
}
