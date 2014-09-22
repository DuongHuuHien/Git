using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;
namespace SAPXEP
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] a = new int[100];
            Random random=new Random();

            int tam;
            for (int i = 0; i < a.Length; i++)
                a[i] = random.Next(1000);
            for (int i = 0; i < a.Length; i++)
            {
                if (i % 10 == 0)
                    x.WriteLine();
                x.Write(a[i] + " ");
            }
            for(int i=0;i<a.Length;i++)
                for (int j = i + 1; j < a.Length; j++)
                {
                    if (a[i] > a[j])
                    {
                        tam = a[i];
                        a[i] = a[j];
                        a[j] = tam;
                    }
                    //for (int i = 0; i < a.Length; i++)
                    //{
                    //    if (i % 10 == 0)
                    //        x.WriteLine();
                    //    x.Write(a[i] + "");
                    //}
                    x.ReadLine();
                }

        }
    }
}
