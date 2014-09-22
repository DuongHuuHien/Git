using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;
namespace TEN_DTB
{
    class Program
    {
        static void Main(string[] args)
        {
            string hoten;
            string gioitinh;
            DateTime ngaysinh;
            int songayvang;
            double dtb;
            //nhap lieu
            x.Write("Ho ten:");
            hoten = x.ReadLine();

            x.Write("Gioi tinh:");
            gioitinh =x.ReadLine();

            x.Write("Ngay sinh:");
            ngaysinh = DateTime.Parse(x.ReadLine());

            x.Write("So ngay vang:");
            songayvang = int.Parse(x.ReadLine());

            x.Write("Diem trung binh:");
            dtb = double.Parse(x.ReadLine());

            string chuoi = "Cac thong tin da nhap \n";
            chuoi = chuoi + "Ho ten:" + hoten + "\n";
            chuoi = chuoi + "Gioi tinh:" + gioitinh + "\n";
            chuoi = chuoi + "Ngay sinh:" + ngaysinh.ToLongDateString() + "\n";
            chuoi = chuoi + "So ngay vang:" + songayvang + "\n";
            chuoi = chuoi + "Diem trung binh:" + dtb + "\n";
            x.Write(chuoi);
            x.ReadLine();



        }
    }
}
