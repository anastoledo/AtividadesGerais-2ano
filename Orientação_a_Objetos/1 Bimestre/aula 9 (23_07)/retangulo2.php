<?php

class Retangulo {

    //atributos
    public $base;
    public $altura;

    //método
    function  __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }
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
$retangulo1 = new Retangulo($base = readline ("Informe a base: \n"), $altura = readline ("Informe a altura: \n"));
$retangulo1-> area();
$retangulo1-> perimetro();
