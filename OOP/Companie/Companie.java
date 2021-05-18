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

class NivelCompetentaInvalid extends Exception {
    public void NivelCompetentaInvalid () throws NivelCompetentaInvalid {
        System.out.println("Nivel competenta invalid");
    }
}


public class Companie {
    private Persoana[] items; 
    private int next = 0; 
    
    public Companie(int size) { 
        items = new Persoana[size]; 
    }
    public void add(Persoana x) {
        if(next < items.length)
        items[next++] = x;
   }
    
    private class CompanieSelector implements Selector {
        private int i = 0;
        public boolean end() { 
            return i == items.length; 
        }
        
        public Persoana current() {
            return items[i]; 
        }
        
        public void next() { 
            if(i < items.length) i++; 
        }
   }
    
    public Selector selector() {
    return new CompanieSelector();
} 

    public void generareAngajati (int a, int n) throws NivelCompetentaInvalid{
        Persoana x= new Persoana();
        x.getNume(a);
        x.getPrenume(a);
            if (n>10 || n<5)
                throw new NivelCompetentaInvalid();
            else x.competenta=n;
            System.out.println(x.nume+ " " +x.prenume + " " +x.competenta);
        }
    }




