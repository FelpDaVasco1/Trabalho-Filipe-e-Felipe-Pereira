<?php

class ReceitaCulinária{
    // Primeiro defina as variáveis.
    private $nome;
    private $ingredientes;
    private $modopreparo;
    private $tempocozimento;
    private $paísorigem;
//Função que vai executar ao ser instanciado o objeto
    public function __construct(string $nome, string $ingredientes, string $modopreparo, string $tempocozimento, string $páisorigem){
        $this->definirNome($nome);
        $this->definirIngredientes($ingredientes);
        $this->definirModopreparo($modopreparo);
        $this->definirTempocozimento($tempocozimento);
        $this->definirPaísorigem($paísorigem);
    }
    //Funções de operações dos objetos
    public function definirNome(string $nome){
        $this->nome = $nome;
    }

    public function definirIngredientes(string $ingredientes){
        $this->ingredientes = $ingredientes;
    }

    public function definirModopreparo(string $modopreparo){
        $this->modopreparo = $modopreparo;
    }
    public function definirTempocozimento(string $tempocozimento){
        $this->tempocozimento = $tempocozimento;
    }
    public function definirPaísorigem(string $paísorigem){
        $this->paísorigem = $paísorigem;
    }

    public function exibirNome(){
        return $this->nome;
    }

    public function exibirIngredientes(){
        return $this->ingredientes;
    }                                                                          

    public function exibirModopreparo(){
        return $this->modopreparo;
    }
    public function exibirTempocozimento(){
        return $this->tempocozimento;
    }
    public function exibirPaísorigem(){
        return $this->paísorigem;
    }
}