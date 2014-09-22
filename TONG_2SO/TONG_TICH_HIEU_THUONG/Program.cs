using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;
namespace TONG_TICH_HIEU_THUONG
{
    class Program
    {
        static void Main(string[] args)
        {
            int m, n;
            int tong, hieu, tich, phannguyen, sodu;
            double thuong, luythua, canbac2;
            x.WriteLine("Bat dau nhap cac phan tu");
            x.Write("Nhap phan tu thu m=");
            m = int.Parse(x.ReadLine());

            x.Write("Nhap phan tu thu n=");
            n = int.Parse(x.ReadLine());

            tong = m + n;
            hieu = m - n;
            tich = m * n;
            thuong = (double)m / n;

            phannguyen = m / n;
            sodu = m % n;
            luythua = Math.Pow(m, n);
            canbac2 = Math.Sqrt(m);

            x.WriteLine("Tong cua 2  {0} va {1} la = {2}",m,n,tong);
            x.WriteLine("Hieu cua 2  {0} va {1} la= {2}", m, n, hieu);
            x.WriteLine("Tich cua 2  {0} va {1} la= {2}", m, n, tich);
            x.WriteLine("Thuong cua 2  {0} va {1} la= {2}", m, n, thuong);
            x.WriteLine("Phan nguyen cua  {0} va {1}= {2}", m, n, phannguyen);
            x.WriteLine("So du cua 2 so {0} va {1}= {2}", m, n, sodu);
            x.WriteLine("Luy thua cua {0} va {1}= {2}", m, n, luythua);
            x.WriteLine("Can bac 2 cua {0}={2}", m, n, canbac2);
            x.ReadLine();

        }
    }
}
