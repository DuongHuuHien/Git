using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x= System.Console;
namespace BIEN_CT
{
    class Program
    {
        struct Phan_so
        {
            public int Ts;
            public int Ms;
        }
        struct Nhan_vien
        {
            public string ho_ten;
            public bool gioi_tinh;
            public DateTime ngay_sinh;
            public int muc_luong;

        }
        static void Main(string[] args)
        {
            //Khai bao bien
            int a, b;
            string chuoi;
            Nhan_vien Nv;
            Nhan_vien Nv1;
            Phan_so Ps;
            //Gan cho bien
            Nv.ho_ten = "Le Minh Tam";
            Nv.gioi_tinh = true;
            Nv.muc_luong = 500000;
            Nv1.ho_ten = "Nguyen Van Ti";
            Nv1.gioi_tinh = false;
            Nv1.muc_luong = 3000;
            Ps.Ts = 4;
            Ps.Ms = 2;


            //xly

            //Ket xuat
            chuoi = "Nhan vien 1: \n"
                + "Ho ten: \n " + Nv.ho_ten
                + "\nGioi tinh " + Nv.gioi_tinh
                + "\n Muc luong " + Nv.muc_luong;
           x.Write(chuoi);
            x.ReadLine();
        }
    }
}
