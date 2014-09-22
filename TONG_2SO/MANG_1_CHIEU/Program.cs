using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;
namespace MANG_1_CHIEU
{
    class Program
    {
        static void Main(string[] args)
        {
            //Khai bao
            //int[] a;
            int[] a = new int[4];

            //Gan gia tri
            a[0] = 9;
            a[1] = -5;
            a[2] = -9;
            a[3] = 3;
            //Xly
            //Tong=tong so nguyen cua a
            int tong = a.Sum();
            //Chieu_dai=So phan tu cua mang
            int chieu_dai = a.Length;
            //trung_binh=Trung binh cong
            double tb = a.Average();
            //lon_nhat=Phan tu lon nhat
            int lon_nhat = a.Max();

            //Nho nhat=Phan tu nho nhat
            int nho_nhat = a.Min();
            //b=sap xep mang a tang dan
            int[] b = a.OrderBy(n => n).ToArray();

            //c=sap xep giam
            int[] c = a.OrderBy(m => -m).ToArray();
            //Ket xuat

            //d=mang so duong tu mang a
            int[] d = a.Where(n => n > 0).ToArray();
            //e=so am dau tien cua mang a
            int e = a.First(n => n < 0);
            x.WriteLine("Nhap vao cac phan tu sau");
            x.WriteLine("Nhap vao phan tu thu nhat:");

            x.ReadLine();

        }
    }
}
