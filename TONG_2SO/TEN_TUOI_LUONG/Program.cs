using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;
namespace TEN_TUOI_LUONG
{
    class Program
    {
        static void Main(string[] args)
        {
            x.WriteLine("Ban ten gi?");
            string ten = x.ReadLine();

            x.WriteLine("Ban bao nhieu tuoi?");
            string tuoi =x.ReadLine();

            int sotuoi = Convert.ToInt32(tuoi);
           // x.WriteLine("Chao ban " + ten + "(" + sotuoi + ")tuoi");

            x.WriteLine("He so luong cua ban bao nhieu?");
            string luong = x.ReadLine();

            double hso = Convert.ToInt32(luong);
            x.WriteLine("Cha ban {0} ({1} tuoi) co he so luong {2}",ten,sotuoi,hso);
            x.ReadLine();
        }
    }
}
