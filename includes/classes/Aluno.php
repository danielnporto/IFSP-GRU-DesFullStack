<?php

class Aluno{
    // propriedades
    private $prontuario;
    private $nome;
    private $sobrenome;
    private $idade;

    function __construct($nome, $sobrenome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sobrenome = $sobrenome;
    }

    //metodos
    function falarNome(){
        // 'this->' serve para acessar as variaveis da classe
        echo $this->nome.' '.$this->sobrenome.'<br>';
    }

    function falarIdade(){
        // 'this->' serve para acessar as variaveis da classe
        echo $this->idade;
    }
}

?>