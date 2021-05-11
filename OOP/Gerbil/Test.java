/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ro.ubbcluj.lab10;
import java.util.*;
/**
 *
 * @author crisb
 */
public class Test {
    public static void main (String[] args){
        ArrayList <Gerbil> ger = new ArrayList<Gerbil>();
        for (int i=0;i<3;i++)
            ger.add(new Gerbil(i));
        for (int i=0;i<ger.size();i++)
            ger.get(i).hop();
            
    }
}
