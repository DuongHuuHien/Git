using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using x = System.Console;

namespace VD_3._17_60_BIEN_CUCBO
{
    class Program
    {
        int qtrinh=100;
        float chon=20.5f;
        
            public void sum(){
                float ta= qtrinh* chon *0.1f;
                float no=qtrinh * chon -ta;

                x.WriteLine("Ta day ne :{0}",ta);
                x.WriteLine("No day kia :{0}",no);

            }
        static void Main(string[] args){
            Program tinh = new Program();
            tinh.sum();

            x.ReadLine();

            


        }
    }
}
