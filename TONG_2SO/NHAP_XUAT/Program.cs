using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;
namespace NHAP_XUAT
{
    class Program
    {
        static void Main(string[] args)
        {
            //khai bao
            string hovaten;
            string ho_lot;
            string ten;
            DateTime ngay_sinh;
            Double luong;
            bool gtinh;
            int vitri;
            int chieu_dai;
            string chuoi;
            //Nhap 
            x.Write("Nhap ho ten: ");
            hovaten =x.ReadLine();
            //Xly
            vitri = hovaten.LastIndexOf(" ");
            chieu_dai = hovaten.Length;

            ho_lot = hovaten.Substring(0, vitri);
            ten = hovaten.Substring(vitri, chieu_dai - vitri);

            chuoi = "Chuoi xuat : \nHo ten: " + ho_lot
                + "\nTen: " + ten;
            x.Write(chuoi);
           x.ReadLine();
        }
    }
}
