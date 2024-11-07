<?php

require_once("Espaco.php");

class Hotel extends Espaco {
    
    private int $numeroEstrelas;
    private bool $cafeIncluso;

    public function getDadosHotel (){
        $valores = "Nome: " . $this->nome . " | Endereço: " . $this->endereco . " | Número estrelas: " . $this->numeroEstrelas . "| Café incluso " . ($this->cafeIncluso ? "Sim" : "Não" ) . "\n";

        return $valores;
    }

    public function getNumeroEstrelas(): int
    {
        return $this->numeroEstrelas;
    }

    public function setNumeroEstrelas(int $numeroEstrelas): self
    {
        $this->numeroEstrelas = $numeroEstrelas;

        return $this;
    }

    public function isCafeIncluso(): bool
    {
        return $this->cafeIncluso;
    }

  
    public function setCafeIncluso(bool $cafeIncluso): self
    {
        $this->cafeIncluso = $cafeIncluso;

        return $this;
    }
}
