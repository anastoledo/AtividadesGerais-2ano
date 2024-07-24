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

$retangulo1->base = "13";
$retangulo1->altura = "4";

$retangulo1-> area();
$retangulo1-> perimetro();

print "*********************\n";

$retangulo2 = new Retangulo();

$retangulo2->base = "2";
$retangulo2->altura = "4";

$retangulo2-> area();
$retangulo2-> perimetro();

print "*********************\n";

$retangulo3 = new Retangulo();

$retangulo3->base = "13";
$retangulo3->altura = "22";

$retangulo3-> area();
$retangulo3-> perimetro();
