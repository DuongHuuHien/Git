using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;
namespace SOSANH_TAM
{
    class Program
    {
        static void Main(string[] args)
        {
            int a, b;
            string tam;
            x.Write("Nhap gia tri cho a=");
            tam = x.ReadLine();
            a = Convert.ToInt32(tam);

            x.Write("Nhap gi tri cho b=");
            tam = x.ReadLine();
            b = Convert.ToInt32(tam);

            x.WriteLine("a={0} va b={1}", a, b);
            if (a > b)
                x.Write("{0}>{1}", a, b);
            else
                if(a<b)
            x.WriteLine("{0}<{1}",a,b);
            else
            x.WriteLine("{0}={1}",a,b);
            x.ReadLine();


        }
    }
}
