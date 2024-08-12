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
        return $area;
    }
    function perimetro () {
        $perimetro = 2*($this->base+$this->altura);
        return $perimetro;
    }

}

//programa principal
for ($i=1; $i < 3; $i++) { 
    $base = readline("Informe a base: \n");
    $altura = readline("Informe a altura: \n");

    $retangulo = new Retangulo ($base, $altura);

    $retangulo-> area();
    print "A área do $i retangulo é igual a ". $retangulo-> area() . " cm \n";
    $retangulo-> perimetro();
    print "O perimetro do $i retangulo é igual a ". $retangulo-> perimetro() . " cm \n";
}

