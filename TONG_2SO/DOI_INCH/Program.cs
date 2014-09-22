using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;
namespace DOI_INCH
{
    class Program
    {
        static void Main(string[] args)
        {
            x.Write("Nhap vao so muon doi:");
            float soinch = float.Parse(x.ReadLine());
            const float he = 2.54f;
            x.WriteLine("{0} soinch = {1}cm",soinch,soinch*he);
            x.ReadLine();


        }
    }
}
