using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;
namespace CHUOI_HOA_THUONG
{
    class Program
    {
        static void Main(string[] args)
        {
            //khai báo biến
            string hoten;
            //nhap gia tri
           x.Write("Nhap ho ten: ");
            hoten = Console.ReadLine();
            //thao tac chuõi
            string HT = hoten.ToUpper();
            string ht = hoten.ToLower();
            int dodai = hoten.Length;
            //xuất ra 
            x.WriteLine("ho ten :{0}", HT);
            x.WriteLine("ho ten:{0}", ht);
            x.WriteLine("do dai ho ten:{0}", dodai);
            x.ReadLine();
        }
    }
}
