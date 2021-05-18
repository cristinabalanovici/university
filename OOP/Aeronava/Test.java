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

public class Test {
    public static void main(String[] args) {
        Client c= new Client();
        Aeroport aero=new Aeroport();
        Random r= new Random();
        int i=r.nextInt();
        try {
        if (i%2==0){
            System.out.println("Se genereaza AvionPersoane");
             aero.creazaAvion("Berlin", new AvionPersoaneFactory());
          
            c.search(aero.aeronave, "Stuttgart");
        }
        else {
            System.out.println("Se genereaza AvionCargo");
            aero.creazaAvion("Berlin", new AvionCargoFactory());
          
            c.search(aero.aeronave, "Berlin");
        }
        }
        catch(NoDestinationFound e) {
            System.out.println("Cautati alt avion");
        }
}
}
