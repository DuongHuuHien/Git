using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using X = System.Console;
namespace VD_3_20_63_GOI_HANG_TU_CLASS
{
    class Class1
    {
        public const double pi=3.14f;

        public const string tentoi = "Ai ma biet", tinh = "Co troi moi biet";

        public const int lienket = 8;
        public const int lienket2 =lienket+ 8;
    }
    class Program
    {
        static void Main(string[] args)
        {
            const string hihi = "Hello love baby cute kul! khikhi";

           
            X.WriteLine("Gio thu may do di ve:"+ Class1.tentoi) ;
            X.WriteLine("Tan cay xoa bong biet ve noi mo:" + Class1.lienket);

            X.WriteLine(hihi);
            X.Write("Duong xua nga bong hoa vang:");
            int hoa = Convert.ToInt32(X.ReadLine());
            double canh = hoa + hoa + hoa + Class1.pi;

            X.WriteLine("Nhin theo bong mat trang ngan o dau:{0}", nhanh + Class1.lienket2);
            X.ReadLine();
        }
    }
}
