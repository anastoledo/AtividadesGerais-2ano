<?php

require_once("Veiculo.php");

class Onibus extends Veiculo{

    public function ValorViagem()
    {
        return $this->getValorAluguel() + (4.20 * $this->getQuilometros());
    }

    public function getTipo()
    {
        return "onibus";
    }
}