<?php

class Calculadora {
    private $numA;
    private $numB;

    public function soma () {
        return $this->numA +$this->numB;
    }

    public function subtracao () {
        return $this->numA - $this->numB;
    }

    public function multiplicacao () {
        return $this->numA * $this->numB;
    }

    public function divisao () {
        return $this->numA / $this->numB;
    }

    public function resto () {
        return $this->numA % $this->numB;
    }

    public function getNumA() {
        return $this->numA;
    }

 
    public function setNumA($numA): self {
        $this->numA = $numA;

        return $this;
    }

    
    public function getNumB() {
        return $this->numB;
    }

    public function setNumB($numB): self {
        $this->numB = $numB;

        return $this;
    }

}

//programa principal

$calculadora = new Calculadora();
$calculadora->setNumA(readline("Informe o valor de A: "));
$calculadora->setNumB(readline("Informe o valor de B: "));

print " A soma de A + B é " . $calculadora->soma(). "\n ";
print " A subtração de A - B é " . $calculadora->subtracao(). "\n ";
print " A multiplicação de A X B é " . $calculadora->multiplicacao(). "\n ";
print " A divisão de A / B é " . $calculadora->divisao(). "\n ";
print " O resto de A % B é " . $calculadora->resto(). "\n ";
