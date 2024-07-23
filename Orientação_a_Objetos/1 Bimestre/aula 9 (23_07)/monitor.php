<?php

class Monitor {

    //atributos
    public $cor;
    public $resolucao;
    public $marca;

    //métodos
    function ligar () {
        print "Computador foi ligado!....\n";
    }
    function desligar () {
        print "Computador foi desligado!....\n";
    }
    function mostrarImagem () {
        print "Computador está mostrando a imagem com a resolução $this->resolucao!....\n";
    }
}

//programa principal 
$monitor1 = new Monitor();

$monitor1 ->cor = "Preto";
$monitor1 ->resolucao = "1080x1920";
$monitor1 ->marca = "AOC";

$monitor1 ->ligar();
$monitor1->mostrarImagem();
$monitor1->desligar();
print "Cor do monitor 1: $monitor1->cor \n";

print "****************\n";

$monitor2 = new Monitor();

$monitor2 ->cor = "Prata";
$monitor2 ->resolucao = "1966x768";
$monitor2 ->marca = "Lenovo";

$monitor2 ->ligar();
$monitor2->mostrarImagem();
$monitor2->desligar();

