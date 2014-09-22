using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;
namespace KHOANGCACH_2D
{
    class Program
    {
        struct Diem
        {
            public double x;
            public double y;

        }
        static void Main(string[] args)
        {
            //Khai bao bien
            Diem A, B ;
            string chuoi;
            Double kc;

            //Nhap du lieu cho bien
           
            x.Write("Nhap toa do cho xA: ");
            A.x = double.Parse(x.ReadLine());
           x.Write("Nhap toa do cho yA: ");
            A.y = double.Parse(x.ReadLine());

           x.WriteLine("Nhap toa do cho xB: ");
            B.x = double.Parse(x.ReadLine());
            x.Write("Nhap toa do cho yB: ");
            B.y = double.Parse(x.ReadLine());

            //Xly 
            kc = Math.Sqrt((B.x - A.x) * (B.x - A.x) + (B.y - A.y) * (B.y - A.y));


            //Ket xuat
            chuoi = "Khoang cach giua A(" + A.x + "," + A.y + ")"
                + " va diem B(" + B.x + "," + B.y + ")" + "=" + kc;

            x.WriteLine(chuoi);
            x.ReadLine();
        }
    }
}
