<?php

class Pessoa {
    
    //atributos -> coisas
    public $nome;
    public $endereco;
    public $cidade;
    public $UF;
    public $altura;

    //métodos -> ações
    function falarOla () {
        print "Olá mundo, sou $this->nome \n";
    }
    function falarEndereco () {
        print "Moro em $this->endereco, $this->cidade/$this->UF \n";
    }
    function falarAltura () {
        print "Tenho $this->altura metros! \n";
    }

}

//programa inicial
$pessoa1 = new Pessoa();

$pessoa1->nome = readline ("Informe o nome: \n");
$pessoa1->endereco = readline ("Informe o endereço: \n");
$pessoa1->cidade = readline ("Informe a cidade: \n");
$pessoa1->UF = readline ("Informe o UF: \n");
$pessoa1->altura = readline ("Informe a altura: \n");

$pessoa1 ->falarOla();
$pessoa1->falarEndereco();
$pessoa1->falarAltura();

