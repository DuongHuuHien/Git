using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;
namespace MATRAN_TAMGIAC
{
    class Program
    {
        static void Main(string[] args)
        {
            int[][] a;
            a=new int[5][];

            for (int i = 0; i < 5; i++)
                a[i] = new int[i+1];

            //nhap du lieu
            
            for (int j = 0; j < a[i].Length; j++)
            {
                
                a[i][j] = i + j;
                x.Write(a[i][j] + " ");
            }
            x.WriteLine();
            x.ReadLine();
        }
        
    }
}
