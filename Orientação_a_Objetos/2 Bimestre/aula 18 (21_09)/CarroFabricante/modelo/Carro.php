<?php

require_once("Fabricante.php");

class Carro {

    private $modelo;
    private $anoFabricacao;
    private Fabricante $fabricante;

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo): self {
        $this->modelo = $modelo;

        return $this;
    }

    public function getAnoFabricacao() {
        return $this->anoFabricacao;
    }

    public function setAnoFabricacao($anoFabricacao): self {
        $this->anoFabricacao = $anoFabricacao;

        return $this;
    }

    public function getFabricante(): Fabricante {
        return $this->fabricante;
    }

    public function setFabricante(Fabricante $fabricante): self {
        $this->fabricante = $fabricante;

        return $this;
    }

    public function __toString() {
      $imprimir = "Modelo: " . $this->getModelo() . " \nAno de Fabricação: " . $this->getAnoFabricacao() . " \nNome do Fabricante: " . $this->getFabricante()->getNome() . " \nSigla do Fabricante: " . $this->getFabricante()->getSigla() . "\n\n";
      return $imprimir; 
    }
}