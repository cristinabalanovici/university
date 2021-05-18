/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ro.ubbcluj.lab12;

import java.util.Random;

/**
 *
 * @author crisb
 */
public class Test {
    public static void main(String[] args) {
        Companie comp = new Companie(20);
        Random r= new Random();
        for(int i=0;i<20;i++)
        {
            int a=r.nextInt();
            if(a%2==0){
                comp.add(new Muncitor());
            }
            else comp.add(new Vanzator());
            
        }
        for (int j=0;j<20;j++){
                Random rand= new Random();
                int q= rand.nextInt(5)+5;
            try {               
                comp.generareAngajati(j, q);
                }
            
            catch(NivelCompetentaInvalid e){
                System.out.println("Nivelul competentei nu este intre 5 si 10");
            }
        }
        //Selector selector = comp.selector(); 
        //while(!selector.end())
        //{
          //  System.out.println(selector.current()+" ");
            //selector.next();
        ///}
    }  
}
