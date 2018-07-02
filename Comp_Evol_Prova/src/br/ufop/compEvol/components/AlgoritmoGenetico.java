/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package br.ufop.compEvol.components;

import br.ufop.compEvol.enumerates.EnumCasoDeTeste;
import br.ufop.compEvol.enumerates.EnumRotinaAdotada;
import br.ufop.compEvol.general.Principal;
import java.time.Duration;
import java.time.Instant;
import java.util.ArrayList;
import java.util.Collections;
import java.util.Random;

/**
 *
 * @author Amaral, Henrique Q.
 */
public class AlgoritmoGenetico {
    // Tamanho da população

    Integer tamanhoPopulacao;
    // Taxa de crossover - operador principal
    Double taxaCrossover;
    // Taxa de mutação - operador secundário
    Double taxaMutacao;
    // Critério de parada - número de gerações
    Integer geracoes;

    // Dados do problema
    // ProblemaRastrigin - Rastrigin - Minimização
    Problema problema;
    // Mínimo
    Double minimo;
    // Máximo
    Double maximo;
    // Variáveis
    Integer nVariaveis;
    //popSize
    Integer Np;
    Integer D;

    public AlgoritmoGenetico(Integer tamanho, Double pCrossover, Double pMutacao, Integer geracoes, Problema problema, Double minimo, Double maximo, Integer nVariaveis) {
        this.tamanhoPopulacao = tamanho;
        this.Np = tamanho;
        this.taxaCrossover = pCrossover;
        this.taxaMutacao = pMutacao;
        this.geracoes = geracoes;
        this.problema = problema;
        this.minimo = minimo;
        this.maximo = maximo;
        this.nVariaveis = nVariaveis;
        this.D = nVariaveis;

    }

    Populacao populacao;
    Populacao novaPopulacao;
    Individuo melhorSolucao;

    public Individuo getMelhorSolucao() {
        return melhorSolucao;
    }

    public Double executar(EnumCasoDeTeste casoT, ArrayList<Execucao> execucoesCaso) throws Exception {

        //Principal.aleatorizarParametros(tamanhoPopulacao, taxaCrossover, taxaMutacao);
        tamanhoPopulacao = 100; //P/rincipal.aleatorizarPopulacao();
        taxaCrossover = 0.85;//Principal.aleatorizarCrossover();
        taxaMutacao = 0.02;//Principal.aleatorizarMutacao();

        Execucao exec = new Execucao(tamanhoPopulacao, taxaCrossover, taxaMutacao);
        Instant inicio = Instant.now();

        populacao = new Populacao(minimo, maximo, nVariaveis, tamanhoPopulacao, problema);

        novaPopulacao = new Populacao(minimo, maximo, nVariaveis, tamanhoPopulacao, problema);

        // Criar a população
        //populacao.criar();
        populacao.criarMemetico();
        // Avaliar
        populacao.avaliar();

        // Recuperar o melhor indivíduo
        // Enquanto o critério de parada não for satisfeito - Gerações
        Random rnd = new Random();
        int ind1, ind2;

        for (int g = 1; g <= geracoes; g++) {
            System.err.println("Geração: " + g);

            for (int i = 0; i < this.tamanhoPopulacao; i++) { //para cada individuo da populacao
                // Selecionar r0, r1, r2
                int r0, r1, r2;

                r0 = rnd.nextInt(this.Np);

                do {
                    r1 = rnd.nextInt(this.Np);
                } while (r1 == i);

                do {
                    r2 = rnd.nextInt(this.Np);
                } while (r1 == r2);

                Individuo trial = new Individuo(minimo, maximo, this.D);

                Individuo xr0 = populacao.getIndividuos().get(r0);
                Individuo xr1 = populacao.getIndividuos().get(r1);
                Individuo xr2 = populacao.getIndividuos().get(r2);

                // Gerar perturbacao - diferenca
                gerarPerturbacao(trial, xr1, xr2);
                // Mutacao - r0 + F * perturbacao
                mutacao(trial, xr0);

                // Target
                // DE/rand/1/bin
                Individuo target = populacao.getIndividuos().get(i);
                // Crossover
                crossover(trial, target);

                if (rnd.nextDouble() <= this.taxaCrossover) {
                    // Realizar a operação de crossover

                    //ind1 = rnd.nextInt(this.tamanhoPopulacao);

                //    do {
                        ind2 = rnd.nextInt(this.tamanhoPopulacao);
 //                   } while (ind1 == ind2); //garantir que são individuos diferentes

                    Individuo desc1 = new Individuo(minimo, maximo, nVariaveis);
                    Individuo desc2 = new Individuo(minimo, maximo, nVariaveis);

                    // Progenitores -  Selecionados aleatoriamente
                    Individuo p1 = trial;
                    Individuo p2 = populacao.getIndividuos().get(ind2);

                    //definir o método de operação a ser realizado
                    // Ponto de corte
                    int corte = rnd.nextInt(p1.getVariaveis().size());
                    /*
                    // Descendente 1 -> Ind1_1 + Ind2_2;
                    Operadores.crossoverAritmetico_corte(p1, p2, desc1, corte);

                    // Descendente 2 -> Ind2_1 + Ind1_2;
                    Operadores.crossoverAritmetico_corte(p2, p1, desc2, corte);

                    // Mutação*/
                    //switch (casoT) {

                    //case ONE:
                    //Crossover desc1
                    Operadores.crossoverAritmetico(p1, p2, desc1, corte);
                    //Crossover desc2
                    Operadores.crossoverAritmetico(p2, p1, desc2, corte);

                    //mutacao desc1
                    Operadores.mutacao(desc1, this);
                    //mutacao desc2
                    Operadores.mutacao(desc2, this);

                    /*     break;

                        case TWO:
                            //Crossover desc1
                            Operadores.crossoverAritmetico_multipontos(p1, p2, desc1);
                            //Crossover desc2
                            Operadores.crossoverAritmetico_multipontos(p2, p1, desc2);

                            //mutacao desc1
                            Operadores.mutacao(desc1, this);
                            //mutacao desc2
                            Operadores.mutacao(desc2, this);

                            break;

                    }*/
                    // Avaliar as novas soluções
                    problema.calcularFuncObjetivo(desc1);
                    problema.calcularFuncObjetivo(desc2);

                    // Inserir na nova população
                    novaPopulacao.getIndividuos().add(desc1);
                    novaPopulacao.getIndividuos().add(desc2);

                }//if
            } //for-população

            //definir a rotina
            rotinaElitista();
            exec.setRotina(EnumRotinaAdotada.ELITISTA);

            // Imprimir a situacao atual
            Collections.sort(populacao.getIndividuos());
            //System.out.println("Gen = " + g + "\tCusto = " + populacao.getIndividuos().get(0).getFuncaoObjetivo());
            System.out.println("Worse: " + populacao.getIndividuos().get(0).getFuncaoObjetivo() + "| Best: " + populacao.getIndividuos().get(populacao.getIndividuos().size() - 1).getFuncaoObjetivo());
  /*          if (populacao.getIndividuos().get(0).getFuncaoObjetivo() == 0.0 && populacao.getIndividuos().get(populacao.getIndividuos().size() - 1).getFuncaoObjetivo() != 0) {
                exec.setGeracaoDecisiva(g);
                exec.setPior(populacao.getIndividuos().get(populacao.getIndividuos().size() - 1).clone());
                exec.getPior().setID(populacao.getIndividuos().size() - 1);
            }
  */      } //proxima geracao

        System.out.println("Melhor resultado: ");
        System.out.println(populacao.getIndividuos().get(populacao.getIndividuos().size() - 1).getVariaveis());
        Instant fim = Instant.now();

        exec.setMelhor(populacao.getIndividuos().get(populacao.getIndividuos().size() - 1).clone());
        exec.setPior(populacao.getIndividuos().get(0).clone());
        exec.setDuracao(Duration.between(inicio, fim));
        exec.setDesvioPadrao(populacao.calcularDesvioPadrao());
        //System.err.println("---------------------DEsvio: "+exec.getDesvioPadrao());
        exec.setID(execucoesCaso.size() + 1);

        execucoesCaso.add(exec);

        return populacao.getIndividuos().get(0).getFuncaoObjetivo();

    }

    public void rotinaTorneio() throws Exception {
        Random rnd = new Random();

        populacao.getIndividuos().addAll(novaPopulacao.getIndividuos());
        while (populacao.getIndividuos().size() > this.tamanhoPopulacao) {

            int ind1, ind2 = 0;

            ind1 = rnd.nextInt(populacao.getIndividuos().size());

            do {
                ind2 = rnd.nextInt(populacao.getIndividuos().size());
            } while (ind1 == ind2);

            if (populacao.getIndividuos().get(ind1).compareTo(populacao.getIndividuos().get(ind2)) >= 0) { //caso ind1 seja melhor que ind2
                populacao.getIndividuos().remove(ind2);
            }

        }

        novaPopulacao.getIndividuos().clear();
    }

    public void rotinaAleatoria() {
        populacao.getIndividuos().addAll(novaPopulacao.getIndividuos());

        Collections.shuffle(populacao.getIndividuos());
        //embaralha a ordem dos individuos

        Random rnd = new Random();

        while (populacao.getIndividuos().size() > this.tamanhoPopulacao) {
            populacao.getIndividuos().remove(rnd.nextInt(populacao.getIndividuos().size()));
        }

    }

    public void rotinaElitista() throws Exception {
        populacao.getIndividuos().addAll(novaPopulacao.getIndividuos());
        Collections.sort(populacao.getIndividuos());

        populacao.getIndividuos().subList(this.tamanhoPopulacao, populacao.getIndividuos().size()).clear();
        //eliminou os individuos excedentes com menor desempenho

        novaPopulacao.getIndividuos().clear();

    }

    private void gerarPerturbacao(Individuo trial, Individuo xr1, Individuo xr2) {

        // trial <- Diferenca entre r1 e r2
        for (int i = 0; i < this.D; i++) {
            Double diferenca = xr1.getVariaveis().get(i)
                    - xr2.getVariaveis().get(i);

            trial.getVariaveis().add(reparaValor(diferenca));
        }

    }

    private void mutacao(Individuo trial, Individuo xr0) {

        // trial <- r0 + F * perturbacao (trial)
        for (int i = 0; i < this.D; i++) {

            Double valor = this.taxaMutacao * xr0.getVariaveis().get(i)
                    + this.taxaMutacao * (trial.getVariaveis().get(i));

            trial.getVariaveis().set(i, reparaValor(valor));
        }

    }

    private void crossover(Individuo trial, Individuo target) {

        Random rnd = new Random();
        int j = rnd.nextInt(this.D);

        for (int i = 0; i < this.D; i++) {

            if (!(rnd.nextDouble() <= this.taxaCrossover || i == j)) {
                // Target
                trial.getVariaveis().set(i, target.getVariaveis().get(i));
            }

        }

    }

    private Double reparaValor(Double valor) {
        if (valor < this.minimo) {
            valor = this.minimo;
        } else if (valor > this.maximo) {
            valor = this.maximo;
        }

        return valor;
    }
}
