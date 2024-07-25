<?php

class Retangulo {

    //atributos
    public $base;
    public $altura;

    //método
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

for ($i=0; $i < 3 ; $i++) { 
    $retangulo = new Retangulo();

    $retangulo->base = readline ("Informe a base: \n");
    $retangulo->altura = readline ("Informe a altura: \n");

    $retangulo-> area();
    print "A área do retangulo $i é igual a ". $retangulo-> area() . " cm \n";
    $retangulo-> perimetro();
    print "O perimetro do retangulo $i é igual a ". $retangulo-> perimetro() . " cm \n";

    print "*********************\n";
}

