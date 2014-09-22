using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;
namespace DOI_CHUOI
{
    class Program
    {
        static void Main(string[] args)
        {
            x.Write("Nhap vao mot chuoi:");
            string chuoi = x.ReadLine();
            int i = chuoi.Length;

            x.WriteLine("Chuoi co chieu dai {0} ky tu", i);
            chuoi = chuoi.ToUpper();
            x.WriteLine(chuoi);

            chuoi = chuoi.ToLower();
            x.WriteLine(chuoi);
            x.ReadLine();

        }
    }
}
