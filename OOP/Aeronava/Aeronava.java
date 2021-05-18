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
public interface Aeronava {
    public void getClassName();
    public String getDestinatie();
}

interface AvionFactory {
   Aeronava createAvion(String p);
}