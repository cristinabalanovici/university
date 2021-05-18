/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ro.ubbcluj.temalab7;

/**
 *
 * @author crisb
 */
class RaisedDoughnut implements Doughnut { 
 RaisedDoughnut(){}
   public void bake(){ System.out.println("10 minute");} 
}


class FilledDoughnut implements Doughnut { 
 FilledDoughnut() {}
   public void bake(){ System.out.println("12 minute");} 
}


 class CreateRaisedDoughnuts implements DoughnutFactory {
     public Doughnut createDoughnut() { return new RaisedDoughnut();}
 }


 class CreateFilledDoughnuts implements DoughnutFactory {
     public Doughnut createDoughnut() { return new FilledDoughnut();}
 }


public class DoughnutStore {
    public static void DoughnutConsumer(DoughnutFactory fact){
    Doughnut d = fact.createDoughnut();
    d.bake();
   }
    
    
public static void main(String[] args){
    DoughnutConsumer(new CreateRaisedDoughnuts());
    DoughnutConsumer(new CreateFilledDoughnuts());
    
}
}
