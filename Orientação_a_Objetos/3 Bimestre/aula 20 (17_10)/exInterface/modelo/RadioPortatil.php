<?php

require_once("IRadio.php");

class RadioPortatil implements IRadio{
    //Atributos
    private $cor;
    private $marca;

    //Métodos
    public function ligarRadio(){
        print "Rádio portátil ligado!\n";
    }

    public function desligarRadio(){
        print "Rádio portátil desligado!\n";
    }

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
}