/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ro.ubbcluj.subex;

/**
 *
 * @author crisb
 */

class Facebook implements Socializare
{
    public void socializeaza(Persoana p)
    {
    System.out.println("socializez pe Facebook cu:"+p.nume+ " "+p.prenume);
    }
}

class Twitter implements Socializare
{
    public void socializeaza(Persoana p)
    {
    System.out.println("socializez pe Twitter cu:"+p.nume+ " "+p.prenume);
    }
}

public class SocialMedia  {
    public static void conecteaza(Socializare s, Persoana p)
    {
      s.socializeaza(p);
    }
}
