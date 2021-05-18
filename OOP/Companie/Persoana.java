/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ro.ubbcluj.lab12;

/**
 *
 * @author crisb
 */

public class Persoana {
    String nume;
    String prenume;
    int competenta;
    
public void getNume(int i) {
        this.nume= "N"+i;
    }

public void getPrenume(int i) {
        this.prenume= "P"+i;
    }
}