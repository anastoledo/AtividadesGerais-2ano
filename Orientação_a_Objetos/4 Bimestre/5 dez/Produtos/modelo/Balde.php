<?php 

require_once("Produto.php");

class Balde extends Produto {
    private $capacidade;

    public function getDados(){

        $frase = "---- BALDE ----\n\n Descrição: " . $this->descricao . " | Unidade de medida: " . $this->unidadeMedida . " | Capacidade: " . $this->capacidade . "\n\n";
        
        return $frase;

    }

    public function getCapacidade()
    {
        return $this->capacidade;
    }

    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }
}