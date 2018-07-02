/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package br.ufop.compEvol.components;

/**
 *
 * @author Amaral, Henrique Q.
 */
public class ProblemaRastrigin implements Problema{
    
    private Integer nVariaveis;
    
    public ProblemaRastrigin(Integer nVariaveis){
        this.nVariaveis = nVariaveis;
    }
    
    @Override
    public void calcularFuncObjetivo(Individuo ind){
        //Rastrigin function
        
        double sum = 0;
        
        for(int i = 0; i < ind.getnVar(); i++){
            sum += (Math.pow(ind.getVariaveis().get(i), 2) - 10 * Math.cos(2 * Math.PI*ind.getVariaveis().get(i)));
        }
        ind.setFuncaoObjetivo(10 * ind.getnVar() + sum);
    }
    
    public int getDimensao(){
        return this.nVariaveis;
    }



}
