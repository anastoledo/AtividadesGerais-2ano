<?php

class Animais {

    //atributos
    public $especie;
    public $patas;
    public $pele;

    //métodos
    function __construct($patas, $pele, $especie) {
        $this->especie = $especie;
        $this->patas = $patas;
        $this->pele = $pele;
    }
    function sons ($s) {
        print "Esse animal faz $s!\n";
    }
    function movimento ($m) {

        print "Esse animal se movimenta pelo $m \n ";
    }
}

//programa principal
$num = readline("Quantos animais deseja fazer? \n");
for ($i=1; $i <= $num; $i++) { 
    $especie = readline("Qual a espécie do $i animal? \n");
    $patas = readline("O $i animal possui quantas patas? \n"); 
    $pele = readline("Qual o tipo de pele do $i animal? (Pena ou pelo)\n");
    $animais = new Animais($especie,$patas, $pele);

    $animais -> sons($som = readline("Que som esse bicho faz? \n"));
    $animais -> movimento($movimento = readline("Como esse animal se movimenta? (Chão ou ar) \n"));

    print "*****************************************************\n";
}
