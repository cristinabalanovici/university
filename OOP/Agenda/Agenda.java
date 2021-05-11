/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ro.ubbcluj.subex;
import java.io.*;
import java.util.*;
import java.util.regex.*;
/**
 *
 * @author crisb
 */
public class Agenda {

   List<Persoana> pers=new ArrayList<Persoana>();
    
    public void citeste(String Persoane) throws IOException{
        BufferedReader in = new BufferedReader (new FileReader(Persoane));
        String P;
        String[] r;
        while((P=in.readLine())!=null)
        {
            r=P.split(" ");
            System.out.println(r[1]);
            importa(r[2],r[1],r[0]);
            
            
        }
        in.close();
       
}
   
    public void importa(String tipp, String nume, String prenume) {
        if (tipp.equals("prieten"))
            
            pers.add(new Prieten(nume,prenume));
        else  
            pers.add(new Coleg(nume,prenume));
        
    }
}
