using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x=System.Console;
namespace CAU_TRUC
{
    class Program
    {
        struct NHANVIEN
        {
            public string hoten;
            public bool gtinh;
            public DateTime ngaysinh;
            public double mucluong;

        }
        static void Main(string[] args)
        {
         
            NHANVIEN[] Nv = new NHANVIEN[3];
            Nv[0].hoten = "Tran van Lon";
            Nv[0].gtinh = true;
            Nv[0].ngaysinh = new DateTime(1990,3,12);
            Nv[0].mucluong = 50;

            Nv[1].hoten = "Tran van Heo";
            Nv[1].gtinh = true;
            Nv[1].ngaysinh = new DateTime(1991, 3, 12);
            Nv[1].mucluong = 51;

            Nv[2].hoten = "Tran van Tru";
            Nv[2].gtinh = false;
            Nv[2].ngaysinh = new DateTime(1992, 3, 12);
            Nv[2].mucluong = 52;
            //xly
            //so_nhan_vien=So nhan vien
            int so_nhan_vien = Nv.Length;
            //a=Nhan vien co muc luong cao nhat
            //luong_cao_nhat=luong cao nhat
            double luong_cao_nhat = Nv.Max(n => n.mucluong);
            //a=Nhan vien co luong  cao nhat
            NHANVIEN a =  Nv.First(n => n.mucluong == luong_cao_nhat);
            //b=Dsach nhan vien nam
            NHANVIEN[] b = Nv.Where(n => n.gtinh == true).ToArray();
            //c=so nhan vien nam
            int c = Nv.Count(n => n.gtinh == true);
            //d=Tim tuoi cao nhat
            int d = -Nv.Min(n => n.ngaysinh.Year - DateTime.Today.Year);
            //e=Nhan vien co tuoi lon nhat
            NHANVIEN e = Nv.First(n => n.ngaysinh.Year - DateTime.Today.Year == -d);
            //nhan vien TRan van Lon sinh vao thu may trong tuan
            string thu ="Thu la: " + Nv[0].ngaysinh.DayOfWeek;

            //ket xuat
            

            x.ReadLine();

        }
    }
}
