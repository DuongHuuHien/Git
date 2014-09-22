using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;
namespace TONG_2SO
{
    class Program
    {
        static void Main(string[] args)
        {

            int so1, so2, tong = 0;
            x.Clear();
            x.Write("{0}", " Nhap so thu nhat:");
            so1 = Convert.ToInt32(x.ReadLine());

            x.Write("Nhap so thu hai:");
            so2 = Convert.ToInt32(x.ReadLine());

            tong = so1 + so2;
            x.WriteLine("Tong cua" + so1 + " va " + so2 + " la " + tong);
            x.ReadLine();
        }
    }
}
