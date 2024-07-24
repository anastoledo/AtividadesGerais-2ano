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

$pessoa1->nome = "Ana Júlia";
$pessoa1->endereco = "Rua Itaboraí";
$pessoa1->cidade = "Foz do Iguaçu";
$pessoa1->UF = "PR";
$pessoa1->altura = "1.68";

$pessoa1 ->falarOla();
$pessoa1->falarEndereco();
$pessoa1->falarAltura();

