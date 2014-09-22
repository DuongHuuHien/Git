using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;
namespace TINH
{
    class Program
    {
        static void Main(string[] args)
        {
            ptrinh1();
            cvdtchunhat();
            cvdttron();
            doikgsangpound();
            doipoundsangkg();
            tinhgiay();
        }
        

        static void ptrinh1()
        {
            x.WriteLine("\n Phuong trinh bac nhat\n");
            x.WriteLine("Ptrinh ax+b=0");

            x.WriteLine("Nhap he so a:");
            float a = float.Parse(x.ReadLine());

            x.WriteLine("Nhap he so b:");
            float b = float.Parse(x.ReadLine());

            x.WriteLine("Nghiem cua ptrinh la:");
            x.WriteLine("x:{0}", -b / a);
            x.ReadLine();
        }
        static void cvdtchunhat()
        {
            x.WriteLine("\n Chuong trinh chu vi dien tich");
            
            x.WriteLine("Nhap chieu dai:");
            float chieudai = float.Parse(x.ReadLine());
            x.WriteLine("Nhap chieu rong:");
            float chieurong = float.Parse(x.ReadLine());

            x.WriteLine("Chu vi hinh chu nhat:{0} \n Dien tich hinh chu nhat:{1}", (chieudai + chieurong)*2,chieudai*chieurong);
            x.ReadLine();
        }
         static void cvdttron()
        {
            x.WriteLine("\n Chuong trinh hinh tron");
            x.WriteLine("Nhap vao ban kinh r:");

            float r = float.Parse(x.ReadLine());
            const float pi = 3.14f;
            x.WriteLine("Chu vi hinh tron:{0}", r * 2 * pi);
            x.WriteLine("Dien tich hinh tron:{0}", r * r * pi);
            x.ReadLine();
        }
        static void doikgsangpound()
        {
            x.WriteLine("\n Chuong trinh doi kg sang pound");
            x.WriteLine("Nhap so kg muon doi :");
            float kg = float.Parse(x.ReadLine());

            const float hskg = 2.2046f;
            x.WriteLine("So pound dc doi:{0} P", kg * hskg);
            x.ReadLine();
        }
        static void doipoundsangkg()
        {
            x.WriteLine("\n Chuong trinh doi pound sang kg");
            x.WriteLine("Nhap so pound muon doi:");
            float pound = float.Parse(x.ReadLine());

            const float hsp = 0.4535f;
            x.WriteLine("So kg dc doi:{0} Kg", pound * hsp);
            x.ReadLine();
        }

        static void tinhgiay()
        {
            x.WriteLine("\n Chuong trinh doi giay");

            x.WriteLine("Nhap vao so gio:");
            float gio = float.Parse(x.ReadLine());

            x.WriteLine("Nhap vao so phut:");
            float phut = float.Parse(x.ReadLine());

            x.WriteLine("Nhap vao so giay:");
            float giay = float.Parse(x.ReadLine());

            x.WriteLine("So giay:{0} giay", (gio * 3600) + (phut * 60) + giay);
            x.ReadLine();

        }
     }

}
