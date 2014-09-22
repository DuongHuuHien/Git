using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;
namespace NGAY_TRONGTUAN
{
    class Program
    {
        static void Main(string[] args)
        {
        //    //khai bao va khoi tao
        //int thu 2;
        ////xuat ra
        //if((thu==1)||(thu==3)||(thu==5))
        //x.WriteLine("ngay chan 2 4 6");
        //else if((thu==2)||(thu==4)||(thu==6))
        //x.WriteLine("ngay le 3 5 7");
        //else 
        //x.WriteLine("ngay chu nhat cuoi tuan");
        //x.ReadLine();
            //khai bao va khoi tao
		int thu=1;
		//xuat ra 
        switch (thu)
        {
            case 0:
                x.WriteLine("Chu nhat");
                break;
            case 1:
                x.WriteLine("Thu hai");
                break;
            case 2:
                x.WriteLine("Thu ba");
                break;
            case 3:
                x.WriteLine("Thu tu");
                break;
            case 4:
                x.WriteLine("Thu namm");
                break;
            case 5:
                x.WriteLine("Thu sau");
                break;
            case 6:
                x.WriteLine("Thu bay");
                break;
            default:
                x.WriteLine("khong pahi thu trong tuan");
                break;
        }
                x.ReadLine();
        }
    }
}
