using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;
namespace BIEN_CO_SO
{
    class Program
    {
        static void Main(string[] args)
        {

            //Khai bao bien
            int a, b;
            int tong;
            double thuong;
            string chuoi;
            //Nhap du lieu cho bien
           x.Write("Nhap mot nguyen a: ");
            a = int.Parse(Console.ReadLine());

           x.Write("Nhap mot nguyen b: ");
            b = int.Parse(Console.ReadLine());

            //Xly tinh toan
            tong = a + b;
            thuong = (double)a / b;

            //Ket xuatng 

            chuoi = "Tong cua " + a + "+" + b + "=" + tong;
            x.Write(chuoi);
           x.ReadLine();
            
        }
    }
}
