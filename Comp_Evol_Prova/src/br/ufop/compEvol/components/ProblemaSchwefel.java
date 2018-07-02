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
public class ProblemaSchwefel implements Problema{

    private int nVariaveis;

    public ProblemaSchwefel(int varNumb) {
        nVariaveis = varNumb;
    }

    @Override
    public void calcularFuncObjetivo(Individuo individuo) {

        Double value = 0.0;

        Double sum = 0.0;

        for (int i = 0; i < individuo.getVariaveis().size(); i++) {
            sum +=  individuo.getVariaveis().get(i) * Math.sin(Math.sqrt(Math.abs(individuo.getVariaveis().get(i))));
        }

        value = 418.9829 * nVariaveis - sum;

        individuo.setFuncaoObjetivo(value);

    }
}
