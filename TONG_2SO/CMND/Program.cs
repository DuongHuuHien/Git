using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;
namespace CMND
{
    class Program
    {
        static void Main(string[] args)
        {
            tuoicmnd();
            Cachkhac();
            x.WriteLine("\n Chi tiet lien he: chauthanhduong18494@gmail.com \n");
            x.ReadLine();
        }
        static void tuoicmnd()
        {
            x.Write("Cho biet tuoi cua ban:");
            int tuoi = int.Parse(x.ReadLine());

            string xacdinh = tuoi > 15 ? "Tuoi hop le lam cmnd" : "Tuoi chua du de lam cmnd";
            x.WriteLine(xacdinh);
            x.ReadLine();
        }
        static void Cachkhac()
        {
            x.Write("Xin cho biet tuoi cua ban:");
            int tuoi = int.Parse(x.ReadLine());
            x.WriteLine("Ban {0} tuoi, ban {1} du tuoi lam cmnd",tuoi,tuoi>=15 ?" ":"khong");
            x.ReadLine();
        }
    }
}
