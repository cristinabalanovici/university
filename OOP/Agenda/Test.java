/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ro.ubbcluj.subex;
import java.io.*;
/**
 *
 * @author crisb
 */
public class Test {
    public static void main(String[] args) {
        Agenda a= new Agenda();
         try {
        a.citeste("C:\\Facultate\\OOP\\Teme\\SubEx\\src\\Persoane.txt");
       
         for (Persoana p:a.pers)
         {
             System.out.println(p.nume);
           if (p instanceof Prieten)
               SocialMedia.conecteaza(new Facebook(),p);
           else
                SocialMedia.conecteaza(new Twitter(),p);
        } 
         }
         catch (IOException e) {
            e.printStackTrace();
	}
    }
}
