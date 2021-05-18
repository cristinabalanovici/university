/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ro.ubbcluj.lab11;

/**
 *
 * @author crisb
 */
import java.util.*;
class NoDestinationFound extends Exception {
    public void NoDestinationFound () throws NoDestinationFound{
            System.out.println("Nu s-au gasit avioane!");
    }
}

public class Client extends Aeroport{
    public void search(ArrayList<Aeronava> a, String Destinatie) throws NoDestinationFound{
        int avionGasit=0;
        for (Aeronava an:a)
        {
            if (an.getDestinatie().equals(Destinatie))
            {
                avionGasit++;
                an.getClassName();
            } 
        }
        if (avionGasit==0)
            throw new NoDestinationFound();
    }
}
