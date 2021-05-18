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
public interface Selector {
    boolean end();
    Persoana current();
    void next();
}
