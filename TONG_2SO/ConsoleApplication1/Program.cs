using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;

namespace ConsoleApplication1
{
    class Program
    {
        static void Main(string[] args)
        {
            string path;
            x.Write("Nhap vao duong dan thu muc:");
            path = x.ReadLine();

            if (path.Equals(""))
                path = @"C:\Program Files\ ";
            x.WriteLine("Thu muc sau khi duyet {0}:", path);

            foreach (string ten in d.GetDirectories(path))
                x.WriteLine(ten);
            x.ReadLine();
        }
    }
}
