using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;
namespace TAO_MATRAN
{
    class Program
    {
        static void Main(string[] args)
        {
            //khai bao tuong minh
            int []a=new int[4];
            a[0]=1;
            a[1]=10;
            a[2]=100;
            a[3]=1000;

            x.WriteLine("Gia tri cua mang a");
            x.WriteLine("Mang a {0} ptu",a.Length);

            for(int i=0;i<a.Length;i++)
                x.Write(a[i]+" ");
            x.WriteLine();
            x.ReadLine();

            //gan gia tri 
            //string [] chuoi= new string [3]("Ha Noi","Nha Trang","Hue");

            //khai bao khong tuong minh
            var b=new[]{15,25,35,45};

            //mang kieeu object
            object [] mang =new object[4];
            mang[0]=true;
            mang[1]=100;
            mang[2]="Xin chao";
            mang[3]=55.67;

        }
    }
}
