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

public class AvionCargo implements Aeronava {

    String destinatie;
    public void getClassName()
    {
        System.out.println(this.getClass().getSimpleName());
    }
    
    public AvionCargo(String destinatie)
    {
        this.destinatie=destinatie;
    }
    
    public String getDestinatie()
    {
        return destinatie;
    }
}

class AvionCargoFactory implements AvionFactory {
    public Aeronava createAvion(String p){
        return new AvionCargo(p);
    }
}