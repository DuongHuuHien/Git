using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;
namespace HOAN_VI
{
    class Program
    {
        static void Main(string[] args)
        {
            int x = 9, y = -5;
            xuat();

            x.WriteLine("5+6={0}", cong(5, 6));
            x.WriteLine("Truoc khi hoan vi x={0},y={1}", x, y);
            Hoanvi(ref x, ref y);
            x.WriteLine("Sau khi hoan vi x={0},y={1}", x, y);
           

        }
        static void xuat()
        {
            x.WriteLine("Thong tin xuat ra");
 
        }
        static int cong(int a,int b){
            return a+b;

        }
        static void Hoanvi (ref int a, ref int b){
            int tam;
           tam=a;
            a=b;
            b=tam;

        }
    }


}
