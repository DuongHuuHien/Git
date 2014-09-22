using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;
namespace CAT_XOA_CHUOI
{
    class Program
    {
        static void Main(string[] args)
        {
            x.Write("Nhap vao chuoi (chieu dai > 2 ky tu):");

            string chuoi = x.ReadLine();
            chuoi = chuoi.Insert(2, "--anhchaoemhihi--");
            x.WriteLine("Chuoi sau khi chen vao chuoi sau vi tri 2 ky tu la:{0}", chuoi);

            chuoi = chuoi.Remove(3, 5);
            x.WriteLine("Chuoi sau khi xoa chuoi vi tri 3 va 5 ky tu:{0}", chuoi);

            string sleft = chuoi.PadLeft(30, '.');
            x.WriteLine(sleft);

            string sright = chuoi.PadRight(30, '.');
            x.WriteLine(sright);

            string chuoiten = "Duong Huu Hien";
            chuoiten = chuoiten.Trim();
            x.WriteLine(chuoiten);
            x.ReadLine();
        }
    }
}
