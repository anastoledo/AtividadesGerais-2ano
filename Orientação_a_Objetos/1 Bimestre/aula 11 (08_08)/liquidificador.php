<?php 

class Liquidificador {

    //atributos
    private $cor;
    private $marca;
    private $voltagem;
    private $capacidade;

    //construtor
    public function __construct($cor) {
        $this->cor = $cor;
    }

    //metodos
    public function ligar() {
        print "Ligado\n";
        $this->girarMotor();

    }
    public function desligar () {
        print "Desligado\n";
        $this->pararMotor();
        
    }
    public function inverter () {
        print "Motor invertido\n";
    }
    private function girarMotor () {
        print "Motor girando\n";
    }
    private function pararMotor () {
        print "Motor parado\n";
    }

    //gets e sets

    public function getCor() {
        return $this->cor;
    }

    public function setCor($cor): self {
        $this->cor = $cor;

        return $this;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca): self {
        $this->marca = $marca;

        return $this;
    }

   
    public function getVoltagem() {
        return $this->voltagem;
    }

   
    public function setVoltagem($voltagem): self {
        $this->voltagem = $voltagem;

        return $this;
    }

   
    public function getCapacidade() {
        return $this->capacidade;
    }

  
    public function setCapacidade($capacidade): self {
        $this->capacidade = $capacidade;

        return $this;
    }
} //fim class


//programa principal

$liq = new Liquidificador ($cor);
$liq -> ligar();
$liq -> desligar();
