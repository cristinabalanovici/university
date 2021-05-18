/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ro.ubbcluj.lab11;
import java.util.*;
/**
 *
 * @author crisb
 */
public class Aeroport{
    ArrayList<Aeronava> aeronave = new ArrayList<Aeronava>();
    public void creazaAvion(String s, AvionFactory af) {
        Aeronava a = af.createAvion(s);
        aeronave.add(a);
        a.getClassName();
        a.getDestinatie();
    }
    int AvioaneSize(){
        return aeronave.size(); 
    }
    
}
