using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;
namespace MANG_2GT
{
    class Program
    {
        static void Main(string[] args)
        {
            int[ , ] a = new int[5, 7];
            //nhap du lieu
            for (int i = 0; i < 5; i++)
                for (int j = 0; j < 7; j++)
                    a[i, j] = i + j;

            //xuat du lieu
            for (int j = 0; j < 7; j++)
                x.Write (a[i,j] + " ");
            x.WriteLine();
            x.ReadLine();
        }
      
    }
}
