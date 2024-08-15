<?php

class Veiculo {
    private $capacidade;
    private $passageiros;

    public function venderPassagem($quantidade) {
        if ($this->passageiros + $quantidade <= $this->capacidade) {
            $this->passageiros = $this->passageiros + $quantidade;
            return true;
        } else {
            return false;
        }
    }

    public function getPassageiros() {
        return $this->passageiros;
    }

    public function getCapacidade() {
        return $this->capacidade;
    }

    public function setCapacidade($capacidade): self {
        $this->capacidade = $capacidade;

        return $this;
    }
    
    public function setPassageiros($passageiros): self
    {
        $this->passageiros = $passageiros;

        return $this;
    }
}

// Programa principal

