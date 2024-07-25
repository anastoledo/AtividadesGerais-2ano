<?php

class Retangulo {

    //atributos
    public $base;
    public $altura;

    //método
    function area () {
        $area = $this->base*$this->altura;
        print "A área do retângulo é $area\n";
    }
    function perimetro () {
        $perimetro = 2*($this->base+$this->altura);
        print "Já o perimetro é $perimetro\n";
    }

}

//programa principal
$retangulo1 = new Retangulo();

$retangulo1->base = readline ("Informe a base: \n");
$retangulo1->altura = readline ("Informe a altura: \n");

$retangulo1-> area();
$retangulo1-> perimetro();

print "*********************\n";

$retangulo2 = new Retangulo();

$retangulo2->base = readline ("Informe a base: \n");
$retangulo2->altura = readline ("Informe a altura: \n");

$retangulo2-> area();
$retangulo2-> perimetro();

print "*********************\n";

$retangulo3 = new Retangulo();

$retangulo3->base = readline ("Informe a base: \n");
$retangulo3->altura = readline ("Informe a altura: \n");

$retangulo3-> area();
$retangulo3-> perimetro();
